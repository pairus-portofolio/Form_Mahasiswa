<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "#2database";

// Create connection
$db = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    echo "Connection failed: " .
    die("error!");
}

?>