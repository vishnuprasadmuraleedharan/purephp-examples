<?php 


// --------example for explode---------
$a = 'abhi,1,+, ,e';
$b = explode(',', $a);

echo '<pre>';
echo'-----print_r<br>';
print_r($b);

echo'-----vardump<br>';

var_dump($b);

// $c = implode('+', $b);
// print_r($c);

// $test_url = 'http://www.mydomain.com/hello monkey/test.some';
// echo urlencode($test_url);

// $a=1;
// if($a == 1){
// 	header("location: HTTP://www.google.com");
// }


// $fruit=["apple","red","veg"];
// $car=["name" => "benz","colour" => "black","type" => "diesel"];
//  var_dump($car);	

$var= 'hello world';
echo strpos("$var");
 ?>

