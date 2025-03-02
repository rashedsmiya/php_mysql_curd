<?php 

     if(isset($_GET['id'])){
        require_once '../database/db_conections.php';

        $id = $_GET['id'];

        $sql = "SELECT status from categories where id = $id";

        $select = $conn->query($sql);
        if($select->num_rows > 0){   
           $catagory = $select->fetch_assoc();

           $status = !$catagory['status'];

           $up_sql = "UPDATE categories SET status = '$status' where id = $id";

           $result = $conn->query($up_sql);

           if($result){
              header('Location: index.php');
           }            
        }
     }
 
?>