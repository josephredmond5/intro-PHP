<?php 


// comparison booleans
echo true; // values have to be converted to strings and string of 1 if true - "1"
echo false; // empty string if false, ""


// numbers
echo 5 < 10; //  this is true so equates to 1 in the browser 
echo 5 > 10;
echo 5 == 10;
echo 10 == 10;
echo 5 != 10;
echo 5 <= 5;
echo 5 >= 5;

// strings
echo 'shaun' < 'yoshi'; // 'shaun' comes first because 's' comes first in the alphabet
echo 'shaun' > 'yoshi';
echo 'shaun' > 'Shaun'; // an uppercase letter is seen as less than a normal letter
echo 'mario' == 'mario';
echo 'mario' == 'Mario';


// loose vs strict booleans
echo 5 == '5'; // this is a loose comparison and doesnt take into account the type of data
echo 5 === '5'; // this is a strict comparison and takes into account the type of data
echo 5 === 5; // loose vs strict equal comparison


echo true == "1"; // loose comparison
echo false == ""; 





?>

<!DOCTYPE html>
<html>
<head>
	<title> php booleans-comparisons </title>
</head>
<body>

</body>
</html>