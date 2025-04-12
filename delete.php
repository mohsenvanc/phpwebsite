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

$sql = "DELETE FROM users WHERE id=4";

if ($conn->query($sql) === TRUE) {
  echo "delete created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

