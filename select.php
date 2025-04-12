<?php

include("core/functions.php");

$sql = "SELECT id, first_name, last_name FROM users";
$result = connect_db()->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  connect_db()->close();