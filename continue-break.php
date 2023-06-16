<?php 

$products = [
    ['name' => 'joseph', 'price' => 20],
    ['name' => 'dean', 'price' => 10],
    ['name' => 'smithy', 'price' => 15],
    ['name' => 'pete', 'price' => 5],
    ['name' => 'mike', 'price' => 40],
    ['name' => 'steve', 'price' => 2],
];

foreach($products as $product){

    if($product['name'] === 'mike'){
        break;
    }

    if($product['price'] > 15){
        continue;
    }
    
    echo $product['name'] . '<br />';
    echo $product['price'] . '<br />';

}



?>

<!DOCTYPE html>
<html>
<head>
	<title> php break & continue </title>
</head>
<body>

</body>
</html>