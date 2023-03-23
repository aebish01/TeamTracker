<?php 
//required files
require('model/database.php');
//database
$db = new Database();

//if user is in database ask for password or check password?
//if pasword is correct add user to USER class
//also open page per user auth page user/auth ie teamtracker/admin
//this way we can have a different controller per auth level

//if user username is in data base but password is wrong
//ask user to reset password
//get email from user
//check **if email is in user data base
//if in database then email user with temporary password
//if not in database no email will be sent
//set passwrod to tempory maybe data base

//else if user name and password are wrong
//advise employee to see supervisor



?>