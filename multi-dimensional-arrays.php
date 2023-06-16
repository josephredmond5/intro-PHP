<?php 

// multi-dimensional arrays

$blogs = [ // this is a multi dimensional array
    ['mario party', 'mario', 'lorem', 30],
    ['mario kart cheats', 'toad', 'lorem', 30],
    ['zelda hidden chests', 'link', 'lorem', 50]
];
// print_r($blogs[1][1]); //we are accessing [1] for the blog itself and [1] for the index inside the array


// the below is an associative array for the above
$blogs = [ // this is a multi dimensional array
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];
echo $blog[2]['author'];




?>

<!DOCTYPE html>
<html>
<head>
	<title> php numbers </title>
</head>
<body>

</body>
</html>