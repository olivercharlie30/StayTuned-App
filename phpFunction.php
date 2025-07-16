<?php



if (isset($_POST['signUp'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $checkUsername = "SELECT * FROM useracount WHERE username = '$username' ";
    $result = $conn->query($checkUsername);
    if ($result->num_rows > 0) {
        echo "username already exists.";
    }else{
        $insertQuery = "INSERT INTO useracount(firstName, lastName, month, days, year, gender, username, password)
                      VALUES ('$firstname', '$lastname', '$month', '$day', '$year', '$gender', '$username', '$password')";
    }           if($conn->query($insertQuery)==TRUE){
                 header("location: login.php");            
                }else{
                    echo "error".$conn->error;
                }
}


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
                   

                include_once("core/config.php");
                include_once("core/post.php");
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