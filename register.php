<?php
session_start();
require 'connection.php';
if(isset($_POST['submit1'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$rollno = $_POST['rollno'];
	$email = $_POST['email'];
	$password = hash('sha256', $_POST['confirm_password']);
	date_default_timezone_set('Asia/Kolkata');
	$time=date("Y-m-d H:i:s"); 
	$query = "SELECT * FROM students where rollno = '".$rollno."' OR email = '".$email."'";
	$query_run = mysqli_query($conn, $query);
	$data = mysqli_fetch_all($query_run, MYSQLI_ASSOC);	
	// print_r(count($data));
	if(count($data) == 0) {
		$sql = "INSERT INTO students (email, firstname, lastname, rollno, password, time) 
		VALUES ('$email', '$firstname', '$lastname', '$rollno', '$password', '$time')";
		$_SESSION['email'] = $email;
		$_SESSION['rollno'] = $rollno;
		if ($conn->query($sql) === TRUE) {
			header("location: home.php");
			
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
if(isset($_POST['update'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$rollno = $_POST['rollno'];
	$email = $_POST['email'];
	$linkedin = $_POST['linkedin'];
	$joinYear = $_POST['joinYear'];
	$graduatingYear = $_POST['graduatingYear'];
	$cg = $_POST['cgpa'];
	$dept = $_POST['department'];
	$degree = $_POST['degree'];
	$skills = $_POST['skills'];
	$user = "SELECT * FROM students WHERE rollno = '".$_SESSION['rollno']."'";
	if( $query_run2 = mysqli_query($conn, $user) ){
		$row = mysqli_fetch_row($query_run2);
	}
	$skills = $row[11].','.$skills;
	$query = "UPDATE `students`
	SET firstname = '$firstname', lastname = '$lastname', rollno = '$rollno', email = '$email', linkedin = '$linkedin',
	joinYear = '$joinYear', graduatingYear = '$graduatingYear', cgpa = '$cg', department = '$dept', degree = '$degree', 
	skills = '$skills'
	WHERE rollno = ".$_SESSION['rollno']."
	";

	if ($conn->query($query) === TRUE) {
		header("location: home.php");

	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>