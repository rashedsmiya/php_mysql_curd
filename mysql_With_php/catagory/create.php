<?php 

      $name_err = "";
      if(isset($_POST['submit'])){
         require_once '../database/db_conections.php';
         require_once '../validation/rules.php';

         $name = $_POST['name'];

         $name_err = validateRequired('Name', $name); 
         $name_err = validateString('Name', $name); 
         $name_err = validateMinLength('Name', $name, 3); 
         $name_err = validateCreateExists('Name', $name, 'categories', 'name', $conn);
         
          

         if(!err){
            $sql = "INSERT INTO categories(name) VALUES('$name')";

            $result = $conn->query($sql);
            
            if($result){
            header('Location: index.php');
         }  
       }         
    }   
      
include_once '../view/catagory/create.view.php'; 