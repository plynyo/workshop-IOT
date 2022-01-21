<?php
// Set the JSON header
header("Content-type: text/json");

// The x value is the current JavaScript time, which is the Unix time multiplied 
// by 1000.

if (count($_GET)>0&&isset($_GET["temp1"])) {
	$temp=$_GET["temp1"];
}





date_default_timezone_set("Europe/Rome"); 
$x = time() *1000;
// The y value is a random number
$y = rand(150, 200);
//$y = $temp;
// Create a PHP array and echo it as JSON
$ret = array($x, $y);
echo json_encode($ret,JSON_NUMERIC_CHECK);
?>