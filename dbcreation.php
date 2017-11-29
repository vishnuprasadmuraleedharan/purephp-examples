<?php 

$servername="localhost";
$username="root";
$password="root";

// creating connection

$conn = new mysqli($servername, $username, $password);


// checking connection

if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}

// creating db
$sql="CREATE DATABASE pureDb";

// checking sql cubrid_query

if($conn->query($sql)===TRUE){
	echo "database created successfully";
}else{
	echo "database creation failed:".$conn->error;
}

$conn->close();

?>