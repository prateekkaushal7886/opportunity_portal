<?php 
session_start();
require 'connection.php';
if(isset($_POST['submit2'])){
	$company = $_POST['company'];
	$position = $_POST['pos'];
	$location = $_POST['location'];
	$work = $_POST['work'];
	$start = $_POST['start'];
	$duration = $_POST['duration'];
	$stipend = $_POST['stipend'];
	$applyBy = $_POST['applyby'];
	$description = $_POST['description'];
	$eligibility = $_POST['eligibility'];
	date_default_timezone_set('Asia/Kolkata');
	$time=date("Y-m-d H:i:s"); 

	$sql = "INSERT INTO jobs (company, position, location, work, start, duration, stipend, applyby, description, eligibility, time) 
	VALUES ('$company', '$position', '$location', '$work', '$start', '$duration', '$stipend', '$applyBy', '$description', '$eligibility', '$time')";
	
}
if ($conn->query($sql) === TRUE) {
	header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>