<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['views'])) {
            if ($_GET['views'] == 'connexion') {
                require(ROUTE_DIR.'views/security/connexion.html.php');
            }elseif ($_GET['views'] == 'inscription') {
                require_once(ROUTE_DIR.'views/security/inscription.html.php');
            }elseif($_GET['views']=='deconnexion') {
            require(ROUTE_DIR.'views/security/connexion.html.php');
            }
           
        } else {
           require_once(ROUTE_DIR.'views/security/connexion.html.php');
        }
    }elseif(($_SERVER['REQUEST_METHOD'] == 'POST')) {
                if(isset($_POST['action'])){
                    if ($_POST['action']=='connexion') {
                        connexion($_POST['login'] , $_POST['password']);
                    }elseif ($_POST['action']=='inscription') {
                        unset($_POST['controllers']);
                        unset($_POST['action']);
                        unset($_POST['inscrir']);
                        unset($_POST['sexe']);
                       unset($_POST['confirme']);
                        inscription($_POST);
                    }
                }
    }
    function connexion( $login ,  $password): void{   
        $arrayError=array(); 
        validation_login($login, 'login', $arrayError);
        validation_password($password ,'password', $arrayError);
        if (!form_valid($arrayError)) {   
                           $utilisateur=find_login_password($login , $password);
             $_SESSION['test1']=$arrayError;
            header("location:" .WEB_ROUTE.'?controllers=security&views=connexion');     
        
               if(count($utilisateur)==0){
                   $arrayError['errorconect']="login ou password incorecte";
                   $_SESSION['arrayError']=$arrayError;
                   header("location:" .WEB_ROUTE.'?controllers=security&views=connexion');
               }else{
                   $_SESSION['utilisateurConnec']=$utilisateur;
                   if($utilisateur['role']=='ROLE_ADMIN'){
                    header("location:" .WEB_ROUTE.'?controllers=admin&views=list.ques');
                   }elseif($utilisateur['role']=="ROLE_JOUEUR"){
                    header("location:" .WEB_ROUTE.'?controllers=joueur&views=jeux');
                   }else{
                    header("location:" .WEB_ROUTE.'?controllers=security&views=connexion.html');   
                   }
               }
           } 

             
    }
    function inscription(array $data):void{
        $arrayError=array();
        extract($data);
       validation_mail($mail, 'mail', $arrayError);
       validation_motpass($motpass ,'motpass', $arrayError);
       validation_nom($nom, 'nom', $arrayError);
       validation_prenom($prenom,'prenom', $arrayError);
       //var_dump($arrayError);
       if (form_valid($arrayError)) {
           if($motpass!=$confirme){
               $arrayError['motpass']="les mots de passe ne sont pas identique";
               if (est_admin()) {
                $data['role'] = 'ROLE_ADMIN';
               }else {
                    $data['role'] = 'ROLE_JOUEUR';
               }
                 add_user($data);
                 header("location:" .WEB_ROUTE.'?controllers=security&views=connexion');
                }   
           }
        else{
              $_SESSION['error']=$arrayError;
              header("location:" .WEB_ROUTE.'?controllers=security&views=inscription');
          }
   }
     
 ?> 