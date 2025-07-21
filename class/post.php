<?php
include_once("database/config.php");

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
           // echo "inserted successfully..";
           header("location: index.php?=inserted success");

        } catch (PDOException $e) {
             die("inserted failed" .$e->getMessage());
        }
    }
}


//  class viewPost extends config{

//  public function getPostAll() {
//         try {

//             $pdo = $this->connect();  //FROM CLASS CONFIG.PHP 

//             $stmt = $pdo->prepare("SELECT * FROM `post` ORDER BY id DESC");
//             $stmt->execute();
//             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
//             //return $result;
//             foreach($result as $data){

//                 echo "<div class='postImageContent'>";
//                 echo "<div class='postIcon'>";
                
//                echo"  <i class='fa-sharp fa-solid fa-angles-right'></i>";
//                echo" <i class='fa-solid fa-xmark'></i>";
//                echo" </div>";
//                   echo" <div class='user'>";
//                    echo" <img class='userProfile' src='$data[image]' width='40px'/>";
//                    echo"  <div class='username'><strong>$data[title]</strong></div>";
//                    echo"  </div>";
//                    echo"    <p class='dateTime'>$data[createDate] </p>";
//                    echo"     <div class='category'><p>$data[category] <span class='textMore'></span></p>";
//                    echo"       </div>";
//                     echo"       <span class='readMoreBtn'><i class='fa-solid fa-angles-right'></i> See More....</span>";
//                  echo"        <a href='classHandler/edit.php?edit=$data[id]'>  <img src=$data[image] alt='error image' width='100%'height='400px'/> </a>";
//                    echo"        <div class='countLike'>";
//                      echo"       <span id='countReact'>10k</span>";
//                     echo"        <span>1.5k comments</span>";
//                     echo"        <span>350 shares</span> ";
//                     echo"       </div> ";
//                      echo"      <div class='likeSection'> ";
//                     echo"         <span class='like' onClick='countLike()'><i class='fa-regular fa-thumbs-up'></i>Like</span> ";
//                    echo"         <span class='comment'><i class='fa-regular fa-comment'></i>Comments</span> ";
//                   echo"        <span class='share'><i class='fa-solid fa-share'></i>share</span> ";
//                   echo"      </div>";
//                   echo"   </div> ";

//             }
//         } catch (PDOException $e) {
//              die("View Post failed" .$e->getMessage());
//         }
//     }

//      public function userList(){
//             try {
//                 $pdo = $this->connect();
//                 $stmt = $pdo->prepare("SELECT * FROM `useracount` ORDER BY id DESC");
//                 $stmt->execute();
//                 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//                 foreach($result as $row) {
//                     echo "<img src='uploads/userimage-removebg-preview.png' alt='image error' width='40px'/>";
//                     echo "<h3>$row[fullname]</h3>";
//                 }
//             } catch (PDOException $e) {
//                 die("userlist failed" .$e->getMessage());
//             }
//         }
// }


class updatePost extends config{

    public $title;
    public $category;
    public $image;
    public $id;

    public function __construct($title, $category, $image, $id     )
    {
     $this->title = $title;
     $this->category = $category;
     $this->image = $image;   
     $this->id = $id;
    }


    public function editPost() {
        try {
            
        $pdo = $this->connect();
        $stmt = $pdo->prepare("UPDATE `post` SET `title`=:title, `category`=:category, `image`= :image WHERE id = :id");
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':category', $this->category);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':id',$this->id);
            
        } catch (PDOException $e) {
            die("edit failed" .$e->getMessage());
        }
    }
} 




