<?php
session_start();
require 'connection.php';

$email = $_POST['email'];
$password = hash('sha256', $_POST['password']);
if(!empty($email) && !empty($password)) {
	$query = "SELECT * FROM companies WHERE email = '".$email."' && password = '".$password."'";
	
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
die();
?>