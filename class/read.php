<?php

include_once("database/config.php");

class read extends config{



    public function readPost(){
       try {
        $pdo = $this->connect();
        $stmt = $pdo->prepare("SELECT * FROM `post` ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

       } catch (PDOException $e) {
            die("read Failed" .$e->getMessage());
       }
    }
    
}
// $read = new read();
// $read->readPost();