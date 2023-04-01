<?php

//other files
require_once('/xampp/htdocs/TeamTracker/model/User.php');
require_once('/xampp/htdocs/TeamTracker/model/database.php');
require('model/supvModel.php');
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
//for delete
$delUser = filter_input(INPUT_POST, 'deleteUserID', FILTER_VALIDATE_INT);
//for add
$addFirstName = filter_input(INPUT_POST, 'addFName', FILTER_UNSAFE_RAW);
$addLastName = filter_input(INPUT_POST, 'addLName', FILTER_UNSAFE_RAW);
$addAddress = filter_input(INPUT_POST, 'addAddress', FILTER_UNSAFE_RAW);
$addPhoneNumber = filter_input(INPUT_POST, 'addPhone', FILTER_UNSAFE_RAW);
$addEmail = filter_input(INPUT_POST, 'addEmail', FILTER_UNSAFE_RAW);
$addEmpType = filter_input(INPUT_POST, 'addType', FILTER_UNSAFE_RAW);
$addAuthLvl = filter_input(INPUT_POST, 'addAuth', FILTER_UNSAFE_RAW);
$setUserName = '';

if($addFirstName && $addLastName){
    $setUserName = $user->setUsername($addFirstName, $addLastName);
}
$setPassword = "Pa55Word!";
//for update 
$userUpdate = filter_input(INPUT_POST, 'userIDUpdate', FILTER_VALIDATE_INT);
$forUpdateUser = filter_input(INPUT_POST, 'userID4Update', FILTER_VALIDATE_INT);
$upPassword = filter_input(INPUT_POST, 'updatePassword', FILTER_UNSAFE_RAW);
$upFirst = filter_input(INPUT_POST, 'updateFName', FILTER_UNSAFE_RAW);
$upLast = filter_input(INPUT_POST, 'updateLName', FILTER_UNSAFE_RAW);
$upPhone = filter_input(INPUT_POST, 'updatePhone', FILTER_UNSAFE_RAW);
$upAddress = filter_input(INPUT_POST, 'updateAddress', FILTER_UNSAFE_RAW);
$upEmail = filter_input(INPUT_POST, 'updateEmail', FILTER_UNSAFE_RAW);
$upEmpType = filter_input(INPUT_POST, 'updateType', FILTER_UNSAFE_RAW);
$upAuthLevel = filter_input(INPUT_POST, 'updateAuth', FILTER_UNSAFE_RAW);
//action 
$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if (!$action) {
        $action = 'listItems';
    }
}
//if else 
if ($setUserName && $setPassword && $addFirstName && $addLastName && $addAddress && $addPhoneNumber && $addEmail && $addEmpType && $addAuthLvl){
    $db->insert('users',[
        'userName' => $setUserName,
        'password' => $setPassword,
        'firstName' => $addFirstName,
        'lastName' => $addLastName,
        'address' => $addAddress,
        'phoneNumber' => $addPhoneNumber,
        'email' => $addEmail,
        'empType' => $addEmpType,
        'authLevel' => $addAuthLvl
    ] );
} elseif($delUser) {//else if deleteuser
    $db->delete('users', $delUser);
} 
//elseif(!empty($upPassword)) {//esleif userupdate
//     $db->update('users', ['password' => $upPassword], $forUpdateUser);
// } elseif(!empty($upFirst)) {//esleif userupdate
//     $db->update('users', ['firstName' => $upFirst], $forUpdateUser);
// } elseif(!empty($upLast)) {//esleif userupdate
//     $db->update('users', ['lastName' => $upLast], $forUpdateUser);
// } elseif(!empty($upPhone)) {//esleif userupdate
//     $db->update('users', ['phoneNumer' => $upPhone], $forUpdateUser);
// } elseif(!empty($upAddress)) {//esleif userupdate
//     $db->update('users', ['address' => $upAddress], $forUpdateUser);
// } elseif(!empty($upEmail)) {//esleif userupdate
//     $db->update('users', ['email' => $upEmail], $forUpdateUser);
// } elseif(!empty($upEmpType)) {//esleif userupdate
//     $db->update('users', ['empType' => $upEmpType], $forUpdateUser);
// } elseif(!empty($upAuthLevel)) {//esleif userupdate
//     $db->update('users', ['authLevel' => $upAuthLevel], $forUpdateUser);
// }

if($forUpdateUser) {
    $data = [
        'password' => $upPassword,
        'firstName' => $upFirst,
        'lastName' => $upLast,
        'phoneNumber' => $upPhone,
        'address' => $upAddress,
        'email' => $upEmail,
        'empType' => $upEmpType,
        'authLevel' => $upAuthLevel
    ];
    $db->update('users', $data, $forUpdateUser);
}
//switch between actions
switch ($action) {
    case "addUserSupv" :
        include('view/addUserSupv.php');
        break;
    case "updateUserSupv" :
        $userUp = updateProfile($db, $userUpdate);
        include('view/updateUserSupv.php');
        break;
    case "userProfileSupv" :
        $user = displayProfile($db, $UserID);
        include('view/profileSpv.php');
        break;
    case "timeOffSupv" :
        include('view/timeOffSpv.php');
        break;
    case "availSupv" :
        include('view/availabilitySpv.php');
        break;
    case "scheduleSupv" :
        include('view/scheduleSpv.php');
        break;
    default:
        $users = $db->queryAll('users');
        include('/xampp/htdocs/TeamTracker/supv/view/userSupv.php');
}
