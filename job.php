<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myimprint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit2'])){
	$company = $_POST['company'];
	$position = $_POST['pos'];
	$location = $_POST['location'];
	$start = $_POST['start'];
	$duration = $_POST['duration'];
	$stipend = $_POST['stipend'];
	$description = $_POST['description'];
	date_default_timezone_set('Asia/Kolkata');
	$time=date("Y-m-d H:i:s"); 

	$sql = "INSERT INTO jobs (company, position, location, start, duration, stipend, description, time) 
	VALUES ('$company', '$position', '$location', '$start', '$duration', '$stipend', '$description', '$time')";
	
}
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>