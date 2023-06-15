<?php 

$stringOne = 'my email is ';
$stringTwo = 'mario@123.com';

// echo $stringOne.$stringTwo; // concat two strings together

$name = 'mario';
// $age = 36;

// echo 'hey, my name is ' . $name; // strings concats with a variable

// echo "hey, my name is $name and i am $age years old"; 

// echo "the ninja screamed \"whaaaa\""; // escaping the characters 
// echo ' the ninja screamed "whaaa"'; // this is because the string is started with single quotes

// echo $name[1]; // getting individual letters or characters out of a string

// echo strlen($name); // this will look for the variable and count the sring length
// echo strtoupper($name);  // takes a string and converts it to upper case
// echo strtolower($name); // takes a string and converts it to lower case
echo str_replace('m', 'w', $name); // replaces certain charcaters in your varaible 

?>

<!DOCTYPE html>
<html>
<head>
	<title> php strings </title>
</head>
<body>

</body>
</html>