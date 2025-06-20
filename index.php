<?php
  session_start();
  require_once("config.php");
   require_once("phpFunction.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <linK rel="stylesheet" href="./css/index.css">
    <title>Stay Tuned</title>
</head>
<body>
    <div class="container">
        <navbar>
            <h2 id="titleReload">Stay Tuned</h2>
            <input type="search" placeholder="Search...">
            <span><i class="fa fa-magnifying-glass"></i></span>
            <div class="navbarIcon">
                <span id="house"><i class="fa fa-house"></i></span>
                <span><i class="fa fa-video"></i></span>
                <span><i class="fa fa-user-group"></i></span>
                <span><i class="fa fa-store"></i></span>
                <span><i class="fa-solid fa-user"></i><?php echo $_SESSION['username'];?></span>
            </div>
    
            <div class="navbarProfile">
                <span id="fa-ellipsis"><i class="fa-solid fa-ellipsis"></i></span>
                <span id="fa-comment"><i class="fa-solid fa-comment"></i></span>
                <span id="fa-bell"><i class="fa fa-bell"></i></span>
                <a href="user.php"><i class="fa-solid fa-user"></i></a>
            </div>
        </navbar>
        <leftbar></leftbar>
        <rightbar></rightbar>
        <content>

            <!-- <div class="loader"></div> -->

        </content>
    </div>


    <script type="module" src="javascript/index.js"></script>
    
</body>
</html>