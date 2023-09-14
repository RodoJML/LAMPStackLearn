<?php

    // Variable rules
    // - Variables must be prefixed with $
    // - Variables must start with a letter or an underscore
    // - Variables cannot start with a number
    // - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    // - Variables are case sensitive ($age and $AGE are two different variables)

    $name = 'John Doe';
    $age = 35;
    $isMale = true;
    $height = 1.85;
    $salary = 56000.50;

    // Print the variables, concatenation
    echo $name . 'is' . $age . 'years old.';
    echo "$name is $age years old, his height is $height and his salary is $salary";

    $x = '5' + '5'; // This will sum instead of concatenate
    var_dump($x);

    // You can make operations on the spot 
    echo 10 - 5;
    echo 10 * 5;
    echo 10 / 5;

    // CONSTANT only works with uppercase if these never change

    define('PI', 3.14);
    define('HOST', 'localhost');
    define('DB_NAME', 'dbname');
?>
    