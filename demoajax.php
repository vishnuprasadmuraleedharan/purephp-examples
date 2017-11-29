<?php

  $conn = new mysqli('localhost', 'root', 'root', 'pureDb');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    


   
$sql = "SELECT firstname FROM MyGuests ORDER BY firstname";
$query = $conn->query($sql);



foreach($query as $querys){
	echo"\n";
    foreach($querys as $key => $val){
        echo "$val". "<br/>";
        // echo "\n";
        
    }

}

// var_dump($result->fetch_assoc()); die(); 
// echo "$search";
// $array=mysqli_fetch_assoc($row);
$conn->close();


?>