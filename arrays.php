<?php 

// indexed arrays - using the index to access the differnet elements inside the array

$peopleOne = ['joseph', 'keith', 'leah'];

//  echo $peopleOne[1]; // choosing a certain point in the array 

$peopleTwo = array('steve', 'ken', 'cox'); // alternative way to use an array
// echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
// print_r($ages); // this a function called print_r and its in readable format

$ages[1] = 25;
// print_r($ages); // this is how you overwrite a value

$ages[] = 60;
// print_r($ages); // this just adds a value onto the end of an array

array_push($ages, 70);
// print_r($ages); // this is another way of adding a value onto the end of an array

// echo count($ages); // this counts the numbers in arrays

$peopleThree = array_merge($peopleOne, $peopleTwo); // this is to merge two arrays together
// print_r($peopleThree);



// associate arrays - we use key & value pairs 

$ninjasOne = ['joseph' => 'black', 'mario' => 'orange', 'luigi' => 'brown']; // 'shaun' is the key and 'black' is the value
// echo $ninjasOne['mario'] // gives you the value attached to the key 'mario'
// print_r($ninjasOne); // prints the whole of $ninjasOne variable

$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
// print_r($ninjasTwo);

$ninjasTwo['toad'] = 'pink'; // adding in a new value
//  print_r($ninjasTwo);

 $ninjasTwo['peach'] = 'pink'; // overidng in a new value
//  print_r($ninjasTwo);

// echo count($ninjasOne);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);













?>


<!DOCTYPE html>
<html>
<head>
	<title> php arrays </title>
</head>
<body>

</body>
</html>