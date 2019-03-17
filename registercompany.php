<?php
session_start();
require 'connection.php';
if(isset($_POST['submitc'])){
	$companyname = $_POST['companyname'];
	$location = $_POST['location'];	
	$email = $_POST['cemail'];
	$password = hash('sha256', $_POST['confirm_password']);
	date_default_timezone_set('Asia/Kolkata');
	$time=date("Y-m-d H:i:s"); 
	$query = "SELECT * FROM companies where email = '".$email."'";
	$query_run = mysqli_query($conn, $query);
	$data = mysqli_fetch_all($query_run, MYSQLI_ASSOC);	
	// print_r(count($data));
	if(count($data) == 0) {
		$sql = "INSERT INTO companies (companyname, location, email, password, time) 
		VALUES ('$companyname', '$location', '$email', '$password', '$time')";
		$_SESSION['email'] = $email;
		if ($conn->query($sql) === TRUE) {
			header("location: companyindex.php");
			
		} else {
			$_SESSION['registered'] = 2;
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	else {
		$_SESSION['registered'] = 1;
		header("location: index.php");
	}
	die();	
}
$conn->close();
?>