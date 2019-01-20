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
if(isset($_POST['submit1'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$rollno = $_POST['rollno'];
	$email = $_POST['email'];
	$password = hash('sha256', $_POST['confirm_password']);
	date_default_timezone_set('Asia/Kolkata');
	$time=date("Y-m-d H:i:s"); 

	$sql = "INSERT INTO students (email, firstname, lastname, rollno, password, time) 
	VALUES ('$email', '$firstname', '$lastname', '$rollno', '$password', '$time')";
	$_SESSION['email'] = $email;
	
}
if ($conn->query($sql) === TRUE) {
    header('location: home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>