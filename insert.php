<?php

include("core/functions.php");

$sql = "INSERT INTO users (username,first_name, last_name,phone_number, email, gender, age)
VALUES ('" . $_POST["username"] . "', '" . $_POST["first_name"] . "', '" . $_POST["last_name"] . "','" . $_POST["phone_number"] . "', '" . $_POST["email"] . "', '" . $_POST["gender"] . "', '" . $_POST["age"] . "')";


if (connect_db()->query($sql) === TRUE) {
  echo "New record created successfully";
  echo '<p><a href="index.php">Back</a></p>';
} else {
  echo "Error: " . $sql . "<br>" . connect_db()->error;
  echo '<p><a href="index.php">Back</a></p>';
}

connect_db()->close();

echo "<p>User Inserted Successfully !</p>";
echo '<p><a href="index.php">Back</a></p>';
