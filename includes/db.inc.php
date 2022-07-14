<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsysphp";

// MYSQLI
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected!!!";
// mysqli_close($conn);
