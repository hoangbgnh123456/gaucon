<?php

$servername = "3.140.182.114";
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
