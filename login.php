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

$rollno = $_POST['rollno'];
$password = hash('sha256', $_POST['password']);
if(!empty($rollno) && !empty($password)) {
	$query = "SELECT * FROM students WHERE rollno = '".$rollno."' && password = '".$password."'";
	
	$num = mysqli_num_rows(mysqli_query($conn, $query));

	if($num > 0){
		$res = $conn->query($query)->fetch_assoc();
		// print_r($res);
		$_SESSION['email'] = $res["email"];
		echo "2";
	}
	else{
		echo "1";
	}
}
else{
	echo "0";
}
?>