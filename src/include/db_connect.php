<?php
// Connect to the database server
$servername = "db"; // use service name, not localhost
$username = "app_user"; // FIXED typo here
$password = "app_pass"; // also fixed this, assuming you meant app_pass
$dbname = "app_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
