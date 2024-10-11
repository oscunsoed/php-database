<?php

session_start();

$kredensial = [
    "username" => "osc",
    "password" => "oscasik",
];

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $kredensial["username"] && $password == $kredensial["password"]) {
        $_SESSION["username"] = $username;
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }
}

if (isset($_POST["logout"])) {
    session_destroy();
    unset($_SESSION["username"]);
    header("Location: login.php");
}
