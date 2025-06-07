<?php


$host = "localhost";
$user = "root";
$pass = "";
$db = "staytuned";

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    echo "failed connect to database.".$conn->connect_error;
}