<?php
$host = 'localhost';
$db_username = 'trust'; // Change this to your database username
$db_password = ''; // Change this to your database password if not empty
$db_name = 'trust'; // Change this to your database name

// Attempt to connect to MySQL database
$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
