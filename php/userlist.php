<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serialize";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user_registasion"; 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {  
  // output data of each row 
  while($row = mysqli_fetch_assoc($result)) {
    var_dump(unserialize($row["studentlist"]));
  }
} else {
  echo "0 results"; 
}  
$conn->close();
?>