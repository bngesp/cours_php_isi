<?php

include 'Personne.php';

$mendy = new Personne();
$mendy->nom ="mendy";
$mendy->prenom = "babacar";
$mendy->age = 17;
echo "<pre>";
var_dump($mendy);
echo "<br></pre>";
$yennick = new Personne();
$yennick->age =45;

echo "<pre>";
var_dump($yennick);
echo "</pre>";