<?php
//start session 
session_start();
if (!isset($_SESSION['userID'])) {
    header("Location: http://localhost/TeamTracker/view/login.php");
    exit();
}
$userID  = $_SESSION["userID"];
//required files
require_once('/xampp/htdocs/TeamTracker/model/error.php');
require_once('/xampp/htdocs/TeamTracker/model/User.php');
require_once('/xampp/htdocs/TeamTracker/model/database.php');
require('model/adminModel.php');

//objects
$error = new PopupError();
$user = new User();
$db = new Database();

//for delete
//-----------------------------------------------------------------------------
$delUser = filter_input(INPUT_POST, 'deleteUserID', FILTER_VALIDATE_INT);

if($delUser) {//else if deleteuser
    $db->delete('users', $delUser);
}

//for add
//---------------------------------------------------------------------------
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
    $error = "You entered information incorrectly.";

    // Validate that first name and last name only contain alphabetical characters
    while(true) {
        try {
        
          if(!preg_match("/^[a-zA-Z]+$/", $addFirstName)) {
            throw new Exception("Invalid first name. Only letters are allowed.");
          }
        
          if(!preg_match("/^[a-zA-Z]+$/", $addLastName)) {
            throw new Exception("Invalid last name. Only letters are allowed.");
          }
        
          if(!preg_match("/^[0-9]{10}$/", $addPhoneNumber)) {
            throw new Exception("Invalid phone number. Please enter a 10-digit number.");
          }
        
          if(!preg_match('/\.(com|edu|org|net)$/i', $addEmail)) {
            throw new Exception("Invalid email address. Please enter a valid email address.");
          }
        
          // If validation passes, insert the data into the database
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
          ]);
        
          // rest of the code for adding first name and last name to database
        
          break;
        } catch (Exception $e) {
          // If an exception is thrown, catch it and display an error message
            PopupError::display("An error has occurred: " . $e->getMessage());
            exit;
        }
      }
      
    }



//for update 
//----------------------------------------------------------------------
$userUpdate = filter_input(INPUT_POST, 'userIDUpdate', FILTER_VALIDATE_INT);

if(isset($_POST['updateFName']) && isset($_POST['updateFName']) && isset($_POST['updatePhone']) && isset($_POST['updateEmail'])) {
    $forUpdateUser = filter_input(INPUT_POST, 'userID4Update', FILTER_VALIDATE_INT);
    $upPassword = filter_input(INPUT_POST, 'updatePassword', FILTER_UNSAFE_RAW);
    $upFirst = filter_input(INPUT_POST, 'updateFName', FILTER_UNSAFE_RAW);
    $upLast = filter_input(INPUT_POST, 'updateLName', FILTER_UNSAFE_RAW);
    $upPhone = filter_input(INPUT_POST, 'updatePhone', FILTER_UNSAFE_RAW);
    $upAddress = filter_input(INPUT_POST, 'updateAddress', FILTER_UNSAFE_RAW);
    $upEmail = filter_input(INPUT_POST, 'updateEmail', FILTER_UNSAFE_RAW);
    $upEmpType = filter_input(INPUT_POST, 'updateType', FILTER_UNSAFE_RAW);
    $upAuthLevel = filter_input(INPUT_POST, 'updateAuth', FILTER_UNSAFE_RAW);
    $error = "You entered information incorrectly.";

    // Validate that first name and last name only contain alphabetical characters
    while(true) {
        try {
        
          if(!preg_match("/^[a-zA-Z]+$/", $upFirst)) {
            throw new Exception("Invalid first name. Only letters are allowed.");
          }
        
          if(!preg_match("/^[a-zA-Z]+$/", $upLast)) {
            throw new Exception("Invalid last name. Only letters are allowed.");
          }
        
          if(!preg_match("/^[0-9]{10}$/", $upPhone)) {
            throw new Exception("Invalid phone number. Please enter a 10-digit number.");
          }
        
          if(!preg_match('/\.(com|edu|org|net)$/i', $upEmail)) {
            throw new Exception("Invalid email address. Please enter a valid email address.");
          }
        
          // If validation passes, insert the data into the database
          if ($forUpdateUser) {
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
        
          // rest of the code for adding first name and last name to database
        
          break;
        } catch (Exception $e) {
          // If an exception is thrown, catch it and display an error message
            PopupError::display("An error has occurred: " . $e->getMessage());
            exit;
        }
      }
      
    }

//-----------------------------------------------------------------------
//action 
$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if (!$action) {
        $action = 'listItems';
    }
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
        $sql = "SELECT * FROM assignments";
        $result = mysqli_query($db, $sql);
        include('view/scheduleAdm.php');
        break;
    default:
        $users = $db->queryAll('users');
        include('/xampp/htdocs/TeamTracker/admin/view/userAdmin.php');
}
