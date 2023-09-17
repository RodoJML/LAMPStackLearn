<?php

if(isset($_POST['submit'])){
    echo $_GET['name'];
    echo $_GET['age'];
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

    <input type="submit" value="Submit" name="submit">

</form>
