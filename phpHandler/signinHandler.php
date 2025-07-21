<?php


    if (isset($_POST['signUp'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   
   
    include_once("../database/config.php");
     include_once("../class/signinClass.php");
     $singin = new signin($firstname, $lastname, $month, $day, $year, $gender, $username, $password);
     $singin->emptySinginInput();  
    
    

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
}


