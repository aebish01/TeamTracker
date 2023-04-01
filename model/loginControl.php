<?php

session_start();

if (isset($_POST["submit"])) {
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    include_once "Login.class.php";

    $login = new Login($userName, $password);

    $login->loginUser();

    header("Location: ..");
}
