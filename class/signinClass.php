<?php

include_once("database/config.php");

class signin extends config{



    public function userCheckIfExisting($username){

        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare("SELECT * FROM `useracount` WHERE :username");
            $stmt->bindParam(':username', $this->username);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if($result){
               echo "Username Already Existing.";
                return false;
            }else{
                return true;
            }


        } catch (PDOException $e) {
            die("user existing failed." .$e->getMessage());
        }

    }

 
    public function insertSignin(){
        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare("INSERT INTO `useracount` (`firstName`, `lastName`, `month`, `days`, `year`, `gender`, `username`, `password`, `image`)
                                VALUES (:firstname, :lastname, :month, :day, :year, :gender, :username, :password, :image) ");

            $hash_password = password_hash($this->password, PASSWORD_DEFAULT);

            $stmt->bindParam(':firstname', $this->firstname);
            $stmt->bindParam(':lastname', $this->lastname);
            $stmt->bindParam(':month', $this->month);
            $stmt->bindParam(':day', $this->day);
            $stmt->bindParam(':year', $this->year);
            $stmt->bindParam(':gender', $this->gender);
            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':password', $hash_password);
            $stmt->bindParam(':image', $this->image);

            if($stmt->execute()){
            
                return true;
            }else{
                return false;
            }

            

        } catch (PDOException $e) {
            die("Register Failed." .$e->getMessage());
        }
    }
}









    
    

    // $checkUsername = "SELECT * FROM useracount WHERE username = '$username' ";
    // $result = $conn->query($checkUsername);
    // if ($result->num_rows > 0) {
    //     echo "username already exists.";
    // }else{
    //     $insertQuery = "INSERT INTO useracount(firstName, lastName, month, days, year, gender, username, password)
    //                   VALUES ('$firstname', '$lastname', '$month', '$day', '$year', '$gender', '$username', '$password')";
    // }           if($conn->query($insertQuery)==TRUE){
    //              header("location: login.php");            
    //             }else{
    //                 echo "error".$conn->error;
    //             }
