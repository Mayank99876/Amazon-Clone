<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "login_db";
$port = "3308";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $db_name,$port);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
