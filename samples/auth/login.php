<?php

if ($_POST) {
    authorize($_POST['login'], $_POST['password']);
}

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}

?>

<form method="post">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
</form>