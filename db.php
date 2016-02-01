<?php

$servername = "localhost";
$username = "guest";
$password = "password";
$dbname = "phpsession";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	echo "<!-- Database success -->";
} 














