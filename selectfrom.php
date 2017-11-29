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

$sql = "SELECT firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
// var_dump($result->fetch_assoc()); die(); 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["firstname"]. $row["lastname"] "<br>";
    }
} else {
        echo "0 results";
}


?> 