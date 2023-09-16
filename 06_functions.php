<?php

    // Functions
    function registerUser(){
        echo 'User registered';
    };

    function resgisterEmaiL($email){
        echo 'User registered with email: ' . $email;
    };

    // Remember the scope of variables inside functions is local to the function itself 
    // unless you use the "global" keyword to make it global or pass it as a parameter
    // to make it accessible inside the function scope 

    registerUser();

    resgisterEmaiL("myemail.com");


    function sum($n1, $n2){
        return $n1 + $n2;
    }

    $number = sum(10, 5);

    echo $number;


    // Arrow functions 
    // Introduced in PHP 7.4
    // They are a more concise way of writing functions 
    // They are anonymous functions (they dont have a name) 
    // They are useful for callbacks and closures 

    $multiply = fn($n1, $n2) => $n1 * $n2;
    echo $multiply(10, 5);

?>