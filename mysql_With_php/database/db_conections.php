<?php 

   define('HOST', 'localhost');
   define('USER', 'root');
   define('PASSWORD', '');
   define('DATABASE', 'ecom');

   $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

   if(!$conn){
         die("Connection faile: " . mysqli_connect_error());
   }
   

?>