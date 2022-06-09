<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "opiniones";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['user'];
$opinion = $_POST['opinion'];

$sql = "INSERT INTO MyGuests (email, opinion)
VALUES ('$email','$opinion')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>