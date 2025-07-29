<?php
include_once("database/config.php");

class insert extends config{

    public $title;
    public $category;
    public $image;

    public function __construct($title, $category, $image)
    {
     $this->title = $title;
     $this->category = $category;
     $this->image = $image;   
    }

    public function insertPost() {
        try {

            $pdo = $this->connect();  //FROM CLASS CONFIG.PHP 

            $stmt = $pdo->prepare("INSERT INTO `post`(`title`, `category`, `image`) VALUES (:title, :category, :image)");
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':category', $this->category);
            $stmt->bindParam(':image', $this->image);
            $stmt->execute();
           // echo "inserted successfully..";
           header("location: index.php?=inserted success");

        } catch (PDOException $e) {
             die("inserted failed" .$e->getMessage());
        }
    }
}








