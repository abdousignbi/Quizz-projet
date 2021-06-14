<?php
function est_vide(string $valeur):bool{
     return empty($valeur);
}
function identique(string $valeur1, string $valeur2):bool{
    if ($valeur1!=$valeur2) {
        return true;
    }else{
    return false;
    }
}
function est_numerique($valeur):bool{
    $valeur=(int) $valeur;
    return is_int($valeur);
}
function est_email($valeur):bool{
    if (filter_var($valeur ,FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}
    function longueur_password(string $valeur ,int $min=6 , int $max=10):bool{
        
        return strlen($valeur) < $min ||strlen($valeur) > $max ; 
    }
function validation_login(string $valeur , string $key, array &$arrayError):void{
     if (est_vide($valeur)) {
         $arrayError[$key]="rempli le champ"; 
       }elseif (!est_email($valeur)) {
        $arrayError[$key]= 'saisir un email valide';
    }
}
function validation_password(string $valeur , string $key, array &$arrayError):void{
    define("MAX",10 );
        define("MIN",6 );
    if (est_vide($valeur)) {
       $arrayError[$key]="rempli le champ";
        } elseif(longueur_password($valeur)) {
    $arrayError[$key]="le password est borne par ".MIN .' et '.MAX;
               }

  }
  function validation_mail(string $valeur, string $key, array &$arrayError):void{
    if (est_vide($valeur)) {
        $arrayError[$key]="rempli le champ"; 
      }elseif (!est_email($valeur)) {
       $arrayError[$key]= 'saisir un email valide s/il vous plait';
   }
}

function validation_confirme(string $valeur , string $key, array &$arrayError):void{
    if (est_vide($valeur)) {
        $arrayError[$key]="rempli le champ"; 
      }elseif (!est_email($valeur)) {
       $arrayError[$key]= 'saisir un email valide s/il vous plait';
   }
}
  function validation_motpass(string $valeur , string $key, array &$arrayError):void{ 
        define("MAX1",10 );
        define("MIN1",6 );
    if (est_vide($valeur)) {
       $arrayError[$key]="rempli le champ ";
        } elseif(longueur_password($valeur)) {    
    $arrayError[$key]="le password doit etre comprise entre ".MIN1.'et '.MAX1;
               }
  }
  function validation_nom(string $valeur , string $key, array &$arrayError):void{
    if (est_vide($valeur)) {
        $arrayError[$key]="rempli le champ";
         }
  }
  function validation_prenom(string $valeur , string $key, array &$arrayError):void{
    if (est_vide($valeur)) {
        $arrayError[$key]="rempli le champ";
         }
  }
function date_valid():void{
      
}
  function form_valid($arrayError):bool{
    if (count($arrayError)==0) {
        return true;
    }else{
        return false;
    }
    
}

?>