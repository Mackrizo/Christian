<?php

class PDO
{

    /**
     *
     * @var PDO
     * @access private
     * @static
     */
    private static $_instance = null;

    /**
     * Constructeur de la classe
     *
     * @param
     *            void
     * @return void
     */
    private function __construct()
    {}

    /**
     * M�thode qui cr�e l'unique instance de la classe
     * si elle n'existe pas encore puis la retourne.
     *
     * @param
     *            void
     * @return PDO
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new PDO();
        }
        
        return self::$_instance;
    }

    /**
     * Connect to the database
     *
     * @return bool false on failure / mysqli MySQLi object instance on success
     */
    public function connect()
    {
        // Try and connect to the database
        if (! isset(self::$_instance)) {
            // Load configuration as an array. Use the actual location of your configuration file
            
            self::$_instance = new mysqli("localhost", "root", "mackrizo", "Moviepolis");
        }
        
        // If connection was not successful, handle the error
        if (self::$_instance === false) {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            return false;
        }
        return self::$_instance;
    }
    
    /**
     * Interroge la DB
     *
     * @param $query : la requete
     * @return mixed Le resultat de  mysqli::query() 
     */
    public function query($query) {
        // Connect to the database
        $_instance = $this -> connect();
        
        // Query the database
        $result = $_instance -> query($query);
        
        return $result;
    }
    
    /**
     * Recupere de la DB (SELECT query)
     *
     * @param $query : la requete
     * @return bool False en cas d'echec / Sinon renvoie un tableau 
     */
    public function select($query) {
        $rows = array();
        $result = $this -> query($query);
        if($result === false) {
            return false;
        }
        while ($row = $result -> fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    /**
     * Recupere la derniere erreur de la DB
     *
     * @return string Database  : message d'erreur
     */
    public function error() {
        $_instance = $this -> connect();
        return $_instance -> error;
    }
    
    /**
     * Echappe les quotes pour valider la requete en DB
     *
     * @param string $value The value to be quoted and escaped
     * @return string The quoted and escaped string
     */
    public function quote($value) {
        $_instance = $this -> connect();
        return "'" . $_instance -> real_escape_string($value) . "'";
    }
    
    public function close(){
        mysqli_close($_instance);
    }
}

