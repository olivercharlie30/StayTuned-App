<?php
include_once("config.php");

class post extends config{

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
            echo "inserted successfully..";

        } catch (PDOException $e) {
             die("inserted failed" .$e->getMessage());
        }
    }
}


 class viewPost extends config{

    public function getPostAll() {
        try {

            $pdo = $this->connect();  //FROM CLASS CONFIG.PHP 

            $stmt = $pdo->prepare("SELECT * FROM `post`");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              
            //return $result;
            foreach($result as $data){

                echo "<div class='postImageContent'>";
                echo "<div class='postIcon'>";
                
               echo"  <i class='fa-sharp fa-solid fa-angles-right'></i>";
               echo" <i class='fa-solid fa-xmark'></i>";
               echo" </div>";
                  echo" <div class='user'>";
                   echo" <img class='userProfile' src='uploads/userimage-removebg-preview.png' width='40px'/>";
                   echo"  <div class='username'><strong>$data[title]</strong></div>";
                   echo"  </div>";
                   echo"    <div class='dateTime'>May 1 at 6:20 PM </div>";
                   echo"     <div class='category'><p>$data[category] <span class='textMore'></span></p>";
                   echo"       </div>";
                    echo"       <span class='readMoreBtn'><i class='fa-solid fa-angles-right'></i> See More....</span>";
                 echo"          <img src=$data[image] alt='error image' width='100%'height='400px'/>";
                   echo"        <div class='countLike'>";
                     echo"       <span id='countReact'>10k</span>";
                    echo"        <span>1.5k comments</span>";
                    echo"        <span>350 shares</span> ";
                    echo"       </div> ";
                     echo"      <div class='likeSection'> ";
                    echo"         <span class='like' onClick='countLike()'><i class='fa-regular fa-thumbs-up'></i>Like</span> ";
                   echo"         <span class='comment'><i class='fa-regular fa-comment'></i>Comments</span> ";
                  echo"        <span class='share'><i class='fa-solid fa-share'></i>share</span> ";
                  echo"      </div>";
                  echo"   </div> ";

            }
            


        } catch (PDOException $e) {
             die("View Post failed" .$e->getMessage());
        }

    }


    }





// $post = new post();
// $post->insertPost();