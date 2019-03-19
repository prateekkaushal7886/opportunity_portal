<?php
session_start();
if(!isset($_SESSION['email'])){
	$_SESSION['login'] = 1;
	header("Location:index.php");
}
?>

<?php
require 'connection.php';
$id = $_GET['id'];
$query="SELECT companyname FROM companies WHERE email = '".$_SESSION['email']."'";
if( $query_run = mysqli_query($conn, $query) ){
	$x = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
	$company = $x[0]['companyname'];
}
$query="SELECT id FROM jobs WHERE company = '".$company."'";
if( $query_run = mysqli_query($conn, $query) ){
	$job_ids = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
    //print_r($job_ids);
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
	<div class="navbar-fixed">
		<nav class="white" role="navigation">
			<div class="nav-wrapper">
				<a href="http://www.sac.iitkgp.ac.in/" class="brand-logo left"style="padding-left: 10px; padding-top: 5px;"><img src="img/logo.png" width="160px"></a>
				<ul class="right hide-on-med-and-down">
					<li><a class="waves-effect waves-light item animated" href="companyindex.php">Home</a></li>
					<li><a class="waves-effect waves-light item animated" href="#contact">Contact</a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="companyindex.php">HOME</a></li>
					<li><a class="waves-effect waves-light"href="#contact">CONTACT</a></li>

				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse" style="float: right;"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>
	<div class="container">
		<p class="menuheading animated">Here are the Responses for Jobs posted</p>
		
		<?php 
		
		$q="SELECT * FROM jobapplied WHERE job_id = '".$id."'";
		if( $query_run = mysqli_query($conn, $q) ){
			$resp = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

			if($resp){
				echo '<table class="striped responsive-table">
				<thead>
				<tr>
				<th>Name</th>
				<th>Department</th>
				<th>LinkedIn</th>
				<th>Resume</th>
				</tr>
				</thead>

				<tbody>';
				foreach ($resp as $student) {

					$q = "SELECT * FROM students WHERE rollno = '".$student['rollno']."'";
					if( $query_run = mysqli_query($conn, $q) ){
						$studentd = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

						echo '
						<tr>
						<td>'.$studentd[0]['firstname']." ".$studentd[0]['lastname'].'</td>
						<td>'.$studentd[0]['department'].'</td>
						<td>'.$studentd[0]['linkedin'].'</td>
						<td><a href="'.$student['cv'].'" target ="_blank">Click to see</a></td>
						</tr>';								
					}
				}
			}

		}
		echo '
		</tbody>
		</table>';
			// }
		?>
		<hr />
	</div>

	<div id="contact" class="scrollspy">
		<?php include('footer.php'); ?>
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