<?php
session_start();
include 'important-functions.php';

$number = $_POST["mobNumber"];
$otp = $_POST['otp'];
$message = "Hi,\nYour OTP for verification is ".$otp.".\nRegards,\nFastAndSafe";

$info = get_user($number);

if($info != 0){
    $msgSent = "SUCCESS";
    //$msgSent = send_message($number, $message);
    // if($msgSent === 'FAIL'){
    //     echo json_encode(array('status' => 'FAIL'));
    // }
    // else{
        $_SESSION["USER"]["ID"] = $info["ID"];
        $_SESSION["USER"]["USER_ID"] = $info["userID"];
        echo json_encode(array('status' => "SUCCESS"));
    // }
}
else{
    echo json_encode(array('status' => 'NA'));
}