<?php
/* GET and POST Superglobals

We can pass data through URLS and forms using these
Get and Post superglobals

*/

if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=23"> CLICK ME</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">

</form>