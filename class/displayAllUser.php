<?php

include_once("database/config.php");


class displayAllUser extends config{

    public function getUserAcount(){
        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare("SELECT * FROM `useracount` ORDER BY id DESC");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (PDOException $e) {
            die("get user acount failed." .$e->getMessage());
        }
    }

}