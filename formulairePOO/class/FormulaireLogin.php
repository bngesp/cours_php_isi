<?php

/**
 * Class fille de formulaire pour gerer seulement l'authentification
 */

class FormulaireLogin extends Formulaire{

    // Action
    // Method
    public function __construct($action, $method)
    {
        parent::__construct($action, $method);
        // $this->action=$action;
        // $this->method=$method;
    }

    public function login($loginName): string
    {
        
        $content =  $this->label($loginName);
        $content.= $this->input("text", $loginName); 
        
        return $this->group($content);
    }

    public function password($pwd): string
    {
        
        $content =  $this->label($pwd);
        $content.= $this->input("password", $pwd); 
        
        return $this->group($content);
    }

    public  function boutonLogin($validateTexte, $canceledTexte): string
    {
        
        $content=  $this->button("submit", $validateTexte, "btn-success");
        $content.= $this->button("reset", $canceledTexte, "btn-primary");
        
        return $this->group($content);
    
    }

    public function group($body): string {
        $content = '';
        $content.= "<div class=\"form-group\">";
        $content.= $body;
        $content.= "</div>";

        return $content;

    }

    public function afficherLoginForm(): string
    {
        $content = '';
        $content.= $this->header();
        $content.= $this->login("login");
        $content.= $this->password("mdp");
        $content.= $this->boutonLogin("Valider", "Retour");
        $content.= $this->footer();
        return $content;
    }

}