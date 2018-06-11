<?php namespace dao;

class Database
{

    /**
     *
     * @var Database
     * @access private
     * @static
     */
    private static $_instance = null;

    public function connect()
    {
     	$this->_instance = mysqli_connect("localhost", "root", "mackrizo", "Moviepolis");
        
        if (mysqli_connect_errno()) {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            echo "Echec de la connexion";
        }
     }
    public function getInstance(){
    	return $this->_instance;
    }
    
    public function close(){
        mysqli_close($this->_instance);
    }
}

