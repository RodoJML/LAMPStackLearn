<?php

// We use the information from the HTML form here
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

// This is the same but with security
// Post information is stored into a variable
// and variables are wrapped in the htmlspecialchars() function
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);

    echo $name;
    echo $age;
}


    // In the HTML tages the "name" attribute is used to identify the input
    // this is what is shown in the URL when the form is submitted

    // If you dont want the information to be shown in the URL you can use the POST method
    // This is more secure because the information is not shown in the URL
    // The information is sent in the background
    // The information is not stored in the browser history
    // The information is not cached
    // The information has no length limit
    // The information can be of any type


    // For security reasons you should always use POST instead of GET
    // and wrap the $_POST variables in the htmlspecialchars() function
    // This will prevent XSS attacks (Cross Site Scripting) 
    // This will prevent users from injecting malicious code into your website
    
?>


<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=John&age=36">Click here</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
     
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>

    <div>
        <label for=age> Age: </label>
        <input type="text" name="age">
    </div>

    <input type="submit" value="submit" name="submit">

</form>
