# opportunity_portal
Portal for job offers.

add connection.php
<?php

$servername = "server_name";
$username = "username";
$password = "";
$dbname = "your database name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>