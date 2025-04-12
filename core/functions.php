<?php

function connect_db()
{
    include("config.php");
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function users()
{
    $sql = "SELECT * FROM users";
    $result = connect_db()->query($sql);
    return $result;
}
