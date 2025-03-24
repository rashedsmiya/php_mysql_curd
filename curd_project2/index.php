<?php 

    $conn = mysqli_connect("localhost", "root", "", "cmbd263");

    if(!$conn){
        echo "Database connection fail";
    } else {
        echo "Database connection sucessfull";
    }

    $sql  = "SELECT  * FROM student";
    

    