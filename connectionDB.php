<?php
//Database credentials
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = 'alumnidb';

//Connect with the database
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName,3307);

//Display error if failed to connect
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
?>