<?php 

// variable scope


// local vars

// function myFunc(){
//     $price = 10;
//     echo $price;
// }

// myFunc();

// function myFuncTwo($age){ // when we create a variable inside a function it has local scope inside the function
//     echo $age;
// }
// myFuncTwo(25);

$name = 'mario';

// function sayHello(){
//     global $name; // this makes it a global variable
//     $name = 'yoshi';
//     echo "hello $name";
// }

// sayHello();
// echo $name;


function sayBye(&$name){ // when we use a parametr inside a function that it a local variable 
    $name = 'wario';
    echo "bye $name"; // dont forget semi colons (;)
}

sayBye($name);
echo $name;



?>

<!DOCTYPE html>
<html>
<head>
	<title> php variable scope </title>
</head>
<body>

</body>
</html>