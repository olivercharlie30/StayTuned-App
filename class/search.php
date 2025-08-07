<?php


include_once("database/config.php");

class search extends config{
    public $title;

    public function __construct($title){
        $this->title = $title;
    }

    public function searchInput(){
  
        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare("SELECT * FROM `post` WHERE title LIKE :title ");
            $stmt->bindParam(':title', $this->title);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

          //  var_dump($result);
            foreach($result as $data){
      
              echo" <div class='postImageContent' id='postImageContent'>
                   <div class='postIcon'>
                     <i class='fa-sharp fa-solid fa-angles-right'></i>
                     <i class='fa-solid fa-xmark'></i>
                    </div>
                    <div class='user'>
                      <img class='userProfile' src=$data[image] alt='error profile img' width='30px' style='border-radius: 50%;'/>
                     <div class='username'><strong>$data[title] </strong></div>
                   </div>
                   <div class='dateTime'>$data[created_at] </div>
                    <div class='category'><p>$data[category] <span class='textMore'></span></p>
                        </div>
                        <span class='readMoreBtn'><i class='fa-solid fa-angles-right'></i> See More....</span>
                     <img src=$data[image] alt='error image' width='100%'/>
                     <div class='countLike'>
                       <span id='likeCounts'>0</span>
                       <span id='commentCounts'>1.5k comments</span>
                       <span>350 shares</span>
                      </div>
                  <div class='likeSection'>
                     <span class='like' id='like' ><i class='fa-regular fa-thumbs-up'></i>Like</span>
                        <span class='comment' id='comment'><i class='fa-regular fa-comment'></i>Comments</span>
                     </div>
                   </div>";

       
            
            }
           
        } catch (PDOException $e) {
            die("search failed." .$e->getMessage());
        }
    }
}