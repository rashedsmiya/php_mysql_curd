<?php 

      $category = [];
      $name_err = "";
      if(isset($_GET['id'])){
         require_once '../database/db_conections.php';
   
         $id = $_GET['id'];
   
         $sql = "SELECT name, id FROM categories where id = $id";
   
         $select = $conn->query($sql);
         if($select->num_rows > 0){ 
            $category = $select->fetch_assoc();
         }

         if(isset($_POST['submit'])){
            
            $name = $_POST['name']; 
            $err = false;

            $unique_check = "SELECT * FROM categories Where name = '$name' AND id != $id";

            $select = $conn->query($unique_check);
            
            if($select->num_rows > 0){
               $err = true;
               $name_err = '<span class="text-danger">Catagory name already exists</span>';
            }   

         if(empty($name)){
            $err = true;
            $name_err = '<span class="text-danger">Name is required</span>';
             
         }elseif(!is_string($name) || is_numeric($name)){
            $err = true;
            $name_err = '<span class="text-danger">Name field must be string</span>';
         }elseif(strlen($name) < 3){
            $err = true;
            $name_err = '<span class="text-danger">Name field must be at least 3 characters</span>';
         }  

         if(!$err){
            $sql = "UPDATE categories SET name = '$name' where id = $id"; 

            $result = $conn->query($sql); 

            if($result){
               header('Location: index.php');
            }
         }
      }       
   }

      
   include_once '../view/catagory/edit.view.php';