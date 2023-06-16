<?php 
//     $blogs = ['blog1', 'blog2', 'blog3', 'blog3'];
//      // below is a for loop in php 
//     for($x = 0; $x < count($blogs); $x++ ){
//         echo 'some templates';
//     }
//     $blogs = ['blog1', 'blog2', 'blog3', 'blog3'];
//     // below is a for loop in php 
//    foreach($blogs as $blog){
//        echo 'same template';
//    }

// $ninjas = ['joseph', 'ryan', 'blake']; // example for loop
// for($i = 0; $i < count($ninjas); $i++){
//     echo $ninjas[$i] . '<br />';  // this takes each part of the array on different lines
// }

// foreach($ninjas as $ninja){ // example foreach loop
//     echo $ninja . '<br />' ;
// }

$products = [
    ['name' => 'joseph', 'price' => 20],
    ['name' => 'dean', 'price' => 10],
    ['name' => 'smithy', 'price' => 15],
    ['name' => 'pete', 'price' => 5],
    ['name' => 'mike', 'price' => 40],
    ['name' => 'steve', 'price' => 2],
];

// foreach($products as $product){ // cycling through the products and getting the product name and price
//     echo $product['name'] . ' - ' . $product['price'];
//     echo '<br />';
// }

//     $i = 0;

// while($i < count($products)){ // exammple while loop
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }



?>

<!DOCTYPE html>
<html>
<head>
	<title> php loops </title>
</head>
<body>

<!-- outputing a different html template for each individual product -->
<h1>Products</h1>
<ul>
    <?php foreach($products as $product){ ?>

        <h3><?php echo $product['name']; ?></h3>
        <p>£ <?php echo $product['price']; ?></p>

      <?php } ?> 
</ul>

</body>
</html>