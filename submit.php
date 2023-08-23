<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbz";

$sub_item=$_POST['options'];
$desc=$_POST['description'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO complaints_2 (subitem,description) VALUES ('$sub_item','$desc')";

if ($conn->query($sql) === TRUE) {
    echo "Update Successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
