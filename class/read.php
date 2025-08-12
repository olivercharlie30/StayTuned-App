<?php

include_once("database/config.php");

class read extends config{



    public function readPost(){
       try {
        $pdo = $this->connect();
        $stmt = $pdo->prepare("SELECT * FROM `post` ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
             <a href='index.php'> <img src=$data[image] alt='error image' width='100%'/></a>
              <div class='countLike'>
                <span id='likeCounts'>0</span>
                <span id='commentCounts'>1.5k comments</span>
                <span>350 shares</span>
               </div>
           <div class='likeSection'>
              <span class='like' id='like' ><i class='fa-regular fa-thumbs-up'></i>Like</span>
                 <span class='comment' id='comment'><i class='fa-regular fa-comment'></i>Comments</span>
                   <span class='share'><i class='fa-solid fa-share'></i>share</span>
              </div>
            </div>";
        }

       } catch (PDOException $e) {
            die("read Failed" .$e->getMessage());
       }
    }
    
}
// $read = new read();
// $read->readPost();