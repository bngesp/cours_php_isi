<?php
include "class/Traitement.php";

if(isset($_POST["login"])){
    $process = new Traitement($_POST);
    $process->afficherLesDonnees();
}