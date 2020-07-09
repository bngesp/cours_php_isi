<?php

class Personne {
    // Les attributs
    private $nom = "inconnu";
    private $prenom = "inconnu";
    private $age = 1;


    function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;

    }

    public function affichage($message){
        echo "<h1>$message</h1><pre>";
        var_dump($this);
        echo "</pre>";
    }

    // les methodes 
    public function grandir(){
        // definition de la methode
        // gandir incrementer l'age
        $this->age ++;
    }

    public function mourrir(){
        // implementation de la methode 
        // remettre l'age a zero
        $this->age = 0;
    }

    // getter
    public function getNom(): string {
        return $this->nom;
    }
    // setter 
    public function setNom(string $nom2){
        $this->nom = $nom2;
    }


    public function getPrenom(): string { 
        return $this->prenom;
    }

    public function setPrenom(string $premom){
        $this->prenom = $premom;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age){
        $this->age = $age;
    }
}