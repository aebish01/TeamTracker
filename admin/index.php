<?php
require_once('/xampp/htdocs/TeamTracker/model/User.php');
require_once('/xampp/htdocs/TeamTracker/model/database.php');
require('model/adminModel.php');
$user = new User();
$db = new Database();
$userID  = 1;
$delUser = filter_input(INPUT_POST, 'deleteUserID', FILTER_VALIDATE_INT);
$addFirstName = filter_input(INPUT_POST, 'addFName', FILTER_UNSAFE_RAW);
$addLastName = filter_input(INPUT_POST, 'addLName', FILTER_UNSAFE_RAW);
$addAddress = filter_input(INPUT_POST, 'addAddress', FILTER_UNSAFE_RAW);
$addPhoneNumber = filter_input(INPUT_POST, 'addPhone', FILTER_UNSAFE_RAW);
$addEmail = filter_input(INPUT_POST, 'addEmail', FILTER_UNSAFE_RAW);
$addEmpType = filter_input(INPUT_POST, 'addType', FILTER_UNSAFE_RAW);
$addAuthLvl = filter_input(INPUT_POST, 'addAuth', FILTER_UNSAFE_RAW);

if($addFirstName && $addLastName){
    $setUserName = $user->setUsername($addFirstName, $addLastName);
} 

$setPassword = "Pa55Word!";
$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if (!$action) {
        $action = 'listItems';
    }
}

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
} elseif($delUser) {
    $db->delete('users', $delUser);
}
// if (basename($_SERVER['PHP_SELF']) == 'user.php') {
//     $users = $db->queryAll('users');
//     include('/xampp/htdocs/TeamTracker/admin/view/user.php');
// } else {
//     $user = displayProfile($db, $userID);
//     include('/xampp/htdocs/TeamTracker/admin/view/profileAdm.php');
// }
switch ($action) {
    case "addUser" :
        include('view/addUser.php');
        break;
    default:
        $users = $db->queryAll('users');
        include('/xampp/htdocs/TeamTracker/admin/view/user.php');
}
?>

