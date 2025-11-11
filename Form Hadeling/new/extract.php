<?php
if (isset($_POST['submit'])) {
    extract($_POST);
    echo "Hello $name! Your email is $email";
}
?>

<form method="post">
    Name: <input type="text" name="name">
    Email: <input type="email" name="email">
    <input type="submit" name="submit" value="Send">
</form>