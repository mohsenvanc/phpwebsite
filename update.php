<?php

include("core/functions.php");

$sql = "UPDATE users SET last_name='Hasan' WHERE id=2";

if (connect_db()->query($sql) === TRUE) {
  echo "Update created successfully";
} else {
  echo "Error: " . $sql . "<br>" . connect_db()->error;
}

connect_db()->close();