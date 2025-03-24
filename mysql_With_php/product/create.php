<?php 


   require_once '../database/db_conections.php';
   $sql = "SELECT id, name FROM catagories";

   $result = $conn->query($sql);

   $catagories = [];
   if($result->num_rows > 0){
      $catagories = $result->fetch_all(MYSQLI_ASSOC);
   }

   $name_err = "";
   $cat_err = "";
   $price_err = "";
   $image_err = "";
   $description_err = "";

   if(isset($_POST['submit'])){
      require_once '../validation/rules.php';

      $name = $_POST['name'];
      $category_id = $_POST['category_id'];
      $price = $_POST['price'];
      $image = $_POST['image'];  
      $description = $_POST['description'];

      if(!empty($name) && !empty($category_id) && !empty($price) && !empty($image) && !empty($description)){
         require_once '../database/db_conections.php';

         $sql = "INSERT INTO products(name, category_id, price, image, description) VALUES('$name', '$category_id', '$price', '$image', '$description')";

         if($conn->query($sql)){
            header('Location: index.php');
         }
      }

      $name_err = validateRequired('Name', $name);
      $cat_err = validateRequired('Catagory', $category_id);
      $price_err = validateRequired('Price', $price);
      $image_err = validateRequired('Image', $image);
      $description_err = validateRequired('Description', $description);
   }

include_once '../view/product/create.view.php'; 


?>