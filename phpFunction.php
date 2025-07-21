<?php
   




if (isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // $password = md5($password);
    
    $sql = "SELECT * FROM useracount WHERE username = '$user' and password ='$pass'";
    $result = $conn->query($sql);
      if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header("location: user.php");
      }else{
        echo "not found or incorrect your info";
      }
}



//INSERT POST 
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

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

      if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $image = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $image);
                   

                include_once("database/config.php");
                include_once("class/post.php");
                $insert = new post($title, $category, $image);
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