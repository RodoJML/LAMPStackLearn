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

    // If you want to access the index as well
    foreach($posts as $index => $post){
        echo $index . ' - ' . $post . '<br>';
    }

    // You can also apply this over associative arrays
    $person = [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 35,
        'hobbies' => ['Tennis', 'Video Games']
    ];

    foreach($person as $key => $value){
        echo "$key - $value <br>";
    }

    // You can also apply this over multidimensional arrays
    $cars = [
        ['Honda', 20, 10],
        ['Toyota', 30, 20],
        ['Ford', 23, 12]
    ];

    foreach($cars as $car){
        foreach($car as $detail){
            echo $detail . ' ';
        }
        echo '<br>';
    }

?>