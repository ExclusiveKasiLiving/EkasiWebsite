<?php
// Database configuration
$hostname = 'adhemar.aserv.co.za';
$username = 'ekasiloz_iggie';
$password = 'kopenikus';
$database = 'ekasiloz_developers';

// Create a database connection
$connection = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($connection->connect_errno) {
    die('Connection failed: ' . $connection->connect_error);
} else {
    // echo 'Connected to the database successfully!';
}

// Assign the connection object to $con
$con = $connection;

// Close the connection (optional, since it's closed automatically at the end of the script execution)
//$connection->close();
?>
