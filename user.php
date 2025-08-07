<?php 
  session_start();
  require_once("database/config.php");
  require_once("class/signinClass.php");
  require_once("phpFunction.php");
  include_once("class/displayUserById.php");

  if(isset($_GET['show']))
  $dis = new displayUserById($_GET['show']);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile User</title>
</head>
<body>
    <header>
          <!-- <<<<<<MOBILE DESIGN>>>>>>>> -->
            <div class="modileHeader">
                <img src="uploads/stimagemobile.png" alt="image error" width="40px" height="40px" style="border-radius: 50%;"/>
                <ul>
                  <li> <i class="fa-solid fa-house" style="color: rgb(11, 86, 247);"></i></li>
                  <li> <i class="fa-solid fa-tv"></i></li>
                  <li> <i class="fa-solid fa-store"></i></li>
                  <li><i class="fa-solid fa-message"></i></li>
                  <li> <i class="fa-solid fa-bell"></i></li>
                </ul>
              </div>
  
  
  
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
    <leftbar></leftbar>
    <rightbar></rightbar>
    <main>
        <div class='mainContainer'>
            <?php $dis->displayBigImageById(); ?>

            <div class='userInfoList'>
                <div class="userName">
                   <?php
                       $dis->displayImageById(); 
                    
                      $dis->displayUsernameById(); 
                     ?>
                </div>
                <div class='tableContent'>
                   <?php $dis->displayTableUserListById(); ?>
                </div>
            </div>
           
        </div>
    </main>
    <footer></footer>
  

    <script>

    </script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            display:grid;
            grid-template-columns:500px 1fr 500px;
            grid-template-rows: auto 1fr auto;
            grid-template-areas:
            "header header header"
            "leftbar main rightbar"
            "leftbar main rightbar";

            height:100vh;
            width: 100%;
        }
        header{
            grid-area: header;
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
    header .modileHeader{
        display: none;
    }
    header .logoArea{
        display: flex;
        justify-content: center;
        align-items: center;
        gap:50px;
        
    
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
        
        }
        rightbar{
            grid-area: rightbar;
    
        }
        main{
            grid-area: main;
       
        }
        main .mainContainer{
        
        }
        .mainContainer .userInfoList{
            display: flex;
            justify-content: space-between;
            align-items: center;

        }
        .mainContainer .userName{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 10px;
        }
        .mainContainer .tableContent{
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-color:white;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 5px;
        }
        .tableContent > table{
          
        }
        table > thead{
            background-color: wheat;
            
            
            
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
header .modileHeader{
display: flex;
}
.modileHeader > ul{
display: flex;
justify-content: center;
align-items: center;
gap: 40px;
font-size: larger;
font-weight: 700;
list-style: none;
cursor: pointer;
margin-top: 5px;
color: black;
}
header .logoArea{
display: none;

}
header .homeArea{
display: none;
}
header .messageArea{
display: none;
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
</body>
</html>