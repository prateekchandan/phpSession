<?php

$servername = "localhost";
$username = "guest";
$password = "password";
$dbname = "phpsession";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "<!-- Database success -->";
} 














