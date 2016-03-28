<?php
$servername = "us-cdbr-azure-central-a.cloudapp.net";
$username = "ba814e0f8544f5";
$password = "69f5696a";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>