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
        include_once "BD.php";
        $bd_connect = BD::getInstance(); // static

        $request = $bd_connect->prepare("SELECT * FROM user WHERE login=:pseudo and mdp=:password");
        $request->execute(
            array(
                "password" => $this->data['mdp'],
                "pseudo" => $this->data['login']
            )
        );
        $users = $request->fetchAll(PDO::FETCH_ASSOC);

        if(count($users) === 0 ) {
            return false;
        }
        else {
            $utilisateuConnecte = $users[0];
            $_SESSION["CURRENT_USER"] = $utilisateuConnecte;
            return true;
        }

        // d'apres le constructeur: data = _POST
        // $_POST['login'], $_POST['mdp']
        // return true si login et le mdp existe dans la bd
        // return false si login et le mdp n'existe pas dans la bd
    }

}
