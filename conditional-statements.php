<?php 


// conditional statements

// $price = 20;

// if ($price < 10) { // conditional statement
//     echo 'the condition is met';
// } elseif ($price < 30) {
//     echo 'elseif condition met';
// } else {
//     echo 'the condition is not met';
// }


$products = [
    ['name' => 'joseph', 'price' => 20],
    ['name' => 'dean', 'price' => 10],
    ['name' => 'smithy', 'price' => 15],
    ['name' => 'pete', 'price' => 5],
    ['name' => 'mike', 'price' => 40],
    ['name' => 'steve', 'price' => 2],
];

foreach($products as $product){
    // if($product['price'] < 15 && $product['price'] > 2){
    //     echo $product['name'] . '<br />';
    // }
    // if($product['price'] > 20 || $product['price'] < 10){ // if the rpice is over 20 OR(||) less than 10
    //     echo $product['name'] . '<br />';
    // }

}


?>

<!DOCTYPE html>
<html>
<head>
	<title> php booleans-comparisons </title>
</head>
<body>

    <div>
        <ul>
            <?php foreach($products as $product){ ?>
                <?php if($product['price'] > 15){ ?>
                
                <li><?php echo $product['name'] ?></li> 
                 <?php } ?>
             <?php } ?>
        </ul>
    </div>
</body>
</html>