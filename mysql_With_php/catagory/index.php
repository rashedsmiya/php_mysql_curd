<?php 


      require_once '../database/db_conections.php';
      $sql = "SELECT * FROM categories";

      $result = $conn->query($sql);

      $categories = [];

      if($result->num_rows > 0){
         $categories = $result->fetch_all(MYSQLI_ASSOC);
      }

      include_once '../view/catagory/index.view.php';