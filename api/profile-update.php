<?php
session_start();
include 'important-functions.php';
if(isset($_FILES['profileImage']) && isset($_FILES['aadharImage'])) {
    //For profile image
    $profileFile = $_FILES['profileImage'];
    $profileFileName = $profileFile['name'];
    $profileFileTmpName = $profileFile['tmp_name'];
    $profileFileSize = $profileFile['size'];
    $profileFileError = $profileFile['error'];
    $profileImageType = $profileFile['type'];


    //For aadhar image
    $aadharFile = $_FILES['aadharImage'];
    $aadharFileName = $profileFile['name'];
    $aadharFileTmpName = $profileFile['tmp_name'];
    $aadharFileSize = $profileFile['size'];
    $aadharFileError = $profileFile['error'];
    $aadharImageType = $profileFile['type'];


    $aNumber = $_POST["aadharNumber"];
    // Read file contents
    $profileImageContent = file_get_contents($profileFileTmpName);
    $aadharImageContent = file_get_contents($aadharFileTmpName);


    // Check for errors
    if($profileFileError === 0 && $aadharFileError === 0) {
        $id = $_SESSION["USER"]["ID"];
        $result = update_user_profile($id, $profileImageContent, $profileImageType, $aadharImageContent, $aadharImageType, $aNumber);
        if($result === 1) {
            echo "Image uploaded successfully!";
        } 
        else {
            echo "Error uploading image: ";
        }
    } else {
        echo "Error: " . $profileFileError;
    }
} else {
    echo "No image file uploaded!";
}
?>
