<?php


include_once("database/config.php");

class displayUserById extends config{

    public $id;
    
   public function __construct($id){
     $this->id = $id;
   }
   
 
   public function displayUsernameById(){
     try {
         $pdo = $this->connect();
         $stmt = $pdo->prepare("SELECT * FROM `useracount` WHERE id = :id");
         $stmt->bindParam(':id', $this->id);
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         foreach($result as $data){
 
             echo "<h3>$data[firstName] $data[lastName]</h3>";
         }
    
    } catch (PDOException $e) {
        die("failed data." .$e->getMessage());
    }
 }

 
 public function displayImageById(){
     try {
         $pdo = $this->connect();
         $stmt = $pdo->prepare("SELECT * FROM `useracount` WHERE id = :id");
         $stmt->bindParam(':id', $this->id);
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         foreach($result as $data){
 
             echo "<img src=$data[image] alt='error image' style='width:100px; height:100px; border-radius: 50%;'/>";
         }
    
    } catch (PDOException $e) {
        die("failed data." .$e->getMessage());
    }
 }

 
 public function displayBigImageById(){
     try {
         $pdo = $this->connect();
         $stmt = $pdo->prepare("SELECT * FROM `useracount` WHERE id = :id");
         $stmt->bindParam(':id', $this->id);
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         foreach($result as $data){
 
             echo "   <img src=$data[image] alt='error image' style='width:100%; height:550px;'/>";
         }
    
    } catch (PDOException $e) {
        die("failed data." .$e->getMessage());
    }
 }
 
 
 public function displayTableUserListById(){
     try {
         $pdo = $this->connect();
         $stmt = $pdo->prepare("SELECT * FROM `useracount` WHERE id = :id");
         $stmt->bindParam(':id', $this->id);
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         foreach($result as $data){
 
             echo " <table>";
               echo "      <thead>";
                 echo "    <tr>";
                 //  echo "   <th>Address</th>";
                  echo "   <th>Birth Month</th>";
                  echo "   <th>Birth Day</th>";
                   echo "  <th>Birth Year</th>";
                   echo "  <th>Gender</th>";
                    echo " </tr>";
                   echo "  </thead>";
                   echo "  <tbody>";
                    echo " <tr>";
                 //   echo "  <td>$data[address]</td>";
                    echo " <td>$data[month]</td>";
                   echo "  <td>$data[days]</td>";
                  echo "   <td>$data[year]</td>";
                  echo "   <td>$data[gender]</td>";
                echo "     </tr>";
                echo "     </tbody>";
              echo "       </table>";
         }
    
    } catch (PDOException $e) {
        die("failed data." .$e->getMessage());
    }
 }
 
 
 }
 