<?php
include "class/Traitement.php";

if(isset($_POST["login"])){
    $process = new Traitement($_POST);
    if($process->verifierUSer()){
        $user = $_SESSION["CURRENT_USER"];
        echo "<h1> Bienvenue ".$user["nom"]." ".$user["prenom"]."<h1>";
    }else{
        echo "<h1> L'utlisateur n'est pas dans notre base de donnees <h1>";
    }
    $process->afficherLesDonnees();
}