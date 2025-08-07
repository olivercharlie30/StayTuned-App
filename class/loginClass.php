<?php

include_once("database/config.php");

class login extends config{

    public $username;
    public $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

    }

    public function userLogin(){
        

        try {

            $pdo = $this->connect();
            $stmt = $pdo->prepare("SELECT * FROM `useracount` WHERE username = :username AND password = :password");
            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':password', $this->password);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
           
            // if($result > 0){
            //     password_verify($this->password, $result['password']);
            //     session_start();
            //     $_SESSION['username'] = $result['username'];
            //     header("location: index.php");
            //     return true;
            // }else{
            //     return false;
            // }
        

        } catch (PDOException $e) {
            die("lagin failed." .$e->getMessage());
        }
    }
}