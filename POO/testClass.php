<?php
include "Personne.php";

$obj1 = new Personne("Daffe", "Soumela", 45);

// $obj1->setNom("Daffe");
// $obj1->setPrenom("Soumela");
// $obj1->setAge(15);
// $obj1->nom; // error


$obj1->affichage("avant gandir");
$obj1->grandir();  // incrementer l'age => age++

$obj1->affichage("apres grandir");

$obj1->mourrir();  // remettre l'age a zero => age=0
$obj1->affichage("apres mourir");


