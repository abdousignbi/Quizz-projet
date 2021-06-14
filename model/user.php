<?php
   function find_login_password(string $login,  string $password){
    // 1 lire le contenu du fichier
    $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
    // 2 convertir le json
    $arrayUser = json_decode($json ,true);
    foreach ($arrayUser as $utilisateur) {
       if (($utilisateur['login']==$login && $utilisateur['password']==$password) ) {
           return $utilisateur;
       }
    }
    return [];
    //function login_exist(string $login):array{
        // 1 lire le contenu du fichier
        $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
        // 2 convertir le json
        $arrayUser = json_decode($json ,true);
        foreach($arrayUser as $utilisateur){
            if ($utilisateur['login']==$login) {
              return $utilisateur;
            }
        }
        return [];
}
function add_user(array $utilisateur){
    // 1 lire le contenu du fichier
    $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
    // 2 convertir le json
    $arrayUser = json_decode($json ,true);
    $arrayUser[] = $utilisateur;
    $json= json_encode($arrayUser);
    file_put_contents(ROUTE_DIR.'data/user.data.json',$json);
 }
?>