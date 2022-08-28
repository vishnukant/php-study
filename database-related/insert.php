<?php
$servername= "localhost";
$username  = "root";
$password  = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
$sql = "INSERT INTO login (employee_id, role_id, username) VALUES ('6', '2', 'test@123')";

if (mysqli_query($conn,$sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo 'Error: '. $conn->error;
}

// Connection closed.
mysqli_close($conn);
?>