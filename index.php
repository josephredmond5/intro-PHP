<?php 

define('NAME', 'yoshi');

// $name = 'yoshi'; // the '$' sign indicates a variable in PHP
$age = 30;

// $name = 'mario'; // this overides the initial variable
 //define('NAME', 'mario'); // not running because the constant name is already defined

// echo $name; // this echos the variable to the screen

?>

<!DOCTYPE html>
<html>
<head>
	<title> my first php file </title>
</head>
<body>

	<h1>User profile page</h1>

	<div><?php echo $name ?></div>
	<div><?php echo $age ?></div>
	<div><?php echo NAME ?></div>

</body>
</html>