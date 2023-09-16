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

?>