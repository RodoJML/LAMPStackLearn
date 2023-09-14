<?php

    // Arrays can be created in two ways
    $numbers = [1,3,6,8];
    // OR using the function array()
    $fruits = array('Apple', 'Orange', 'Banana');

    print_r($numbers);  

    var_dump($fruits);

    echo $fruits[1]; // Orange

    // You can add elements to the end of the array
    $fruits[] = 'Peach';
    print_r($fruits);

    // You can add elements to a specific index
    $fruits[0] = 'Pineapple';
    print_r($fruits);

    // Associative array
    // You can define the index, it can be a string or a number

    $person = [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 35,
        'hobbies' => ['Tennis', 'Video Games']
    ];

    $colors = 
    [
        1 => 'Rouge', 
        2 => 'Bleu', 
        3 => 'Vert'
    ];

    echo $colors[1]; // Rouge
    echo $colors[2]; // Bleu
    echo $colors[3]; // Vert

    // You can also have multidimensional arrays
    // This is an array of arrays

    $cars = [
        ['Honda', 20, 10],
        ['Toyota', 30, 20],
        ['Ford', 23, 12]
    ];

    echo $cars[0][0]; // Honda

    $people = [
        ['name' => 'John', 'age' => 20],
        ['name' => 'Mary', 'age' => 30],
        ['name' => 'Jane', 'age' => 25]
    ];

    echo $people[1]['name']; // Mary
?>