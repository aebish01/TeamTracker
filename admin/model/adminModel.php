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
function phoneNumDisplay($phone) {
    sprintf("(%s)%s-%s",
    substr($phone, 0, 3),
    substr($phone, 3, 3),
    substr($phone, 6, 4)
);
}
//fix phone number 
//fix email
//fix auth level
//fix 
?>