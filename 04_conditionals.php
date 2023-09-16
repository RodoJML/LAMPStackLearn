<?php

    $age = 20;

    if($age > 18) {
        echo 'You can drink beer';
    } elseif($age > 16) {
        echo 'You can drink wine';
    } else {
        echo 'You can drink juice';
    };

    echo '<br>';

    $posts = ['any post'];

    if(!empty($posts)) {
        echo 'There are posts';
    } else {
        echo 'There are no posts';
    };

    echo '<br>';
    
    // Ternary operator
    // This is a shortcut for if/else statements
    echo $age > 18 ? 'Adult' : 'Minor'; // Adult

    echo '<br>';

    // Coalesce operator
    // This is a shortcut for if/else statements
    // If the variable is null, it will return the second value
    // If the variable is not null, it will return the variable
    $myName = isset($name) ? $name : 'John Doe';
    
    echo '<br>';
    // Switch statement
    // This is a shortcut for if/else statements
    // It is used when you have a lot of conditions
    $color = 'red';

    switch($color) {
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';
    };


?>