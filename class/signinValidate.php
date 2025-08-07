<?php


include_once("class/signinClass.php");
include_once("database/config.php");


class signinValidate extends signin{

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

    public function signinUserError(){
        if($this->signupInputEmpty() == false){
            return false;
        }
        if($this->usernameZanitize() == false){
            return false;
        }
        if($this->userTakenCheck() == false){
            return false;
        }
            $this->insertSignin();
           // echo "Registered Successfully..";
    }

    public function signupInputEmpty(){
        if(empty($this->firstname) || empty($this->lastname) || empty($this->month) || empty($this->day) || empty($this->year) || empty($this->gender) || empty($this->username) || empty($this->password)){
            header("Location: signin.php?error=Input can not be Empty.");
            return false;
        }else{
            return true;
        }
    }

    public function usernameZanitize(){
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            header("Location: signin.php?error=Username must at lest 4 letters lowercase.");
            return false;
        }else{
            return true;
        }

    }

    public function userTakenCheck(){
        if($this->userCheckIfExisting($this->username)){
            header("Location: signin.php?error=username have a existing.");
            return false;
        }else{
            return true;
        }
    }

    }
