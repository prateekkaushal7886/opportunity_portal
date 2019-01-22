<?php
session_start();
if(!isset($_SESSION['email'])){
	$_SESSION['login'] = 1;
	header("Location:index.php");
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query="SELECT * FROM jobs order by time desc";
if( $query_run = mysqli_query($conn, $query) ){
  $jobs = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
  // print_r($jobs);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style1.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/animate.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
	<div class="fixed-action-btn" style="bottom: 25px; right: 25px;" id="power">
		<a class="btn-floating btn-large tooltipped" data-position="top" data-delay="50" data-tooltip="Logout" id="logout" >
			<i class="large material-icons" style="font-size: 30px">power_settings_new</i>
		</a>
	</div>
	<div class="container">
		<p class="menuheading animated">Job offers for you</p>
		<?php 
		for ($i=0; $i < sizeof($jobs); $i++) { 
			echo '<div class="row" style="margin-bottom: 0px;">
			<div class="col s10 offset-s1">
			<div class="card hoverable">
			<div class="card-content">
			<span class="menuheading animated" style="font-size: 18px; padding-left: 7px">'.$jobs[$i]['company'].'</span>
			<div class="row" style="margin-bottom: 0px;">
			<div class="col s12"><h6><span style="font-weight: bold; padding-left: 7px">Location: </span>'.$jobs[$i]['location'].'</h6>
			<table class="responsive-table" style="line-height: 0; padding-left: 0px;">
			<thead>
			<tr>
			<th>Start Date</th>
			<th>Duration</th>
			<th>Stipend</th>
			<th>Posted on</th>
			<th>Apply By</th>
			</tr>
			</thead>

			<tbody>
			<tr>
			<td>'.date("d-m-y", strtotime($jobs[$i]['start'])).'</td>
			<td>'.$jobs[$i]['duration'].' month</td>
			<td>'.$jobs[$i]['stipend'].'</td>
			<td>'.date("d-m-y", strtotime($jobs[$i]['time'])).'</td>
			<td>'.$jobs[$i]['applyby'].'</td>
			</tr>
			</tbody>
			</table>
			<h6 style="font-weight: bold; padding-left: 3px">Job Description:</h6>
			<p style="font-size: 100%; margin-top: 0;  padding-left: 5px">'.$jobs[$i]['description'].'</p>
			</div>
			</div>
			<div class="row" style="margin-bottom: 0;">
			<a class="btn modal-trigger animated apply_btn" href="#modal" id="'.$jobs[$i]['id'].'" style="margin-left: 10px; margin-top: 5px;">Apply Now</a>
			</div>
			</div>
			</div>
			</div>
			</div>';
		}
		?>
		
	</div>
</body>
<!-- Modal -->
<div id="modal" class="modal">
	<span style="float: right; cursor: pointer;"><i class="material-icons modal-action modal-close" style="font-size: 30px; margin-right: 5px;">&times</i></span>
	<div class="modal-content">
		<h4 class="menuheading animated">Apply</h4>
		<div class="row" id="job_data">
			
			


		</div>
	</div>
</div>

</html>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<!-- <script src="js/materialize.min.js"></script> -->
<script src="js/init.js"></script>
<script>
	$("#logout").click(function(){
		swal ({ 
			title: "Are you sure, want to logout?",
			icon: "warning",
			buttons: {
				cancel: "No",
				confirm: "Yes",
			},
			dangerMode: true,
		}).then((value) => {
			if(value){
				window.location = "logout.php";
			}
		});
	});
	$(document).ready(function() {
		$('.modal-trigger').leanModal();
  });
 </script>
 <script type="text/javascript">
 	$(document).ready(function() {
 		$('.apply_btn').click(function() {
 			var id = $(this).attr('id');
 			$.ajax({
 				type: 'post',
 				url: 'getdata.php',
 				data: {'id': id},
 				success: function (response) {
 					document.getElementById('job_data').innerHTML = response;
 				}
 			});
 		});
 	});
 </script>