<?php
session_start();
if(!isset($_SESSION['email'])){
	$_SESSION['login'] = 1;
	header("Location:index.php");
}
?>
<?php
require 'connection.php';
$query="SELECT * FROM jobs WHERE approval = '1' order by time desc";
if( $query_run = mysqli_query($conn, $query) ){
	$jobs = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
  // print_r($jobs);
}
$q="SELECT job_id FROM jobapplied WHERE rollno = '".$_SESSION['rollno']."'";
if( $query_run = mysqli_query($conn, $q) ){
	$job_ids = array();
	if ($query_run->num_rows > 0 ) {
		while($ids = $query_run->fetch_array())
			$job_ids[] = $ids['job_id'];
	}
}
$user = "SELECT firstname FROM students WHERE rollno = '".$_SESSION['rollno']."'";
if( $query_run2 = mysqli_query($conn, $user) ){
	while($row = mysqli_fetch_row($query_run2)){
		$name = $row[0];
	}
}
// print_r($job_ids);
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Home</title>
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
					<li><a class="waves-effect waves-light item animated" href="home.php">HOME</a></li>
					<li><a class="waves-effect waves-light item animated" href="appliedjobs.php">APPLIED JOBS</a></li>
					<li><a class="waves-effect waves-light item animated" href="#contact">CONTACT</a></li>
					<li><a class="waves-effect waves-light item animated" href="profile.php" style="text-transform: uppercase;"><?php echo $name; ?></a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a class="waves-effect waves-light item animated" href="profile.php" style="text-transform: uppercase;"><?php echo $name; ?></a></li><hr>
					<li><a href="home.php">HOME</a></li>
					<li><a href="appliedjobs.php">APPLIED JOBS</a></li>
					<li><a class="waves-effect waves-light"href="#contact">CONTACT</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse" style="float: right;"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>
	<div class="scrollspy" id="what">
		<p class="menuheading animated">What you can do here ?</p>
		<div class="container"><center>
			<p class="text">
				Here You can find the job offers offered by the companies.<br>
				If you want apply for any job which suits you, upload your Resume!<br>
				To see the jobs that you have applied for Click <a href="appliedjobs.php">HERE!</a>
			</p></center>
		</div>
	</div>
	<div class="container">
		<p class="menuheading animated">Job offers for you</p>
		<?php 
		if(sizeof($jobs) != 0) {
			for ($i=0; $i < sizeof($jobs); $i++) { 
				if(!in_array($jobs[$i]['id'], $job_ids)) { 
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
			}
		}
		else {
			echo '<div class="row" style="margin-bottom: 0px;">
			<div class="col s10 offset-s1">
			<div class="card hoverable">
			<div class="card-content">
			<center><p class="text">Sorry, No Jobs has been offered!</p></center>
			</div></div></div></div>
			';
		}
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