<?php
session_start();
require 'connection.php';
$id = $_POST['id'];
$user = "SELECT * FROM students WHERE rollno = '".$_SESSION['rollno']."'";
if( $query_run2 = mysqli_query($conn, $user) ){
	$row = mysqli_fetch_row($query_run2);
}
$skills = explode(",", $row[11]);
array_splice($skills, $id, 1);
$arr = $skills[0];
for ($i=1; $i < sizeof($skills); $i++) { 
	$arr .= ','.$skills[$i];
}
$query = "UPDATE `students`
SET skills = '$arr'
WHERE rollno = ".$_SESSION['rollno']."
";

if ($conn->query($query) === TRUE) {
	
}

$conn->close();

?>