<?php
session_start();
if(!isset($_SESSION['email'])){
	$_SESSION['login'] = 1;
	header("Location:index.php");
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
	hello
	<?php echo $_SESSION['email']; ?>
	<div class="fixed-action-btn" style="bottom: 25px; right: 25px;" id="power">
		<a class="btn-floating btn-large tooltipped" data-position="top" data-delay="50" data-tooltip="Logout" id="logout" >
			<i class="large material-icons" style="font-size: 30px">power_settings_new</i>
		</a>
	</div>
	<div class="container">
		<div class="row">
			<div class="col s10 offset-s1">
				<div class="card hoverable">
					<div class="card-content">
						<span class="menuheading animated" style="font-size: 18px;">Special Thanks to</span>
						<div class="row" style="margin-bottom: 0px;">
							<div class="col s12"><h6 style="font-weight: bold">Location: </h6>
								<table class="responsive-table" style="line-height: 0;">
									<thead>
										<tr>
											<th>Start Date</th>
											<th>Duration</th>
											<th>Stipend</th>
											<th>Posted on</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>Alvin</td>
											<td>Eclair</td>
											<td>$0.87</td>
											<td>rfd</td>
										</tr>
									</tbody>
								</table>
								<h6 style="font-weight: bold">Job Description:</h6>
								<p style="font-size: 100%; margin-top: 0">70% of Class of 2014 voted for the gift in various categories and close to 350 students contributed their caution money.<br>
       Class of 2014 voted to support International Participation of students.</p>
							</div>
						</div>
						<div class="row" style="margin-bottom: 0;">
							<a class="btn modal-trigger animated" href="#modal" style="margin-left: 10px; margin-top: 5px;">Apply Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
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
// </script>