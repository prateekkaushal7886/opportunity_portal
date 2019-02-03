<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Senior Class Gift 2018</title>

  <!-- CSS  -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style1.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/animate.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  
</head>
<style type="text/css">
body{overflow-x: hidden;}
.thanks{
  font-weight: bolder;
  text-align: center;
  margin-top: -20px !important;
}
.clearfix {
  overflow: auto;
}
</style>

<body>
  <div class="navbar-fixed">
    <nav class="white" role="navigation">
      <div class="nav-wrapper">
        <a href="http://www.sac.iitkgp.ac.in/" class="brand-logo left"style="padding-top: 5px;">
          <img src="img/logo.png" width="160px">
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect waves-light item animated" href="http://www.sac.iitkgp.ac.in/">HOME</a></li>
          <li><a class="waves-effect waves-light item animated" href="#what">WHAT</a></li>
          <li><a class="waves-effect waves-light item animated" href="#classgift">PREVIOUS CLASS GIFTS</a></li>
          <li><a class="waves-effect waves-light item animated" href="#contact">CONTACT</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="http://www.sac.iitkgp.ac.in/">HOME</a></li>
          <li><a href="#what">WHAT</a></li>
          <li><a href="#classgift">PREVIOUS CLASS GIFTS</a></li>
          <li><a class="waves-effect waves-light"href="#contact">CONTACT</a></li>

        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
  <div class="row ac-summit">
    <img src="img/my.jpg" style="max-height: 95vh; width: 100vw; " >
  </div>
  <!-- <div id="index-banner" class="parallax-container">
    <div class="parallax"><img src="My Imprint.jpg"></div>
  </div> -->
  <div class="scrollspy" id="what">
    <p class="menuheading animated">What you can do here ?</p>
    <div class="container">
      <p class="text">
       IIT-KGP has a long and historic legacy of Alumni Giving Back which has existed in different forms. The Graduating Class Gift is yet another chapter to be added in KGP alumni legacy initiated under My Imprint Programme.

       It is a class-based effort directed towards raising unrestricted funds from students of graduating batch. A part of the collected fund is used for Senior Class Gift while the rest goes towards Endowment. The Endowment would again be utilized for students' services only. It is an opportunity for graduating students to take their first step in being soon-to-be alumni by making their Graduating Class Gift, the gift which impacts student life in the KGP campus. This challenge offers seniors the chance not only to make a gift, but also to leave behind their imprint.
     </p>
   </div>
 </div>
 <div class="scrollspy" id="classgift">
  <p class="menuheading animated">PREVIOUS CLASS GIFTS</p>
  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/classgift2.jpg">
          </div>
          <div class="card-content">
           <span class="card-title">CLASS GIFT OF 2016</span>
           <p class="text" style="font-size: 100%; padding-bottom: 12px;">80% of Class of 2016 voted for the gift in various categories and close to 400 students contributed their caution money.<br>
           Class of 2015 voted to gift Campus Benches.</p>
           <div class="row" align="center" style=" margin-bottom: -15px;">
             <a class="btn modal-trigger animated" href="#modal1">Login</a>
             <p style="margin-top: 8px;">Don't have an account?<a class="modal-trigger" href="#modal1"> Register</a></p>
           </div>
         </div>
       </div>
     </div>

     <div class="col l6 m6 s12">
      <div class="card hoverable">
        <div class="card-image">
          <img src="img/classgift.jpg">
        </div>
        <div class="card-content">
         <span class="card-title">CLASS GIFT OF 2015</span>
         <p class="text" style="font-size: 100%; padding-bottom: 12px;">80% of Class of 2015 voted for the gift in various categories and close to 400 students contributed their caution money.<br>
         Class of 2015 voted to gift Campus Benches.</p>
         <div class="row" align="center">
          <a class="btn  modal-trigger animated" href="#modal2">Offer a Job</a>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
<div class="container">
  <div class="row">
    <center><div class="col s12">
      <div class="card hoverable">
        <div class="card-content clearfix" id="image">
         <span class="menuheading animated">Special Thanks to</span>
         <p class="text thanks">
          Mr. Vishal Kumar Singh<br> Vice-President, Gymkhana
        </p>
        <div id="img" class="">
         <img src="img/profile2.jpg" id="pic" width="170px" height="170px" style="float: right; margin-top: -110px">
       </div>
       <p class="text" style="font-size: 120%; margin-top: -30px;">70% of Class of 2014 voted for the gift in various categories and close to 350 students contributed their caution money.
       Class of 2014 voted to support International Participation of students.</p>
     </div>
   </div>
 </div></center>
</div>
<hr />
</div>
<div id="contact" class="scrollspy">
  <?php include('footer.php'); ?>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <div class="col l6 s12 offset-l3" style="margin-bottom: 20px;">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#login_form" style="color: #26a69a !important;">Login</a></li>
        <li class="tab col s3"><a href="#register_form" style="color: #26a69a !important;">Register</a></li>
      </ul>
    </div>
    <!--LOGIN FORM-->
    <form id="login_form" method="POST">
      <h4 class="menuheading animated">Login Here</h4>
      <div class="row">
        <div class="input-field col s12 l6 m12 offset-l3 ">
          <input name="rollno" autofocus placeholder = "Roll Number" type="text" required>
          <label for="rollno">Roll Number ( 14THXXXXX )</label>
        </div> 
      </div>
      <div class="row">
        <div class="input-field col s12 l6 m12 offset-l3 ">
          <input name="password" id="dob"  placeholder="Password" type="password" required>
          <label for="dob">Password</label>
        </div>
      </div>
      <div class="row" align="center">
        <div class="col s12 l6 m12 offset-l3">
          <button type="submit" id="submit" name="submit" class="waves-effect waves-light btn">SUBMIT</button>
        </div>
      </div>
    </form>
    <!--LOGIN END FORM-->
    <!--REGISTER FORM-->
    <form id="register_form" method="post" onsubmit="return issame();" action="register.php">
      <h4 class="menuheading animated">Register Here</h4>
      <div class="row">
        <div class="input-field col s12 l5 m6 offset-l1">
          <input type="text" name="firstname" id="firstname" placeholder="First Name..." required>
          <label for="firstname">First Name</label>
        </div>
        <div class="input-field col s12 l5 m6">
          <input type="text" name="lastname" id="lastname" placeholder="Last Name..." required>
          <label for="lastname">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l5 m6 offset-l1">
          <input type="text" name="rollno" id="rollno" placeholder="Roll Number" required>
          <label for="rollno">Roll Number ( 14THXXXXX )</label>
        </div>
        <div class="input-field col s12 l5 m6">
          <input type="email" name="email" id="email" placeholder="Email Id" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l5 m6 offset-l1">
          <input type="password" name="create_password" id="create" placeholder="Create" required>
          <label for="create">Create Password</label>
        </div>
        <div class="input-field col s12 l5 m6">
          <input type="password" name="confirm_password" id="confirm" placeholder="Confirm" required>
          <label for="confirm">Confirm Password</label>
        </div>
      </div>
      <span class="" style="color: red; margin-top: 0" ><p id="pass"></p></span>
      <div class="row" align="center">
        <div class="col s12 l6 m12 offset-l3">
          <button type="submit" name="submit1" class="waves-effect waves-light btn">SUBMIT</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="modal2" class="modal">
  <span style="float: right; cursor: pointer;"><i class="material-icons modal-action modal-close">&times</i></span>
  <div class="modal-content">
    <h4 class="menuheading animated">Enter Job Details</h4>
    <!--LOGIN FORM-->
    <form method="POST" action="job.php" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12 l5 m6 offset-l1 ">
          <input name="company" id="company" autofocus placeholder="Company Name" type="text" required>
          <label for="company">Company or Organisation</label>
        </div>
        <div class="input-field col s12 l5 m6">
          <input name="pos" id="pos"  placeholder="Position" type="text" required>
          <label for="pos">Position required</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l5 m6 offset-l1 ">
          <input name="location" id="loc" type="text" required>
          <label for="loc">Location</label>
        </div>
        <div class="input-field col s12 l5 m6">
          <select class="" name="work">
            <option value="" disabled selected>Choose your option</option>
            <option value="home">Work from home</option>
            <option value="office">Work from Office</option>
          </select>
          <label>Work from</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s12 l5 m6 offset-l1 ">
          <input name="start" id="start" type="date" required>
          <label for="start" class="active">Starting from</label>
        </div>
        <div class="input-field col s12 l5 m6">
          <input name="duration" id="duration" type="Number" placeholder="Months" required>
          <label for="duration" class="active">Max. Duration (months)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l5 m6 offset-l1 ">
          <input name="stipend" id="stipend" type="text" placeholder="Rs. /month" required>
          <label for="stipend">Stipend</label>
        </div>
        <div class="input-field col s12 l5 m6">
          <input name="applyby" id="apply" type="date" required>
          <label for="apply" class="active">Apply By</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l10 offset-l1 ">
          <textarea name="description" class="materialize-textarea" rows="2" id="desc" placeholder="Write something about the job" required></textarea>
          <label for="desc" class="active">Job Description</label>
          <p style="text-align: center;margin-top: -13px">OR/AND</p>
          <div class="file-field input-field" style="margin-top: -15px">
            <div class="btn btn-small">
              <span>Attach PDF</span>
              <input type="file" name="filetoupload" id="fileToUpload" accept=".pdf">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        <div class="input-field col s12 l10 offset-l1">
          <textarea name="eligibility" class="materialize-textarea" rows="1" id="eleg" placeholder="Eligibility" required></textarea>
          <label for="elig">Who can apply?</label>
        </div>
      </div>
      <div class="row" align="center">
        <div class="col s12 l6 m12 offset-l3">
          <button type="submit" name="submit2" class="waves-effect waves-light btn">SUBMIT</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!--  Scripts-->
<!-- <script   src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"   integrity="sha256-xI/qyl9vpwWFOXz7+x/9WkG5j/SVnSw21viy8fWwbeE="   crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<!-- <script src="js/materialize.min.js"></script> -->
<script src="js/init.js"></script>
<script type="text/javascript">
  $(function () {

    $('#login_form').on('submit', function (e) {
      e.preventDefault();
      $.ajax({
        type: 'post',
        url: 'login.php',
        data: $('#login_form').serialize(),
        success: function (response) {
         if(response == 0 )
         {
          swal({
            title: "INCOMPLETE DETAILS!",
            text: "Please enter rollno and password!",
            icon: "error",
            buttons: true,
            dangerMode: true,
          }).then((value) => {

          });
        }
        else if(response == 1 )
        {
          swal({
            title: "INVALID LOGIN!",
            text: "Please re-enter your rollno and password!",
            icon: "error",
            buttons: true,
            dangerMode: true,
          }).then((value) => {

          });
        }
        else if(response == 2 )
        {
         window.location="home.php";
       }
       else
       {
        alert(response);
      }
    }
  });
    });
  });
</script>

<?php 
if(@$_SESSION['posted'] == 1) {
    echo "<script>
    swal({
      title: 'POSTED!',
      text: 'Your job has been posted.',
      icon: 'success',
      buttons: true,
    });</script>";
  }
  unset($_SESSION['posted']);

  if(@$_SESSION['registered'] == 1) {
    echo "<script>
    swal({
      title: 'ALREADY REGISTERED!',
      text: '',
      icon: 'error',
      buttons: true,
    });</script>";
  }

  elseif (@$_SESSION['registered'] == 2) {
    echo "<script>
    swal({
      title: 'TRY AGAIN',
      text: 'Connection error',
      icon: 'error',
      buttons: true,
    });</script>";
  }
  unset($_SESSION['registered']);
?>
<script>
  $(document).ready(function(){
    $(".item , .menuheading").hover(
      function () {
        $(this).addClass('pulse');
      },
      function () {
        $(this).removeClass('pulse');
      }
      );
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });

  $(document).ready(function(){
    $('select').material_select();
    // $('.datepicker').datepicker();
  });
</script>
<script type="text/javascript">
  function issame() {
    var create = document.getElementById('create').value;
    var confirm = document.getElementById('confirm').value;
    if(create != confirm){
      document.getElementById('pass').innerHTML = '* Password does not match!';
      return false;
    }
  }
  $(document).ready(function() {
    if($(window).width() < 530){
      $('#image').removeClass('clearfix');
    }
    if($(window).width() < 866){
      $('#img').addClass('col s12');
      $('#img').attr('align', 'center');
      $('#pic').css({"float":"none", "margin-top":"0"});
    }
  });
</script>

</body>
</html>