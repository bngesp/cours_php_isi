<?php

/**
 * Class BD pour manager la connexion et 
 * les requetes de la base de donnees
 */
class BD {

    public static $bdname = "cours_poo";
    public static $bdlogin = "root";
    public static $bdpass = "root"; // windows => ""
    public static $bdhost = "127.0.0.1"; // Localhost 
    
    public static $bd = null;
    
    public static function getInstance()
    {
        // var_dump($_SESSION["bd"]);
        if(static::$bd == null) {
            echo "meme instance utilisee";
            static::$bd = new PDO('mysql:dbname='.static::$bdname.';host='.static::$bdhost, static::$bdlogin, static::$bdpass);
            return static::$bd;
        }
            return static::$bd;
    }
}