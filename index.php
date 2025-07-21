<?php

   include_once("database/config.php");
   include_once("class/post.php");
   include_once("phpFunction.php");
   
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>StayTuned</title>
</head>
<body>
    <header>
  
        <div class="logoArea">
             <h2>StayTuned</h2>
              <span>
                <form class="span">
                     <input type="search" name="search" placeholder="Search StayTuned" id="" >
                     <button>
                         <i class="fa-solid fa-magnifying-glass"></i>
                     </button>
                    
                </form>
               
              </span>
           </div>
            
            <!-- //HOME AREA -->
            <div class="homeArea">
                <span>
                    <i class="fa-solid fa-house" style="color: rgb(11, 86, 247);"></i>
                </span>
                <span>
                    <i class="fa-solid fa-tv"></i>
                </span>
                <span>
                    <i class="fa-solid fa-store"></i>
                </span>
                <span>
                    <i class="fa-solid fa-users-rectangle"></i>
                </span>
                <span>
                    <i class="fa-solid fa-gamepad"></i>
                </span>
            </div>

           <div class="messageArea">
             <span>
                <i class="fa-solid fa-bars"></i>
             </span>
             <span>
                <i class="fa-solid fa-message"></i>
             </span>
             <span>
                <i class="fa-solid fa-bell"></i>
             </span>
             <!-- <span>
                <i class="fa-solid fa-bell"></i>
             </span> -->

           </div>
        
    </header>
    <leftbar>
        <div class='wrapperLeftbar'>
           

            <div class="iconLeftbar">
                <span class="profile">
                <img src="uploads/ivanaProfile.jpg" alt="image error"/>
                 <h4>oliver charlie lapinig</h4>

                </span>
                <span>
                    <img src="uploads/staytunedsticker-removebg-preview.png" alt="error image" width="40px"/>
                    Programmer: Oliver Charlie
                </span>
                <span>
                    <i class="fa-solid fa-user-group" style="color: #34eb74;"></i>
                    Friends
                </span>
                <span>
                    <i class="fa-solid fa-table-columns" style="color: #eb5534;"></i>
                    Professional dashboard
                </span>
                <span>
                    <i class="fa-solid fa-envelope" style="color:#34d5eb;"></i>
                    Feeds
                </span>
                <span>
                    <i class="fa-solid fa-shop" style="color: #3a34eb;"></i>
                    Marketplace
                </span>
                <span class="seemore" id="seemore">
                    <i class="fa-solid fa-angle-down"></i>
                    See more
                </span>
            </div>

          </div>
        </div>
         <!-- <<<<< SEEMORE DIV >>>>> -->
          <div class="seemoreElement" id="seemoreElement">
            <div class="wrapperseemoreElement">
                <ul>
                    <li class="darkMode" id="darkMode">
                        <span><i class="fa-solid fa-moon"></i>Dark Mode</span>
                    </li>
                    <li class="lightMode" id="lightMode">
                         <span><i class="fa-solid fa-sun"></i>Light Mode</span>
                    </li>
                </ul>
            </div>

          </div>
    </leftbar>
    <rightbar>
    
        <div class="contacts">
             <h2>Contacts</h2>
                   
            </div>
             
        </div>
        
    </rightbar>
    <main>
         <div class="post">     <!-- //+++++++<<<<<<< THIS FORM WE INSERT DATA TO MYSQL >>>>>+++++++++\\ -->
            <div class="postWrapper">
                <form action="phpFunction.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="Enter your title Post..." id="title">
                    <textarea name="category" id=""> Enter your Blog..</textarea>
                    <label for="file">
                        <i class="fa-solid fa-image"></i>
                        Photo/Video
                    </label>
                    <input type="file" name="file" id="file" >
                    <button name="createBtnPost">Create Post</button>
                </form>
            </div>
        </div>

        <!-- +++++++++++<<<<<<<<<<READ DATA FROM DATABASE USING I FETCH DATA USING PHP >>>>>>>>++++++++++++++++++ -->
        <?php   
        include_once("class/read.php");
        $read = new read();
         $result = $read->readPost();
        ?>

        <?php foreach($result as $data) { ?>
         <div class="postImageContent" id="postImageContent">
                  <div class="postIcon">
                      <i class="fa-sharp fa-solid fa-angles-right"></i>
                      <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="user">
                      <img class="userProfile" src="<?php echo $data['image'] ?>" alt="error profile img" width="30px"/>
                      <div class="username"><strong><?php echo $data['title'] ?></strong></div>
                    </div>
                    <div class="dateTime"><?php echo $data['createDate'] ?></div>
                    <div class="category"><p><?php echo $data['category'] ?><span class="textMore"></span></p>
                        </div>
                        <span class="readMoreBtn"><i class="fa-solid fa-angles-right"></i> See More....</span>
                       <img src="<?php echo $data['image']?>" alt='error image' width="100%"/>
                      <div class="countLike">
                        <span id="likeCounts">0</span>
                        <span id="commentCounts">1.5k comments</span>
                        <span>350 shares</span>
                      </div>
                      <div class="likeSection">
                        <span class="like" id="like" onclick="likeCounts()"><i class="fa-regular fa-thumbs-up"></i>Like</span>
                        <span class="comment" id="comment" onclick="comments()"><i class="fa-regular fa-comment"></i>Comments</span>
                       <span class="share"><i class="fa-solid fa-share"></i>share</span>
                     </div>
                   </div>
                   <?php } ?>


    </main>
    
    
    <script src="index.js"></script>
</body>
</html>

<style>
    *{
        margin:0;
        padding: 0;
    
    }
    body{
        display: grid;
        grid-template-columns: 1fr 500px 1fr;
        grid-template-rows: auto 1fr auto;
        grid-template-areas: 
        "header header header"
        "leftbar main rightbar"
        "leftbar main rightbar";

        height: 100vh;
        width: 100%;
        background-color: whitesmoke;
    }
    .darkModeBody{
        background-color: black;
        color: white;
    }
    
    header{
        grid-area: header;

        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        background-color: white;
        padding: 10px;
        position:fixed;
        width: 100%;
        z-index: 10;
    }
    header .logoArea{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        
    
    }
    header .logoArea > h2{
        color: rgb(16, 68, 223);
        padding-left:30px;
        font-size: x-large;
        font-weight: 900;
    }

     .span{
        
    }
    .span >input{
        padding: 7px;
        border: none;
        background-color: rgb(224, 224, 224);
        border-radius: 10px;
        cursor: pointer;
        transition: 0.5s;
        }
   .span > input:hover{
      background-color: white;
      box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;

   }
    
    
    .span > button{
        border: none;
        padding: 5px;
        border-radius: 3px;
        color:white;
        background-color: green;
        cursor: pointer;
        transition: 0.5s;
    }
    .span > button:hover{
        background-color: rgb(14, 190, 14);
    }
    .span> i{

        right: 7px;
        top: 7px;
        color: rgb(122, 120, 120);
    }
    header .homeArea{
        display: flex;
        gap: 50px;
        font-size: larger;
        font-weight: bold;
        cursor: pointer;
        color:black;
    }
     .homeArea > span{
        padding: 3px;
        border-radius: 5px;
        transition: .05s;
     }
     .homeArea > span:hover{
        background-color: rgb(159, 159, 159);
        color: white;
        padding: 3px;
        border-radius: 5px;
     }
    header .messageArea{
        margin-right:50px; 
        display: flex;
        gap: 30px;
        font-size: larger;
        font-weight: bold;
        cursor: pointer;
        color:black;
    }
    .messageArea > span{
        padding: 3px;
        border-radius: 5px;
        transition: .05s;
    }
    .messageArea > span:hover{
        background-color: rgb(159, 159, 159);
        color: white;
        padding: 3px;
        border-radius: 5px;
    }
    leftbar{
        grid-area: leftbar;
        /* background-color: blue; */
        position:fixed ;
        top: 60px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items:self-start;
        height: 100vh;
        width: 100%;
        
    }
    .darkModeLeftbar{
        background-color: black;
        color: white;
    }
    leftbar .wrapperLeftbar{
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .iconLeftbar .profile{
        display: flex;
        justify-content:flex-start;
        align-items: center;
        gap: 5px;
        cursor: pointer;
        
    }
    .iconLeftbar > span{
        cursor: pointer;
    }
    leftbar .profile > img{
        width: 50px;
        height:50px;
        margin-left: 5px;
        border-radius: 40px;
    }

    leftbar .iconLeftbar{
        display: flex;
        flex-direction: column;
        gap: 30px;
        font-size: larger;
        padding:5px 15px;
    }
    
    leftbar .seemoreElement{
        /* background-color: white; */
        padding: 20px 20px;
        border-radius: 5px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        display: none;
    }
    leftbar .addSeemoreElement{
        display: flex;
    }
    leftbar .seemoreElement .wrapperseemoreElement{
        display: flex;
        align-items: self-start;
    }
    .wrapperseemoreElement > ul{
        list-style: none;
        display: flex;
        flex-direction: column;
        align-items: self-start;
        justify-content: flex-start;
        cursor: pointer;
    }




   rightbar{
        grid-area: rightbar;
        /* background-color: brown; */
        position:fixed;
        top: 60px;
        right: 50px;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        gap: 30px;
        /* height: 100vh;
        width: 100%; */
    
    }
    .darkModeRightbar{
        background-color: black;
        color: white;
    }
    rightbar .contacts{
        
        display: flex;
        gap: 5px;
        flex-direction: column;
        cursor: pointer;
    }
   
    main{
        grid-area:main;
        /* background-color: pink; */
        height: 100vh;
        width: 100%;
    }
    .darkModeMain{
        background-color: black;
        color: white;
    }
    main .postImageContent{
        width: 100%;
        margin-top: 20px;
        padding: 5px;
        border-radius: 3px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        /* background-color: white; */
    }
   
    main .postImageContent .postIcon{
        display: flex;
        justify-content: end;
        margin: 3px;
    }
    main .postImageContent .user{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 10px;
    }
    .user .userProfile{
        border-radius: 50px;
    }
    main .postImageContent .countLike{
        display: flex;
        justify-content: space-between;
        margin: 5px;
        border-bottom: 1px solid rgb(70, 68, 68);
    }
      main .postImageContent .likeSection{
        display: flex;
        justify-content: space-between;
        margin: 5px;
        padding: 10px;
    }
    main .postImageContent .comment{
        cursor: pointer;
    }
    main .postImageContent .like{
        cursor: pointer;
    }

    /* <<<<<<<<<<<<<<<<<<<<<<<<<<<<<   INSERT DATA    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  */
    .post{
        padding:50px 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        border-radius: 5px;
        /* background-color: white; */
    }
   .post .postWrapper{
        display: flex;
        justify-content: center;
        align-items: center;

   }
   .postWrapper > form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
   }
   form #title{
    width: 100%;
    padding: 5px;
    border: none;
    cursor: pointer;
    transition: 0.5s;
   }
     form > #title:hover{
    border-bottom: 1px solid  rgb(91, 91, 91);

   }
   form > textarea{
     width: 100%;
    padding: 5px;
    border: none;
    cursor: pointer;
    transition: 0.5s;
   }
     form > textarea:hover{
        border-bottom: 1px solid  rgb(91, 91, 91);

   }
   form > label{
    
    /* color: white; */
    padding: 3px;
    cursor: pointer;
    margin: 3px 3px;
    transition: 0.5s;
   }
   form > label:hover{
    
    background-color:rgb(26, 173, 26);
    /* color: white; */
    border-radius: 3px;
   }
   label > i{
     color: rgb(26, 173, 26);
   }
    label > i:hover{
     color: white;
   }
   form > #file{
    display: none;
   }
   form > button{
    background-color: rgb(66, 167, 226);
    color: white;
    padding: 3px;
    border: none;
    cursor: pointer;
    border-radius: 3px;
    margin-bottom: 7px;
    transition: 0.5s;
   }
   form > button:hover{
        background-color: rgb(40, 125, 175);

   }


   /* <<<<<<<<<<<<<<< ********MEDIA QUERY MOBILE SIZE************ >>>>>>>>>>>>>>>>>>>>> */
   @media(max-width:800px){

        body{
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr auto;
        grid-template-areas: 
        "header"
        "main"
        "main";

        height: 100vh;
        width: 100%;
    }

    header{
        grid-area: header;
    }
    main{
        grid-area: main;
    }
    leftbar{
        display: none;
    }
    rightbar{
        display: none;
    }

   }

</style>