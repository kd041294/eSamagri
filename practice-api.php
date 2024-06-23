<?php
// Check if image file is uploaded
if(isset($_FILES['imageFile'])) {
    $file = $_FILES['imageFile'];

    // File properties
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Read file content
    $fileContent = file_get_contents($fileTmpName);

    // Check for errors
    if($fileError === 0) {
        // Connect to MySQL database
        $conn = new mysqli('127.0.0.1', 'root', '', 'practice');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $sql = "UPDATE images SET name = ?, content = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $id = 1;
        // Bind parameters
        $stmt->bind_param("sss", $fileName, $fileContent, $id);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "Image uploaded successfully!";
        } else {
            echo "Error uploading image: " . $conn->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Error: " . $fileError;
    }
} else {
    echo "No image file uploaded!";
}
?>
