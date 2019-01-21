<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$id = $_REQUEST['id'];
$query = "SELECT * FROM jobs where id = '".$id."'";
if( $query_run = mysqli_query($conn, $query) ){
	$job = mysqli_fetch_assoc($query_run);
  // print_r($jobs);
	echo '<div class="s12">
	<h6 style="font-weight: bold">Job Description:</h6>
	<p style="font-size: 100%; margin-top: 0">'.$job['description'].'</p>
	<h6 style="font-weight: bold">Who can apply?</h6>
	<p style="font-size: 100%; margin-top: 0">'.$job['eligibility'].'</p
	</div>
	<form action="applied.php" method="post">
	<div class="row" style="margin-bottom: -20px;" align="center">
	<button class="btn animated" type="submit" id="'.$job['id'].'" style="margin-left: 10px; margin-top: 5px;">Apply Now</button>
	</div>
	</form>';
}
?>