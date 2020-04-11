<?php

include 'Personne.php';

// $tab['test'] = 5;

$mendy = new Personne(); // 
$mendy->setNom("mendy");
echo $mendy->getNom();
// $mendy->afficherPersonne();


$yennick = new Personne();// 
$yennick->afficherPersonne();