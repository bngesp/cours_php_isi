<?php

// informations de connection a la base de donnees 
$bdname = "cours_poo";
$bdlogin = "root";
$bdpass = "root"; // windows => ""
$bdhost = "127.0.0.1"; // Localhost 

// mysqli 
// PDO

$bd = new PDO('mysql:dbname='.$bdname.';host='.$bdhost, $bdlogin, $bdpass);
$login = "soumela"; // $_POST['login']
$pass = "passer"; //  $_POST['mdp']

$request = $bd->prepare("SELECT * FROM user WHERE login=:pseudo and mdp=:password");
$request->execute(
    array(
        "password" => $pass,
        "pseudo" => $login
    )
);
$data = $request->fetchAll(PDO::FETCH_ASSOC);

if(count($data) === 0){
    echo "l'utilisateur n'existe pas dans notre base de donnees"; // return false 
}else{
    $user = $data[0];
    echo "Bienvenue monsieur ".$user["nom"]; // return true
}
    // echo "<pre> ";
    // var_dump($data);
    // echo "</pre>";
// $query = $bd->query("select * from user");
// $data_from_bd = $query->fetchAll(PDO::FETCH_ASSOC);

// foreach ($data_from_bd as $key => $user) 
// {
//     echo "user numero $key <pre> ";
//     var_dump($user["login"]);
//     echo "</pre>";
// }

// echo "l'email est : ".$data_from_bd["email"];