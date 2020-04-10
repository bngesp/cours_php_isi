<?php
// isset => variable defini ? 
// empty => varable est vide ? 


if(isset($_POST['login'])){
    $nom_user  = $_POST['login'];
    setcookie("user", $nom_user); // user = 'jean' => $_COOKIE
    header('Location: home.php'); /// 
}
// if(empty($nom))
?>