<?php

$servername = "172.31.19.218";
$username = "root";
$password = "password";
$database = "Hackathon";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
