<?php

    // Array functions
    $fruits = ['Apple', 'Orange', 'Pear'];

    // Get Length
    echo count($fruits); // 3

    // Search for value
    echo in_array('Apple', $fruits); // 1

    // Add to the end of the array, 2 options: 
    $fruits[] = 'Banana';
    array_push($fruits, 'Grapes');

    // Add to the beginning of the array
    array_unshift($fruits, 'Mango');

    // Remove from the array
    array_pop($fruits); // Removes the last element
    array_shift($fruits); // Removes the first element
    unset($fruits[1]); // Removes the element indicated, on this example at index 1, and the index itself is also gone. 

    // Split array into chunks
    $chunkedAr = array_chunk($fruits, 2); // 2 is the size of each chunk
    print_r($chunkedAr);

    // Concatenate arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2]; // This is the new way to do it in PHP 7.4

        // You can also merge associative arrays, 
        // so that one array is the keys and the other is the values

        $arr5 = ['a' => 1, 'b' => 2];
        $arr6 = ['c' => 3, 'd' => 4];
        $arr7 = array_combine($arr5, $arr6);
        print_r($arr7); // ['a' => 3, 'b' => 4]

        // You can also extract the keys or the values from an array
        $keys = array_keys($arr7);
        print_r($keys); // ['a', 'b']

        // You can also swap the keys and the values
        $values = array_flip($arr7);
        print_r($values); // [3 => 'a', 4 => 'b']


        // You can create a new array giving a range
        $numbers = range(1, 10);
        print_r($numbers); // [1,2,3,4,5,6,7,8,9,10]

        // You can also create a new array giving a range with a step
        $numbers = range(1, 10, 2);
        print_r($numbers); // [1,3,5,7,9]

        $newNumbers = array_map(function($number) {
            return "Number ${number}";
        }, $numbers);

        print_r($newNumbers); // ['Number 1', 'Number 3', 'Number 5', 'Number 7', 'Number 9']

        // You can also filter an array
        $lessthan10 = 
                array_filter(
                    $numbers, 
                    function($number){return $number < 10;}
                );
        
        print_r($lessthan10); // [1,3,5,7,9]

        


?>