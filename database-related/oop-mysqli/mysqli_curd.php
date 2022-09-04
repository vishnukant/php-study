<?php
$servername = "localhost";
$username  = "root";
$password  = "";
$database  = "php_study";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if (!$conn->connect_error) {
	
	$insertData = array(
		'title'	=> 'shdsjhdjsds',
		'author'=> 'sdhsjdhj',
	);
	
	deleteData($conn,2);
	echo "Database Connected successfully";
} else {
	die("Connection failed: " . $conn->connect_error);
}

$conn->close();


//=== CURD Operations ======
function createTable($conn) {
	$sql = "CREATE TABLE testing( id INT NOT NULL AUTO_INCREMENT, title VARCHAR(100) NOT NULL, ".
            "author VARCHAR(40) NOT NULL,create_date DATE,PRIMARY KEY ( id )); ";
	 if ($conn->query($sql)) {
		printf("Table testing created successfully.<br />");
	 }
	 if ($conn->errno) {
		printf("Could not create table: %s<br />", $conn->error);
	 }
}

function insertData($conn,$insertData) {
	$sql = "INSERT INTO testing (title,	author, create_date	)values ('".$insertData['title']."','".$insertData['author']."','".date('Y-m-d')."'); ";
	 if ($conn->query($sql)) {
		printf("Record Inserted successfully.<br />");
	 }
	 if ($conn->errno) {
		printf("Could not create table: %s<br />", $conn->error);
	 }
}

function updateData($conn,$insertData,$id) {
	$sql = "UPDATE testing SET title='".$insertData['title']."',author= '".$insertData['author']."' where id=$id; ";
	if ($conn->query($sql)) {
		printf("Updated successfully.<br />");
	}
	if ($conn->errno) {
		printf("Could not create table: %s<br />", $conn->error);
	}
}

function readData($conn) {
	$sql = "SELECT * FROM testing";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo '<pre>';
		print_r($row);
	  }
	} else {
	  echo "0 results";
	}
}


function deleteData($conn,$id) {
	$sql = "DELETE FROM testing where id=$id; ";
	if ($conn->query($sql)) {
		printf("Record Deleted  successfully.<br />");
	}
	if ($conn->errno) {
		printf("Could not create table: %s<br />", $conn->error);
	}
}
?>