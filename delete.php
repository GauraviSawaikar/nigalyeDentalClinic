<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];

    // Database connection
    $conn = new mysqli("localhost", "root", "", "admin3");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete data from the database
    $sql = "DELETE FROM blog WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully.";
    } else {
        echo "Error deleting data: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
