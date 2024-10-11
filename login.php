<?php
session_start();

if(isset($_SESSION["username"])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="auth.php" method="post">
        <label for="">username</label>
        <input type="text" name="username">

        <label for="">password</label>
        <input type="password" name="password">

        <button name="login">login</button>
    </form>
</body>
</html>