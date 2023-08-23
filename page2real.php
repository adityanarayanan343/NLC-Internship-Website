<!DOCTYPE html>
<html>
<head>
  <title>Item Complaint Form</title>
  <style>
    .container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

  </style>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbz";

$item = $_POST['item'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO complaints_1 (item) VALUES ('$item')";

if ($conn->query($sql) === TRUE) {
    echo "Update Successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<body>
  <div class="container">
    <h1>Item Complaint Form</h1>
    <form method="post" action="submit.php">
      <input type="radio" id="option" name="options" value="MainUnit">
      <label for="option">Main Unit</label>
      <input type="radio" id="option" name="options" value="LoadingUnit">
      <label for="option">Loading Unit</label>
      <t>Description</t>
      <textarea id="description" name="description" rows="4" required></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
