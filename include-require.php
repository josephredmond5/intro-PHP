<?php 

// include 
include('ninjas.php'); // works with paranthesis
include 'ninjas.php'; // also works without paranthesis
echo 'end of php';

// require
// require('ninjas.php');

// require('ninjass.php'); // require will not carry on with the code because its wrong
// include('ninjass.php'); // include will carry on with the code if its wrong
// echo 'end of php';


?>

<!DOCTYPE html>
<html>
<head>
	<title> php include & require </title>
</head>
<body>

    <?php include('content.php'); ?> // this is how to include from different pages
    <?php include('content.php'); ?>
    <?php include('content.php'); ?>

</body>
</html>