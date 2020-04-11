<?php
class Personne{

    //Attributs
    private $nom;
    private $prenom;
    private $age;


    

    public function getNom(){ // getter pour la variable Nom
        return $this->nom;
    }

    public function setNom(string $nom_param){ // setter pour la variable nom
        $this->nom = $nom_param;
    }

    //methodes
    public function grandir(){

    }

    public function mourir(){

    }

    public function afficherPersonne(){
        echo "<pre>";
        var_dump($this);
        echo "<br></pre>";
    }

}