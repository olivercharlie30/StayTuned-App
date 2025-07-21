<?php
    
    include_once("../database/config.php");
    include_once("../class/post.php");
    
if(isset($_POST['edit'])) {
   
   $id = $_POST['edit'];
   
   try {
    $pdo = $this->connect();
    $stmt = $pdo->prepare("SELECT * FROM `post`");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

   } catch (PDOException $e) {
        die("select failed" .$e->getMessage());

   }
   
}
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




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    

     <div class="post">
            <div class="postWrapper">
                <form action="edit.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="Enter your title Post..." id="title"
                      value='<?php echo $result['title']; ?>'> 
                    <textarea name="category" id="" value='<?php echo $result['category']; ?>'> </textarea>
                    <label for="file">
                        <i class="fa-solid fa-image"></i>
                        Photo/Video
                    </label>
                    <input type="file" name="file" id="file" >
                    <button name="createBtnPost">Create Post</button>
                </form>
            </div>
        </div>

</body>
</html>