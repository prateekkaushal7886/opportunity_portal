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
	$applyBy = $_POST['applyby'];
	$description = $_POST['description'];
	$eligibility = $_POST['eligibility'];
	date_default_timezone_set('Asia/Kolkata');
	$time=date("Y-m-d H:i:s"); 

	$sql = "INSERT INTO jobs (company, position, location, start, duration, stipend, applyby, description, eligibility, time) 
	VALUES ('$company', '$position', '$location', '$start', '$duration', '$stipend', '$applyBy', '$description', '$eligibility', '$time')";
	
}
if ($conn->query($sql) === TRUE) {
	header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>