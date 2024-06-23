<?php
session_start();
include 'important_functions.php';

$email = $_POST['email'];
$number = $_POST["number"];
$otp = $_POST['otp'];
$message = "Hi,\nYour OTP for verification is ".$otp.".\nRegards,\nFastAndSafe";
$info = get_validate_user($number);

//-1 = for already exists
//0 = for no user exists
//1 = for server error

if($info === -1){
    echo "-1";
} else if($info === 1){
    echo "0";
} else{
    echo "1";
}