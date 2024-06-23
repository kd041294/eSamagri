<?php
session_start();
include 'sql_queries/common_quries.php';
include 'important_functions.php';

$name = $_POST['fName'];
$num = $_POST['mNumber'];
$email = $_POST['email'];

$userInfo = create_user($name, $num, $email);

//1 = for user saved
//0 = for user saving error
if( $userInfo == 0 ){
    echo "0";
}else{
    echo "1";
}