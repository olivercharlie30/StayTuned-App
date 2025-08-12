<?php
   


function login(){

  if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once("database/config.php");
    include_once("class/loginClass.php");
    $login = new login($username, $password);
    $login->userLogin();
 

    // $password = md5($password);
    
  //   $sql = "SELECT * FROM useracount WHERE username = '$user' and password ='$pass'";
  //   $result = $conn->query($sql);
  //     if($result->num_rows > 0){
  //       session_start();
  //       $row = $result->fetch_assoc();
  //       $_SESSION['username'] = $row['username'];
  //       header("location: user.php");
  //     }else{
  //       echo "not found or incorrect your info";
  //     }
  }
}
login();



//INSERT POST 
function insertPost(){
  if(isset($_POST['createBtnPost'])){

    $title = $_POST['title'];
    $category = $_POST['category'];
  
      $image = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];
  
  
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));
  
      $allowed = array('jpg', 'jpeg', 'png', 'pdf','mp4','ogg','WebM');
  
        if(in_array($fileActualExt, $allowed)){
              if($fileError === 0){
                  if($fileSize < 1000000){
                      $fileNameNew = uniqid('', true).".".$fileActualExt;
                      $image = 'uploads/'.$fileNameNew;
                      move_uploaded_file($fileTmpName, $image);
                     
  
                  include_once("database/config.php");
                  include_once("class/insert.php");
                  $insert = new insert($title, $category, $image);
                  $insert->insertPost();
  
  
                     echo "inserted successfully";
                  }else{
                        echo "you file is to big!.";
  
                  }
  
              }else{
                  echo "there was an error uploading your file!.";
  
              }
  
        }else{
          echo "you cannot upload files of this type.";
      }
  }
}
insertPost();




function Registered() {

    if (isset($_POST['signUp'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $image = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];


    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

      if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $image = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $image);
                   

                include_once("database/config.php");
                include_once("class/signinValidate.php");
                $singin = new signinValidate($firstname,$lastname,$month,$day,$year,$gender,$username,$password,$image);
                $singin->signinUserError();
              


                   echo "Registered successfully";
                }else{
                      echo "you file is to big!.";

                }

            }else{
                echo "there was an error uploading your file!.";

            }

      }else{
        echo "you cannot upload files of this type.";
    }
  }    
}

Registered(); 



function getUsername(){

  include_once("database/config.php");
  include_once("class/displayAllUser.php");
  $getSingin = new displayAllUser();
  $row = $getSingin->getUserAcount(); 

  foreach($row as $data){
    
      echo "   <span style='display:flex; padding:5px; flex-direction:column;'>";
      echo "  <a style='display:flex; padding:5px;' href='user.php?show=$data[id]'>";
      echo "  <img src='$data[image]' alt='error image' width='30px' height='30px' style='border-radius: 50%;'/>";   
      echo "   <p> $data[firstName] $data[lastName]</p>";          
      echo "  </a>";
      echo "  </span>";
  
  }
}



function search(){

  if(isset($_GET['searchBtn'])){
    $title = '%'.$_GET['search'].'%';
     // var_dump($_GET['search']);
    include_once("database/config.php");
    $config = new config();
    $config->connect();
    include_once("class/search.php");
    $search = new search($title);
    $search->searchInput();

  }else{
    echo " error";
  }
}
search();
?>
