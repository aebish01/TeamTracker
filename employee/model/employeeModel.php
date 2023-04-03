<?php

if (!function_exists('displayProfile')) {
    function displayProfile($db, $userID){
        $result = $db->query('SELECT * FROM users WHERE userId = ?', array($userID));
        $user = $result->fetch();
        return $user;
    }
}
function updateProfile($db, $userID){
    $result = $db->query('SELECT * FROM users WHERE userId = ?', array($userID));
    $user = $result->fetch();
    return $user;
}

//fix phone number 
//fix email
//fix auth level
//fix 
?>