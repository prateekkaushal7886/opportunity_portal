<?php
session_start();
if(!isset($_SESSION['email'])){
	$_SESSION['login'] = 1;
	header("Location:index.php");
}

require 'connection.php';
$user = "SELECT * FROM students WHERE rollno = '".$_SESSION['rollno']."'";
if( $query_run2 = mysqli_query($conn, $user) ){
	$row = mysqli_fetch_row($query_run2);
}
$skills = explode(",", $row[11]);
// print_r($skills);
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title><?php echo $row[1]; ?> | Profile</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style1.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/animate.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
	rel = "stylesheet">
	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<style>
	.add {
		background-color: #3bb2a7;
		font-size: 35px;
		float: right;
		border-radius: 50%;
		cursor: pointer;
		margin-top: 22px;
	}
	.delete {
		float: right;
		cursor: pointer;
	}
</style>

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
					<li><a class="waves-effect waves-light item animated" href="profile.php" style="text-transform: uppercase;"><?php echo $row[1]; ?></a></li>
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
	<div class="_wrapper">
		<div class="row container">
			<form action="register.php" method="post">
				<div class="personal">
					<h3 class="menuheading" style="text-align: left;">Personal details</h3><hr>
					<div class="input-field col l6 m6 s12">
						<input  type="text"  name="firstname" id="fname" class="validate" value="<?php echo $row[1]; ?>" required>
						<label for="firstname">Firstname </label>
					</div>
					<div class="input-field col l6 m6 s12">
						<input  type="text"  name="lastname" id="lname" class="validate" value="<?php echo $row[2]; ?>" required>
						<label for="lastname">Lastname</label>
					</div>
					<div class="input-field col l6 m6 s12">
						<input  type="email"  name="email" id="email" class="validate" value="<?php echo $row[0]; ?>" required>
						<label for="email">Email ID</label>
					</div>
					<div class="input-field col l6 m6 s12">
						<input type="text" name="rollno" id="rollno" value="<?php echo $row[3]; ?>" required>
						<label for="rollno">Roll Number</label>
					</div>
					<div class="input-field col s12">
						<input type="text" name="linkedin" id="linkedin" value="<?php echo $row[5]; ?>" required>
						<label for="linkedin" class="active">Linkedin Account <span style="color: red">*</span></label>
					</div>
					<br><br>
				</div>
				<div class="education">
					<h3 class="menuheading" style="text-align: left;">Educational details</h3><hr />
					<div class="input-field col l4 m4 s12">
						<input  type="number" min="1951" id="join" name="joinYear" value="<?php echo $row[6]; ?>" required>
						<label for="join">Join Year <span style="color: red">*</span></label>
					</div>
					<div class="input-field col l4 m4 s12">
						<input  type="number" min="1955" id="yog" name="graduatingYear" value="<?php echo $row[7]; ?>" required>
						<label for="yog">Year of Graduation <span style="color: red">*</span></label>
					</div>
					<div class="input-field col l4 m4 s12">
						<input  type="number" min="0" max="10.00" step="0.01" id="cg" name="cgpa" placeholder="Ex: */10.00" value="<?php echo $row[8]; ?>" required>
						<label for="cg">CGPA <span style="color: red">*</span></label>
					</div>
					<div class="input-field col l6 m6 s12">
						<select name="department" id="dept" required>
							<option value="<?php echo $row[9]; ?>" disabled selected><?php 
							if(!empty($row[9])) 
								echo $row[9];
							else
								echo "Choose Your Department";
							?></option>
							<option value="Aerospace Engineering">Aerospace Engineering</option>
							<option value="Agricultural and Food Engineering">Agricultural and Food Engineering</option>
							<option value="Architecture and Regional Planning">Architecture and Regional Planning</option>
							<option value="Biotechnology">Biotechnology</option>
							<option value="Chemical Engineering">Chemical Engineering</option>
							<option value="Chemistry">Chemistry</option>
							<option value="Civil Engineering">Civil Engineering</option>
							<option value="Computer Science and Engineering">Computer Science and Engineering</option>
							<option value="Electrical Engineering">Electrical Engineering</option>
							<option value="Electronics & Electrical Communication Engineering">Electronics & Electrical Communication Engineering</option>
							<option value="Geology & Geophysics">Geology & Geophysics</option>
							<option value="Humanities & Social Sciences">Humanities & Social Sciences</option>
							<option value="Industrial & Systems Engineering">Industrial & Systems Engineering</option>
							<option value="Mathematics">Mathematics</option>
							<option value="Mechanical Engineering">Mechanical Engineering</option>
							<option value="Metallurgical & Materials Engineering">Metallurgical & Materials Engineering</option>
							<option value="Mining Engineering">Mining Engineering</option>
							<option value="Ocean Engineering & Naval Architecture">Ocean Engineering & Naval Architecture</option>
							<option value="Physics">Physics</option>
						</select>
						<label for="dept">Department <span style="color: red">*</span></label>
					</div>
					<div class="input-field col l6 m6 s12">
						<select name="degree" id="degree" required>
							<option value="<?php echo $row[10]; ?>" disabled selected><?php 
							if(!empty($row[10])) 
								echo $row[10];
							else
								echo "Choose Your Course";
							?></option>
							<option value="B.Tech">B.Tech</option>
							<option value="Dual Degree">Dual Degree</option>
							<option value="M.Tech">M.Tech</option>
							<option value="Int. M.Sc">Int. M.Sc</option>
						</select>
						<label for="degree">Degree <span style="color: red">*</span></label>
					</div>
				</div>

				<div class="col l6 m6 s12">
					<h3 class="menuheading" style="text-align: left;">SKILLS</h3><hr />
					<div class="row">
						<div class="input-field col s11">
							<input type="text" id="skill" placeholder="Ex: Adobe Photoshop">
							<label for="skill">Search</label>
						</div>
						<div class="col s1">
							<i class="material-icons add tooltipped" data-position="top" data-tooltip="Add skills">add</i>
						</div>
					</div>
					<ul class="collection" id="showskills">
						<?php 
						foreach ($skills as $i => $skill) {
							echo '<li class="collection-item" id="skill'.$i.'">'.$skill.'<i class="material-icons delete" id="'.$i.'">delete</i></li>';
						}
						?>
					</ul>
				</div>
				<input type="hidden" name="skills" id="skills">
				<input type="hidden" name="deleteid" id="deleteid">
				<div class="col s12">
					<center>
						<button type="submit" class="btn btn-success btn-lg btn-block update" name="update" style="width:220px; margin-top: 30px" >UPDATE</button>
					</center>
				</div>
			</form>
		</div>
		<div id="contact" class="scrollspy">
			<?php include('footer.php'); ?>
		</div>
	</body>
	</html>
	<script>
		$(document).ready(function(){
			$('.tooltipped').tooltip();
			$('select').material_select();
		});

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
		$(function() {
			$("#skill" ).autocomplete({
				source: "/jobs/search.php"
			});
		});
	</script>
	<script>
		$('.add').on('click', function() {
			var skill = $('#skill').val();
			var skills = $('#skills').val();
			var id = $('.collection li').length + 1;
			if(skill != '') {
				if(skills != '')
					$('#skills').val(skills + ',' + skill);
				else
					$('#skills').val(skills + skill);

				$(".collection").append('<li class="collection-item" id="skill"'+id+'>'+skill+'<i class="material-icons delete" id="'+id+'">delete</i></li>');
			}
			$('#skill').val("");
		});

		$('.delete').on('click', function() {
			var id = $(this).attr('id');
			var skill = $('#showskills').find('#skill'+id).css("display", "none");
			$.ajax({
				type: 'post',
				url: 'delete.php',
				data: {'id': id,},
				success: function (response) {
				}
			});
		});
	</script>