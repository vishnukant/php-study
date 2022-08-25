<?php
//mysqli_fetch_row();
//mysqli_fetch_assoc();
//mysqli_fetch_object();
//mysqli_fetch_array();

$servername= "localhost";
$username  = "root";
$password  = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "Select * from login where id=8";
$result = mysqli_query($conn,$sql);
echo '<pre>';
while($row = mysqli_fetch_assoc($result)) {
	print_r($row);
	//echo $row[3];echo '<br/>';
}

// Connection closed.
mysqli_close($conn);
?>