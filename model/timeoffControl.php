<?php

session_start();

if (isset($_POST["submit"])) {
    $uID = $_SESSION["userID"];
    $startDay = $_POST["sDay"];
    $startMonth = $_POST["sMonth"];
    $startYear = $_POST["sYear"];
    $endDay = $_POST["eDay"];
    $endMonth = $_POST["eMonth"];
    $endYear = $_POST["eYear"];
    $type = $_POST["type"];
    $message = $_POST["message"];

    include_once "Timeoff.class.php";

    $timeoff = new Timeoff($uID, $startDay, $startMonth, $startYear, $endDay, $endMonth, $endYear, $type, $message);

    $timeoff->createRequest();

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
