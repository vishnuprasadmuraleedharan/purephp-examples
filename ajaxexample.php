<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script type="text/javascript">
		
	$(document).ready(function(){
	    $("#demo").keyup(function(){
        var demo1 = $("#demo").val();
              console.log(demo1);

                $.ajax({
	        	type: "POST",
				url: "http://localhost/purephp/ajaxexample.php",
				dataType: 'json',
				data: demo1
			,
			

			success: function(response){
				alert("showing..");
			// $("#searchshow").show();
			$("#searchshow").html(response);
		}
			});	
	        });
	    });
	


	</script>
</head>
<body>

<?php
// include("selectfrom.php");

    $conn = new mysqli('localhost', 'root', 'root', 'pureDb');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    
if (!empty($_POST["demo1"])) {
   
$sql = "SELECT firstname FROM MyGuests WHERE firstname like'" . $_POST["demo1"] . "%' ORDER BY firstname";
$result = $conn->query($sql);	
 
 // if ($result->num_rows > 0) {

foreach($result as $querys){
    foreach($querys as $key => $val){
        echo "$val";
        // echo "\n";
        echo json_encode($val);
        // var_dump($val); die();

    }

}
 
 }

// }
// var_dump($result->fetch_assoc()); die(); 

// $array=mysqli_fetch_assoc($row);
$conn->close();
// $directions = json_decode($_POST['firstname']);
// var_dump($directions);

?>

<p><b>Start typing a name in the input field below:</b></p>
<form>
First name: <input type="text" id="demo">
</form>
<p>Suggestions: <span id="searchshow"></span></p>

</body>
</html>