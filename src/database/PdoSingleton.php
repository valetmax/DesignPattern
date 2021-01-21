<?php

namespace App\Database;

use PDO;

class PdoSingleton {
    private static ?self $instance = null;
    private $pdo;

    /**
     * Undocumented function
     */
    private function __construct() {
        $this->pdo = $this->connexionBDD();
    }

    /**
     * Retourne une instance de pdo
     * 
     * @return PdoSingleton
     */
    public static function getInstance(): PdoSingleton {
        if(!self::$instance instanceof PdoSingleton) {
            self::$instance = new PdoSingleton();
        } 
        return self::$instance;
    }

    public function connexionBDD()
    {
        try
        {
            $bdd=new PDO('mysql:host=localhost;dbname=archi_logiciel_test;charset=utf8', 'root', '');
            return $bdd;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}