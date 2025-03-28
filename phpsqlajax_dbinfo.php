<?php
$host = "localhost";
$user = "root";
$password = ""; // Default MySQL password for XAMPP
$dbname = "project";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);
// Check connection

if (mysqli_connect_error()) {
    die("Connection failed: " . $conn->connect_error);
}
?>
