<?php 

   if(isset($_GET['id'])){
      require_once '../database/db_conections.php';

      $id = $_GET['id'];

      $sql = "Delete from categories where id = $id";

      $result = $conn->query($sql);

      if($result){
         header('location: index.php');
      }
   }

?>