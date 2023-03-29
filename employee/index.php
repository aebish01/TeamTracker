<?php
//rewuired files
require_once('/xampp/htdocs/TeamTracker/model/User.php');
require_once('/xampp/htdocs/TeamTracker/model/database.php');
require('model/employeeModel.php');
//objects
$user = new User();
$db = new Database();
// profile
$userID  = 7;
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
    default:
        $user = displayProfile($db, $userID);
        include('view/profileEmp.php');
}

?>