<?php
$servername= "localhost";
$username  = "root";
$password  = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
  die("Database Connection failed: " . mysqli_connect_error());
} else {
 echo 'Database Connected...';
}

// Connection closed.
mysqli_close($conn);
?>