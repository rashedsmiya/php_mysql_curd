<?php 

     $studentlist = $_GET['student'];

     $myliststring = serialize($studentlist);

     echo $myliststring;