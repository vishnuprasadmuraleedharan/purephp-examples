<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pureDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('denny', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('elf', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('freddy', 'Dooley', 'julie@example.com')";


if($conn->multi_query($sql)===TRUE){
     echo"data inserted into myguests";
    } else{
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }

 ?>
