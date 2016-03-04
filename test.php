<?php
// Address , username , password , database
$conn = mysqli_connect("127.0.0.1","guest","password","phpsession") or die("Database Connection Error");

$email = "prateekchandan5545@gmail.com";
$password = "12345";
$name = "Prateek";
$photo_url = "";

$email = mysqli_real_escape_string($conn,$email);
$password = mysqli_real_escape_string($conn,$password);

$query = "INSERT into `user` values(
	'".$email."',
	'".$name."',
	'".$password."',
	'".$photo_url."'
	)";

$result = mysqli_query($conn,$query);
echo "Success";