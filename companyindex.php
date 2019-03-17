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
					<li><a class="waves-effect waves-light item animated" href="">Responses</a></li>
					<li><a class="waves-effect waves-light item animated" href="#contact">Contact</a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="companyindex.php">HOME</a></li>
					<li><a class="waves-effect waves-light"href="#contact">CONTACT</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>
	<div class="scrollspy" id="what">
		<p class="menuheading animated">What you can do here ?</p>
	</div>
	 <div class="scrollspy" id="classgift">
            <p class="menuheading animated"></p>
            <div class="container">
                <div class="row">
                    <div class="col l6 m6 s12">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="img/classgift.jpg">
                            </div>
                            <div class="card-content" style="height: 317px">
                                <span class="card-title">POST A JOB</span>
                                <p class="text" style="font-size: 100%; padding-bottom: 12px;">Alumni of IIT Kharagpur can now offer freelancing jobs to the alma mater.
                                </p>
                                <div class="row" align="center">
                                    <a class="btn  modal-trigger animated" href="#modal2">Offer a Job</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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