<?php
// Check if the form is submitted
$id = $_POST["id"];

$conn = new mysqli("localhost", "root", "", "admin3");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $header = $_POST["header"];
    $text = $_POST["text"];

    // Image upload handling
    $uploadDirectory = "uploads/";
    $image = $_FILES["image"]["name"];
    $imageTemp = $_FILES["image"]["tmp_name"];
    $uploadedImagePath = $uploadDirectory . $image;

    if (move_uploaded_file($imageTemp, $uploadedImagePath)) {
        // Update data in the database
        $sql = "UPDATE blog SET image='$uploadedImagePath', blogheader='$header', blogtext='$text' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            // Data updated successfully, now redirect to the main page
            header("Location: blogAdmin.php");
            exit; // Make sure to exit after redirection
        } else {
            echo "Error updating data: " . $conn->error;
        }
    } else {
        echo "Image upload failed.";
    }
}

$conn->close();
?>
