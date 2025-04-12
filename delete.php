<?php

include("core/functions.php");

$sql = "DELETE FROM users WHERE id=4";

if (connect_db()->query($sql) === TRUE) {
  echo "delete created successfully";
} else {
  echo "Error: " . $sql . "<br>" . connect_db()->error;
}

connect_db()->close();

