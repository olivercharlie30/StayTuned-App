<?php

include_once("database/config.php");

class signin extends config{

    public $firstname;
    public $lastname;
    public $month;
    public $day;
    public $year;
    public $gender;
    public $username;
    public $password;
    public $image;

    public function __construct($firstname, $lastname, $month, $day, $year, $gender, $username, $password, $image)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
        $this->gender = $gender;
        $this->username = $username;
        $this->password = $password;
        $this->image = $image;
    }

    public function userCheckIfExisting(){

        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare("SELECT * FROM `useracount` WHERE :username");
            $stmt->bindParam(':username', $this->username);
            $stmt->execute();
            $stmt->fetchAll(PDO::FETCH_ASSOC);

            if($stmt->rowCount() > 0){
                echo "Username Already Existing.";
                return true;
            }else{
                return false;
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

class getAllUser extends config{

    
    public function getUserAcount(){
        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare("SELECT * FROM `useracount`");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (PDOException $e) {
            die("get user acount failed." .$e->getMessage());
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
