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
VALUES ('K1', 'John', 'Doe','09135896325', 'john@example.com', 'male', '32')";

$sql = "UPDATE users SET last_name='Hasan' WHERE id=9";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

