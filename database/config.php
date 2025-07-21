<?php

class config{

    private $host = "localhost";
    private $user = "root";
    private $password ="";
    private $dbname = "person";
    public $pdo = null;

     function connect(){
        try {
            
            
            $this->pdo = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //    echo "connected to database person";
            return $this->pdo;
        } catch (PDOException $e) {

            die("connection failed" .$e->getMessage());
        }
    }
}

$con = new config();
$con->connect();