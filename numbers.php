<?php 

$radius = 25;
$pi = 3.14;

// basic operators - *, /, +, -, **

echo $pi * $radius**2;

// order of operation (B I D M A S) brackets, indicies, division, multiplication, addition, subtraction

echo 2 * (4 + 9) / 3;

// increment & decrement operators

echo $radius++; // this is showing 25 because it is reading $radius first
echo $radius; // this is now showing 26

// shorthand operators

$age = 20;
$age += 10; // shorthand operator for adding something
$age -= 10;  // shorthand operator for subtracting something
$age *= 10; // shorthand operator for multiplying
echo $age;

// number functions

echo floor($pi); // this takes the number down
echo ceil($pi); // moves it up to the nearest integer
echo pi();


?>

<!DOCTYPE html>
<html>
<head>
	<title> php numbers </title>
</head>
<body>

</body>
</html>