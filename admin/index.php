<?php
session_start();
if (!isset($_SESSION['userID'])) {
    header("Location: http://localhost/TeamTracker/view/login.php");
    exit();
}
$userID  = $_SESSION["userID"];
//other files
require_once('/xampp/htdocs/TeamTracker/model/User.php');
require_once('/xampp/htdocs/TeamTracker/model/database.php');
require('model/adminModel.php');
//objects
$user = new User();
$db = new Database();
// profile

//for delete
$delUser = filter_input(INPUT_POST, 'deleteUserID', FILTER_VALIDATE_INT);
//for add
//$addFirstName = filter_input(INPUT_POST, 'addFName', FILTER_UNSAFE_RAW);
if(isset($_POST['addFName']) && isset($_POST['addLName']) && isset($_POST['addPhone']) && isset($_POST['addEmail'])) {
    $addFirstName = $_POST['addFName'];
    $addLastName = $_POST['addLName'];
    $addPhoneNumber = $_POST['addPhone'];
    $addEmail = $_POST['addEmail'];
    $addAddress = filter_input(INPUT_POST, 'addAddress', FILTER_UNSAFE_RAW);
    $addEmpType = filter_input(INPUT_POST, 'addType', FILTER_UNSAFE_RAW);
    $addAuthLvl = filter_input(INPUT_POST, 'addAuth', FILTER_UNSAFE_RAW);
    $setUserName = '';
    if($addFirstName && $addLastName){
        $setUserName = $user->setUsername($addFirstName, $addLastName);
    }
    $setPassword = "Pa55Word!";

    // Validate that first name and last name only contain alphabetical characters
    if(!preg_match("/^[a-zA-Z]+$/", $addFirstName) || !preg_match("/^[a-zA-Z]+$/", $addLastName) || !preg_match("/^[0-9]{10}$/", $addPhoneNumber) || !preg_match('/\.(com|edu|org|net)$/i', $addEmail)) {
      // If validation fails, show an error message and exit
      echo "The information you entered is not correct";
      exit;
    } //elseif ($setUserName && $setPassword && $addFirstName && $addLastName && $addAddress && $addPhoneNumber && $addEmail && $addEmpType && $addAuthLvl){
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
    // rest of the code for adding first name and last name to database

  }
    

//$addLastName = filter_input(INPUT_POST, 'addLName', FILTER_UNSAFE_RAW);
//$addAddress = filter_input(INPUT_POST, 'addAddress', FILTER_UNSAFE_RAW);
//$addPhoneNumber = filter_input(INPUT_POST, 'addPhone', FILTER_UNSAFE_RAW);
//$addEmail = filter_input(INPUT_POST, 'addEmail', FILTER_UNSAFE_RAW);
//$addEmpType = filter_input(INPUT_POST, 'addType', FILTER_UNSAFE_RAW);
//$addAuthLvl = filter_input(INPUT_POST, 'addAuth', FILTER_UNSAFE_RAW);
//$setUserName = '';
//set



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
//if ($setUserName && $setPassword && $addFirstName && $addLastName && $addAddress && $addPhoneNumber && $addEmail && $addEmpType && $addAuthLvl){
  //  $db->insert('users',[
    //    'userName' => $setUserName,
    //    'password' => $setPassword,
   //     'firstName' => $addFirstName,
   //     'lastName' => $addLastName,
   //     'address' => $addAddress,
   //     'phoneNumber' => $addPhoneNumber,
   //     'email' => $addEmail,
   //     'empType' => $addEmpType,
   //     'authLevel' => $addAuthLvl
   // ] );

if($delUser) {//else if deleteuser
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
    case "addUserAdmin" :
        include('view/addUserAdmin.php');
        break;
    case "updateUserAdmin" :
        $userUp = updateProfile($db, $userUpdate);
        include('view/updateUserAdmin.php');
        break;
    case "userProfileAdmin" :
        $user = displayProfile($db, $userID);
        include('view/profileAdm.php');
        break;
    case "timeOffAdmin" :
        include('view/timeOffAdm.php');
        break;
    case "availAdmin" :
        include('view/availabilityAdm.php');
        break;
    case "scheduleAdmin" :
        $user = displayProfile($db, $userID);
        $users = $db->queryAll('users');
        include('view/scheduleAdm.php');
        break;
    default:
        $users = $db->queryAll('users');
        include('/xampp/htdocs/TeamTracker/admin/view/userAdmin.php');
}

// if (basename($_SERVER['PHP_SELF']) == 'user.php') {
//     $users = $db->queryAll('users');
//     include('/xampp/htdocs/TeamTracker/admin/view/user.php');
// } else {
//     $user = displayProfile($db, $userID);
//     include('/xampp/htdocs/TeamTracker/admin/view/profileAdm.php');
// }
