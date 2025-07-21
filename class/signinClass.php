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

    public function __construct($firstname, $lastname, $month, $day, $year, $gender, $username, $password)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
        $this->gender = $gender;
        $this->username = $username;
        $this->password = $password;
    }

    public function emptySinginInput(){
        if(empty($this->firstname) && empty($this->lastname) && empty($this->month) && empty($this->day) && empty($this->year) && empty($this->gender) && empty($this->username) && empty($this->passwords)){
           echo "input can't empty..";
        }else{
          return true;
        }
    }

    public function insertSignin(){
        
    }
}

