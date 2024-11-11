<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "malcolm";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Sorry, we are experiencing technical difficulties. Please try again later.");
}

?>
