<?php

   include_once("core/config.php");
   include_once("core/post.php");
   include_once("phpFunction.php");
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="profile">
            <img src="uploads/ivanaProfile.jpg" alt="image error"/>
            <h4>oliver charlie lapinig</h4>

        </div>
    </leftbar>
    <rightbar></rightbar>
    <main>
        <div class="post">
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

        <?php   
           $view = new viewPost();
          $row = $view->getPostAll();
        ?>


    </main>
    
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
    }
    header{
        grid-area: header;

        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        padding: 10px;
        position:sticky ;
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
        position:sticky;
        padding: 10px;
    }
    leftbar .profile{
        display: flex;
        justify-content:flex-start;
        align-items: center;
        gap: 5px;
        
    }
    .profile > img{
        width: 50px;
        height:50px;
        margin-left: 5px;
        border-radius: 40px;
    }
    rightbar{
        grid-area: rightbar;
        /* background-color: brown; */
        position: fixed;
    }
    main{
        grid-area:main;
        /* background-color: pink; */
    }
    main .postImageContent{
        width: 100%;
        margin-top: 20px;
        padding: 5px;
        border-radius: 3px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
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

    /* <<<<<<<<<<<<<<<<<<<<<<<<<<<<<   INSERT DATA    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  */
    .post{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        border-radius: 5px;
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
    color: white;
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
</style>