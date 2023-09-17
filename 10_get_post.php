<?php
    echo $_GET['name'];
    echo $_GET['age'];
?>


<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=John&age=36">Click here</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>

    <div>
        <label for=age> Age: </label>
        <inout type="text" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">

</form>
