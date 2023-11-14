<?php



	?>



<!DOCTYPE html>
<head>
    <title>updating</title>
</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
	

}
?>



<?php




$conn = new mysqli("localhost", "root", "", "admin3");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);


}





$sql5 = "SELECT blogheader, blogtext ,image FROM blog WHERE id = $id";

// Execute the query
$result = $conn->query($sql5);

// Check if a matching row is found
if ($result->num_rows > 0) {
	// Fetch the result as an associative array
	$row = $result->fetch_assoc();
	$header_value1= $row['blogheader'];
	$text_value1 = $row['blogtext'];
    $imagePath = $row["image"];

	// Now $header_value contains the header value and $text_value contains the text value where id is 6
} else {
	echo "No data found for the given ID.";
}









?>








<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

img {
    max-width: 100%;
    height: auto;
    margin-bottom: 15px;
    display: block;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

input[type="hidden"] {
    display: none;
}
</style>






<body>
<form method="post" action="updateform.php" enctype="multipart/form-data">
<label for="image">Image:</label>

<img src="<?php echo $imagePath; ?>" />
    <input type="file" id="image" name="image" accept="image/*" required>
    <br>
    <label for="text">Header</label>
    <input type="text" id="header" name="header"  value="<?php echo $header_value1; ?>" required>


    <br>
    <label for="text">Text</label>
    <input type="text" id="text" name="text" value="<?php echo $text_value1; ?>" required>
    <br>
    <input type="hidden" id="id" name="id"  value=<?php echo $id ?> required>
    <br>
    
    
    <input type="submit" value="Submit">
</form>
</body>



</html>
