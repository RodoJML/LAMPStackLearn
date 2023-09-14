<?php
    // Theres no need to close the tag if the file contains only PHP
    // otherwise close the tag.

    // ";" is required at the end of each statement

    // echo: is used to output strings, numbers, html, etc.
    echo "Hello World";

    // print: is like echo but it can only output one string
    print 123;

    // print_r(): single values and arrays
    print_r([1,2,3,4]);

    // var_dump(): returns more info like data type and length
    var_dump('Hello World');

    // var_export(): Outputs a string representation of a variable
    var_export('Hello World');
?>