<?php 
  session_start();
  require_once("config.php");
  require_once("phpFunction.php");


  if(isset($_SESSION['username'])){
     $user = $_SESSION['username'];
     $query = mysqli_query($conn, "SELECT useracount. * FROM `useracount` WHERE useracount.firstName = '$user'");
     while($row = mysqli_fetch_array($query)){  
     }
  }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile User</title>
</head>
<body>
    <div class="leftContainer"></div>
    <div class="rightContainer"></div>
    <div class="userContainer">
        <div class="userNavbar"></div>
        
        <div class="userContent">
            <div class="Profile">
                <img class="bigLogoImage" id="bigLogoImage" src="image/tryandtry.jpg" alt="profile image" width="700px"/>

                           
                      <!--********************** CHANGES PROFILE LOGO  PICTURE ********************-->
                   <label class="inputFile" for="inputFile"><i class="fa-solid fa-camera"></i>Edit Cover Photo</label>
                  <input id="inputFile" type="file" accept="image/jpeg, image/png, image/jpg"/>


                      <!--********************** CHANGES PROFILE PICTURE ********************-->
                  <label class="inputProfileLabel" for="inputProfile"><i class="fa-solid fa-camera"></i></label>
                  <input class="inputProfileInput" id="inputProfile" type="file" accept="image/jpeg, image/png, image/jpg"/>

                <div class="ProfileLogoImage">
                    <img class="loginImage" id="loginImage" src="image/userimage-removebg-preview.png" alt="image error " width="100px"/> 
              
            
                    <h5 class="userNameAcount"><?php echo $_SESSION['username'];?></h5>
                    <div class="followersCount">
                        <p>5.1k followers</p>
                        <p>1k following</p>
                    </div>
                    <a href="index.php">dashboard</a>
                </div>
                <span class="lineborder"></span>
            </div>

           <div class="userLeft"></div>

            <div class="userRight">

            </div>
        </div>
        
    </div>

    <script>
        let bigLogoImage = document.querySelector("#bigLogoImage");
        let inputFile = document.querySelector("#inputFile");
        let inputProfile = document.querySelector("#inputProfile");
        let loginImage = document.querySelector("#loginImage");


                  //*************** CHANGE PROFILE IMAGE **************************
        inputProfile.onchange = function() {
            loginImage.src = URL.createObjectURL(inputProfile.files[0]);
        }


            //************************* CHANGE BIG PROFILE IMAGE ***********************    
        inputFile.onchange = function() {
            bigLogoImage.src = URL.createObjectURL(inputFile.files[0]);
        }

    </script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display:grid;
            grid-template-columns
        }
         .rightContainer{

         }
        .leftContainer{

        }
        .userContainer{
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            grid-template-rows:30px 1fr;
            grid-auto-flow: dense;

            grid-template-areas: "navbar navbar navbar"
                                "leftbar content rightbar";

            height: 100vh;
            width: 100%;
             
        }
        .userNavbar{
            grid-area: navbar;
    
        }
        .userContent{
            grid-area: content;

            background-color: white;
            position: relative;
            padding-bottom:30px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        .userContent .Profile{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .Profile .bigLogoImage{
            border-radius: 3px;
            width: 100%;
            height: 550px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;

            position: relative;
        }
        .inputFile{
            display: flex;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
             padding: 10px 5px;
             border-radius: 10px;
             font-weight:600;
             cursor: pointer;
             transition: 0.5s;


            position: absolute;
            top: 450px;
            right: 10px;
        }
        .inputFile:hover{
            background-color: rgb(19, 19, 161);
            color: white;
            font-weight: 600;
        }
        .inputFile > i{
            margin-right: 5px;
            color: rgba(230, 17, 17, 0.877);
        }
        #inputFile{
            display: none;
        }
        .ProfileLogoImage{
            display: flex;
             

            position: absolute;
            /* left: 640px; */
            bottom: 250px;
            width: 700px;
        }
        .ProfileLogoImage .loginImage{
            border-radius: 50px;
        }

        .inputProfileLabel{
            font-size: larger;
            color: black;
            position: absolute;
            left: 110px;
            top: 550px;
            background-color: white;
            padding: 5px 5px;
            border-radius: 30px;
            z-index: 10;
            transition: 0.5s;
        }
        
        .inputProfileLabel:hover{
            background-color: red;
            color: white;
          
        }
        .inputProfileInput{
            display: none;
            
        }
        .ProfileLogoImage .loginImage{
            position: absolute;
            bottom:40px;
            cursor: pointer;
        }
        

        .Profile .userNameAcount{
            font-size: xx-large;
            position: absolute;
            bottom: 60px;
            left: 125px;
        }
        .Profile .followersCount{
            display: flex;
            gap: 10px;
            position: absolute;
            bottom: 30px;
            left: 110px;
            font-size: large;
            font-weight: 700;
        }
    




/* 
        .userLeft{
            grid-area: left;
            background-color: red;
            height: 100vh;

        }
        .userRight{
            grid-area: right;
            background-color: green;
            height: 100vh;
        }
        
        */
   
 
 

    </style>
</body>
</html>