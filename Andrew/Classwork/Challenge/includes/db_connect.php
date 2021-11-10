<?php
// Create connection
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "restaurant";

$dbConn = new mysqli($hostname, $username, $password, $db_name);

// Check dbConn
// if ($dbConn->connect_error) {
//     die("dbConn failed " . $dbConn->connect_error);
// } else {
//     echo "Successfully connected to " . $db_name;
// }