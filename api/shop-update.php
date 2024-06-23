<?php
session_start();
include 'important-functions.php';
if(isset($_FILES['shopImage'])) {
    //For profile image
    $shopImageFile = $_FILES['shopImage'];
    $shopImageName = $shopImageFile['name'];
    $shopImageTmpName = $shopImageFile['tmp_name'];
    $shopImageSize = $shopImageFile['size'];
    $shopImageError = $shopImageFile['error'];
    $shopImageType = $shopImageFile['type'];

    $shopName = $_POST["shopName"];
    $shopAddress = $_POST["shopAddress"];
    $shopPincode = $_POST["pincode"];
    $shopCity = $_POST["city"];
    $shopState = $_POST["state"];
    $shopCountry = $_POST["country"];

    // Read file contents
    $shopImageContent = file_get_contents($shopImageTmpName);

    // Check for errors
    if( $shopImageError === 0) {
        $userId = $_SESSION["USER"]["ID"];
        $userName = $_SESSION["USER"]["USER_ID"];
        $result = update_user_shop($userId, $userName, $shopName, $shopImageContent, $shopImageName, $shopImageType, $shopAddress, $shopPincode, $shopCity, $shopState, $shopCountry);
        if($result === 1) {
            echo json_encode(array('status' => '1'));
        } 
        else {
            echo json_encode(array('status' => $result));
        }
    } else {
        echo json_encode(array('status' => '-1'));
    }
} else {
    echo json_encode(array('status' => '-2'));
}
