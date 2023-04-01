<?php

//other files
require_once('/xampp/htdocs/TeamTracker/model/User.php');
require_once('/xampp/htdocs/TeamTracker/model/database.php');
require('model/employeeModel.php');
require_once('/xampp/htdocs/TeamTracker/model/Login.class.php');
//require_once('/xampp/htdocs/TeamTracker/model/loginControl.php');
//objects
// Start session
session_start();
$db = new Database();
$user = new User();
// Check if user is logged in
if (!isset($_SESSION['userID'])) {
    // Redirect to login page
    header('Location: http://localhost/TeamTracker/view/login.php');
    exit;
}

// Get user ID from session
$sessionUserID = $_SESSION['userID'];

// Create user object and set user ID
$user = new User();
$user->setUserId($sessionUserID);

// Get user ID from user object
$UserID = $user->getUserID();
//variables
$clockIn = filter_input(INPUT_POST, 'userIDClockIn', FILTER_VALIDATE_INT);
$clockOut = filter_input(INPUT_POST, 'userIDClockOut', FILTER_VALIDATE_INT);

//add to clock in 
if($clockIn) {
    $timezone = 'America/Chicago';
    date_default_timezone_set($timezone);
    $date = date('Y-m-d');
    $time = date('Y-m-d H:i:s');
    $db->insert('clock', [
        'userID' => $clockIn,
        'date' => $date,
        'time' => $time,
        'atWork' => true
    ]);
}
if($clockOut) {
    $timezone = 'America/Chicago';
    date_default_timezone_set($timezone);
    $date = date('Y-m-d');
    $time = date('Y-m-d H:i:s');
    $db->insert('clock', [
        'userID' => $clockOut,
        'date' => $date,
        'time' => $time,
        'atWork' => false
    ]);
}
// action
$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if (!$action) {
        $action = 'listItems';
    }
}
//switch between actions
switch ($action) {
    case "timeOffEmp" :
        include('view/timeOffEmp.php');
        break;
    case "availEmp" :
        include('view/availabilityEmp.php');
        break;
    case "scheduleEmp" :
        include('view/scheduleEmp.php');
        break;
    case "userProfileEmp":
        $user = displayProfile($db, $UserID);
        include('view/profileEmp.php');
        break;
    default :
        $check = $db->checkAtWork($UserID);
        $clocks = $db->queryAllClock('clock', $UserID);
        include('view/clock.php');
}
