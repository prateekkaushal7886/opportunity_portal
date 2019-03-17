<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

                    <img src="img/logo.png" width="160px">
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light item animated" href="http://www.sac.iitkgp.ac.in/">HOME</a></li>
                    
                    <li><a class="waves-effect waves-light item animated" href="#classgift">LOGIN/REGISTER</a></li>
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
            <p class="menuheading animated">Opportunities Portal</p>
            <div class="container">
                <p class="text">
                    Writeup to be written.
                </p>
            </div>
        </div>
        <div class="scrollspy" id="classgift">
            <p class="menuheading animated"></p>
            <div class="container">
                <div class="row">
                    <div class="col l6 m6 s12">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="img/classgift2.jpg">
                            </div>
                            <div class="card-content" style="height: 317px">
                                <span class="card-title">APPLY FOR A JOB</span>
                                <p class="text" style="font-size: 100%; padding-bottom: 12px;">As a Student of IIT Kharagpur, you can freelance by working for firms and getting paid for it.
                                </p>
                                <div class="row" align="center" style=" margin-bottom: -15px;">
                                    <a class="btn modal-trigger animated" href="#modal1">Login</a>
                                    <p style="margin-top: 8px;">Don't have an account? <br> <a class="btn modal-trigger animated" href="#modal1"> Register</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <a class="btn  modal-trigger animated" href="#modal2">Company Login</a>
                                </div>
                                <div class="row" align="center">
                                    <a class="btn  modal-trigger animated" href="#modal2">Company Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <center>
                    <div class="col s12">
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
                                    Class of 2014 voted to support International Participation of students.
                                </p>
                            </div>
                        </div>
                    </div>
                </center>
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
                    <span class="" style="color: red; margin-top: 0" >
                        <p id="pass"></p>
                    </span>
                    <div class="row" align="center">
                        <div class="col s12 l6 m12 offset-l3">
                            <button type="submit" name="submit1" class="waves-effect waves-light btn">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="modal2" class="modal">
            <div class="modal-content">
                <div class="col l6 s12 offset-l3" style="margin-bottom: 20px;">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#company_login_form" style="color: #26a69a !important;">Login</a></li>
                        <li class="tab col s3"><a href="#company_register" style="color: #26a69a !important;">Register</a></li>
                    </ul>
                </div>
                <!--LOGIN FORM-->
                <form id="company_login_form" method="POST">
                    <h4 class="menuheading animated">Login Here</h4>
                    <div class="row">
                        <div class="input-field col s12 l6 m12 offset-l3 ">
                            <input name="email" autofocus placeholder = "Company E-mail" type="text" required>
                            <label for="email">Company E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6 m12 offset-l3 ">
                            <input name="password" id="password"  placeholder="Password" type="password" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col s12 l6 m12 offset-l3">
                            <button type="submit" id="csubmit" name="csubmit" class="waves-effect waves-light btn">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <!--LOGIN END FORM-->
                <!--REGISTER FORM-->
                <form id="company_register" method="post" onsubmit="return issamec();" action="registercompany.php">
                    <h4 class="menuheading animated">Register Here</h4>
                    <div class="row">
                        <div class="input-field col s12 l5 m6 offset-l1">
                            <input type="text" name="companyname" id="companyname" placeholder="Company Name" required>
                            <label for="companyname">Company Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l5 m6 offset-l1">
                            <input type="text" name="location" id="location" placeholder="Location" required>
                            <label for="location">Location</label>
                        </div>
                        <div class="input-field col s12 l5 m6">
                            <input type="email" name="cemail" id="cemail" placeholder="Email Id" required>
                            <label for="email">Company E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l5 m6 offset-l1">
                            <input type="password" name="create_password" id="createp"  required>
                            <label for="create">Create Password</label>
                        </div>
                        <div class="input-field col s12 l5 m6">
                            <input type="password" name="confirm_password" id="confirmp"  required>
                            <label for="confirm">Confirm Password</label>
                        </div>
                    </div>
                    <span class="" style="color: red; margin-top: 0" >
                        <p id="cpass"></p>
                    </span>
                    <div class="row" align="center">
                        <div class="col s12 l6 m12 offset-l3">
                            <button type="submit" name="submitc" class="waves-effect waves-light btn">SUBMIT</button>
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

              // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
              $('.modal-trigger').leanModal();
          });
    
    $(document).ready(function(){
      $('select').material_select();
              // $('.datepicker').datepicker();

</html>