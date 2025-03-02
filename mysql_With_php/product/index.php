<?php 


   require_once '../database/db_conections.php';

   $sql = "SELECT products.*, categories.name as category_name FROM products JOIN categories ON products.category_id = categories.id"; 

   $result = $conn->query($sql);

   $products = [];

   if($result->num_rows > 0){
      $products = $result->fetch_all(MYSQLI_ASSOC);
   }


include_once '../view/product/index.view.php';