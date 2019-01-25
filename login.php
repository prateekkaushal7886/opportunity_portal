<?php
session_start();
require 'connection.php';

$rollno = $_POST['rollno'];
$password = hash('sha256', $_POST['password']);
if(!empty($rollno) && !empty($password)) {
	$query = "SELECT * FROM students WHERE rollno = '".$rollno."' && password = '".$password."'";
	
	$num = mysqli_num_rows(mysqli_query($conn, $query));

	if($num > 0){
		$res = $conn->query($query)->fetch_assoc();
		// print_r($res);
		$_SESSION['email'] = $res["email"];
		$_SESSION['rollno'] = $res['rollno'];
		echo "2";
	}
	else{
		echo "1";
	}
}
else{
	echo "0";
}
die();
?>