<?php
if(isset($_POST['login'])){
    session_start();
    $_SESSION["login"] = $_POST['login'];
    header('Location: home.php');
}