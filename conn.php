<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "meraki_pos");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
