<?php

class dbh{
    private $username;
    private $password;
    private $dbn;

    protected function connect(){
        $this->username = 'root';
        $this->password = '';
        $this->dbn = "mysql:host=localhost;dbname=isil";

        try {
            $conn = new PDO($this->dbn, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
        } catch(PDOException $e) {
            echo "" . $e->getMessage();
        }

        return $conn;
    }
}



?>
