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

	// job description pdf uploads
	if(!empty($_FILES['filetoupload']["name"])) {
		@$file_name = $company.'_'.$position.'.'.end(explode(".", $_FILES["filetoupload"]["name"] ));

		$target_dir = "jobdescription/";
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
			echo $message. 'Go Back and Try Again!';
// if everything is ok, try to upload file
		}
		else {
			if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {

				$sql = "INSERT INTO jobs (company, position, location, work, start, duration, stipend, applyby, description, descriptionPdf, eligibility, time) 
				VALUES ('$company', '$position', '$location', '$work', '$start', '$duration', '$stipend', '$applyBy', '$description', '$target_file', '$eligibility', '$time')";
				if ($conn->query($sql) === TRUE) {
					$conn->close();
					$_SESSION['posted'] = 1;
					header("location: index.php");
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			else
				echo "Sorry, there is an some problem in posting the job. Go Back and Try Again!";
		}
	}

	else {
		$sql = "INSERT INTO jobs (company, position, location, work, start, duration, stipend, applyby, description, descriptionPdf, eligibility, time) 
				VALUES ('$company', '$position', '$location', '$work', '$start', '$duration', '$stipend', '$applyBy', '$description', '', '$eligibility', '$time')";
				if ($conn->query($sql) === TRUE) {
					$conn->close();
					$_SESSION['posted'] = 1;
					header("location: index.php");
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

	}
}
$conn->close();

?>