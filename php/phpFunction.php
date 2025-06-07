<?php

include_once("config.php");


if (isset($_POST['signUp'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $checkUsername = "SELECT * FROM useracount WHERE username = '$username' ";
    $result = $conn->query($checkUsername);
    if ($result->num_rows > 0) {
        echo "username already exists.";
    }else{
        $insertQuery = "INSERT INTO useracount(firstName, lastName, month, days, year, gender, username, password)
                      VALUES ('$firstname', '$lastname', '$month', '$day', '$year', '$gender', '$username', '$password')";
    }           if($conn->query($insertQuery)==TRUE){
                 header("location: login.php");            
                }else{
                    echo "error".$conn->error;
                }
}


if (isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // $password = md5($password);
    
    $sql = "SELECT * FROM useracount WHERE username = '$user' and password ='$pass'";
    $result = $conn->query($sql);
      if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header("location: user.php");
      }else{
        echo "not found or incorrect your info";
      }
}