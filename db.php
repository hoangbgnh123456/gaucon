<?php

$servername = "34.200.32.20";
$username = "gaucon";
$password = "123@123a";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
