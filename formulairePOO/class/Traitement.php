<?php 

/**
 * Class permettant de faire le traitement du formulaire
 */


class Traitement 
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
        
    }

    public function afficherLesDonnees()
    {
        echo "<h4>voici les donnees</h4><pre>";
        var_dump($this->data);
        echo "</pre>";
    }

    public function verifierUSer()
    {
        // $_POST['login'], $_POST['mdp']
        // return true si login et le mdp existe dans la bd
        // return false si login et le mdp n'existe pas dans la bd
    }

}
