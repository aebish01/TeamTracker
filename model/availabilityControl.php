<?php

session_start();

if (isset($_POST["submit"])) {
    $uID = $_SESSION["userID"];
    $monday = $_POST["monday"];
    $monTo = $_POST["monTo"];
    $tuesday = $_POST["tuesday"];
    $tuesTo = $_POST["tuesTo"];
    $wednesday = $_POST["wednesday"];
    $wedTo = $_POST["wedTo"];
    $thursday = $_POST["thursday"];
    $thuTo = $_POST["thuTo"];
    $friday = $_POST["friday"];
    $friTo = $_POST["friTo"];
    $saturday = $_POST["saturday"];
    $satTo = $_POST["satTo"];
    $sunday = $_POST["sunday"];
    $sunTo = $_POST["sunTo"];

    include_once "Availability.class.php";

    $availability = new Availability($uID, $monday, $monTo, $tuesday, $tuesTo, $wednesday, $wedTo, $thursday, $thuTo, $friday, $friTo, $saturday, $satTo, $sunday, $sunTo);

    $availability->createRequest();

    if (isset($_SESSION["userID"])) {
        switch ($_SESSION["authlvl"]) {
            case 1:
                header("Location: ../admin/");
                break;
            case 2:
                header("Location: ../supv/");
                break;
            default:
                header("Location: ../employee/");
        }
    }
}
