<?php
session_start();
$verify = verifyUser($_GET['user']);

if(!$verify)
{
    //user does not exist or you dont have permission to view their profile
    //navigate away from profile.php
    $_SESSION['errorMsg'] = "Either you do not have permission to access this profile or this profile does not exist";
    header("location: home.php"); // where you can display the error message
    exit(); //stop the rest of your page from executing
}

//user verified
// rest of your profile code here

?>
