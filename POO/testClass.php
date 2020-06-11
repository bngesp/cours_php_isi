<?php
include "Personne.php";

$obj1 = new Personne("Daffe", "Soumela", 45);

// $obj1->setNom("Daffe");
// $obj1->setPrenom("Soumela");
// $obj1->setAge(15);
// $obj1->nom; // error


echo "<pre>";
var_dump($obj1);
echo "</pre>";

$obj1->grandir();  // incrementer l'age
$obj1->mourrir();  // remettre l'age a zero


// echo "<pre>";
// var_dump($obj1);
// echo "</pre>";

