<?php

for($x = 0 ; $x <=10: $x++){
    echo "The number is: $x <br>";
}

$x = 1;

While($x <= 10){
    echo "The number is: $x <br>";
    $x++;
}

do{
    echo "The number is: $x <br>";
    $x++;
} while($x <= 10);

// For each loop, syntax
$posts = ['Post 1', 'Post 2', 'Post 3', 'Post 4'];

    // Function count() returns the number of elements in an array
    for($x = 0; $x < count($posts); $x++){
        echo $posts[$x] . '<br>';
    }


    // A simpler and alternative way to do this is using the foreach loop
    foreach($posts as $post){
        echo $post . '<br>';
    }
?>