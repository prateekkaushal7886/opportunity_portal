<?php
session_start();
require 'connection.php';

$id = $_REQUEST['id'];
$query = "SELECT * FROM jobs where id = '".$id."'";
if( $query_run = mysqli_query($conn, $query) ){
	$job = mysqli_fetch_assoc($query_run);
	$q = "SELECT * FROM jobapplied WHERE job_id = '".$id."' AND rollno = '".$_SESSION['rollno']."'";
	if ( $run = mysqli_query($conn, $q)) {
		$row = mysqli_fetch_assoc($run);
	}
  // print_r($row);
	echo '<div class="s12">
	<h6 style="font-weight: bold">Job Description:</h6>
	<p style="font-size: 100%; margin-top: 0">'.$job['description'].'</p>
	<h6 style="font-weight: bold">Who can apply?</h6>
	<p style="font-size: 100%; margin-top: 0">'.$job['eligibility'].'</p
	</div>';
	if (empty($row)) {
		echo '<form action="applied.php" method="post" enctype="multipart/form-data">
		<div class="row">
		<div class="input-field col l6 s12" style="margin-left: -12px;">
		<input type="text" name="why" id="why" placeholder="Max. 140 characters ..." maxlength="140" required>
		<label for="why" class="active">Why do you want to apply?</label>
		<input type="hidden" name="id" value="'.$job['id'].'">
		</div>
		</div>
		<div class="row">
		<div class="file-field input-field col l6 s12" style="margin-left: -12px; margin-top:-15px;">
		<div class="btn">
		<span>Upload CV</span>
		<input type="file" name="filetoupload" id="fileToUpload" accept=".pdf">
		</div>
		<div class="file-path-wrapper">
		<input class="file-path validate" type="text" required="required">
		</div>
		</div>
		</div>
		<div class="row" style="margin-bottom: -20px;" align="center">
		<button class="btn animated" type="submit" name="submit" id="'.$job['id'].'" style="margin-left: 10px; margin-top: 5px;">Apply Now</button>
		</div>
		</form>'; 
	}
	else {
		echo '<form action="applied.php" method="post" enctype="multipart/form-data">
		<div class="row">
		<div class="input-field col l6 s12" style="margin-left: -12px;">
		<input type="text" name="why" id="why" value="'.$row['why'].'" placeholder="Max. 140 characters ..." maxlength="140" required>
		<label for="why" class="active">Why do you want to apply?</label>
		<input type="hidden" name="id" value="'.$job['id'].'">
		</div>
		</div>
		<div class="row">
		<div class="file-field input-field col l6 s12" style="margin-left: -12px; margin-top:-15px;">
		<div class="btn">
		<span>Upload CV</span>
		<input type="file" name="filetoupload" id="fileToUpload" accept=".pdf">
		</div>
		<div class="file-path-wrapper">
		<input class="file-path validate" type="text" required="required" value="'.$row['cv'].'">
		</div>
		</div>
		</div>
		<div class="row" style="margin-bottom: -20px;" align="center">
		<button class="btn animated" type="submit" name="submit" id="'.$job['id'].'" style="margin-left: 10px; margin-top: 5px;">Apply Now</button>
		</div>
		</form>'; 
	}
}
?>