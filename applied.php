<?php
session_start();
require 'connection.php';

if(isset($_POST['submit'])) {
	$why = $_POST['why'];
	$job_id = $_POST['id'];
	date_default_timezone_set('Asia/Kolkata');
	$time = date("Y-m-d H:i:s"); 
	$rollno =  $_SESSION['rollno'];
	$query = "SELECT * FROM jobapplied where job_id = '".$job_id."' && rollno = '".$rollno."'";
	$query_run = mysqli_query($conn, $query);
	$data = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

	// cv uploads
	$query1 = "SELECT * FROM students WHERE email='".$_SESSION["email"]."'";
	if( $query_run1 = mysqli_query($conn, $query1) ){
		$row = mysqli_fetch_assoc($query_run1);
		$fname = $row['firstname'];
		$lname = $row['lastname'];
		$rollno = $row['rollno'];
	}

	@$file_name = $rollno.'_'.$fname.$lname.'_CV'.'.'.end(explode(".", $_FILES["filetoupload"]["name"] ));

	$target_dir = "uploadCV/";
	$target_file = $target_dir . basename($file_name);
	$uploadOk = 1;
	$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
// Check if image file is a actual image or fake image
  @$check = filesize($_FILES["filetoupload"]["tmp_name"]);
  if($check !== false) {
    $message =  "File is an pdf - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $message =  "File is not an pdf.";
    $uploadOk = 0;
  }
// Check file size
	if ($_FILES["filetoupload"]["size"] > 510000) {
		$message1 =  "Your pdf is too large, must be less than 500 Kb";
		echo $message1;
		$uploadOk = 0;
	}
// Allow certain file formats
	if($FileType != "pdf") {
		$message1 =  "Only PDf files are allowed.";
		echo $message1;
		$uploadOk = 0;
	}
// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$message =  "Sorry, your pdf was not uploaded.";
		echo $message;
// if everything is ok, try to upload file
	}
	else {
		if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {

			if(sizeof($data) == 0) {
				$job = "INSERT INTO jobapplied (job_id, rollno, why, cv, time)
				VALUES ('$job_id', '$rollno', '$why', '$target_file', '$time')";
				if ($conn->query($job) === TRUE) {
					$conn->close();
					header("location: home.php");
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			else {
				echo "Already applied!";
			}
		}
		else
			echo "Sorry, there is an some problem in uploading you CV!";
	}
}

?>