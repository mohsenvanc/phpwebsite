<?php

// connect to database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqltutorial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username,first_name, last_name,phone_number, email, gender, age)
VALUES ('" . $_POST["username"] . "', '" . $_POST["first_name"] . "', '" . $_POST["last_name"] . "','" . $_POST["phone_number"] . "', '" . $_POST["email"] . "', '" . $_POST["gender"] . "', '" . $_POST["age"] . "')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "<p>User Inserted Successfully !</p>";
echo '<p><a href="index.php">Back</a></p>';
