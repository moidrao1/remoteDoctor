<?php
session_start();


if (isset ($_SESSION ['user'] )  && !empty($_SESSION['user'])) {

  $obj = $_SESSION['user'];
  if($obj['userType'] == 'patient')
  {
    
       header("Location: ./Patient.php"); /* Redirect browser */
       exit();
  }
  if($obj['userType'] == 'doctor')
  {
    
       header("Location: ./Doctor.php"); /* Redirect browser */
       exit();
 
    
  }
  
}

if (isset ( $_POST ['submit'] )) {
  	require_once 'Controllers/AuthController.php';
  
		$status = login($_POST);

if($status['message'] == 'SUCCESS')
{
 $_SESSION['user'] = $status;
  if($status['userType'] == 'patient')
{
       header("Location: ./Patient.php"); /* Redirect browser */
       exit();
} 
if($status['userType'] == 'doctor')
{
       header("Location: ./Doctor.php"); /* Redirect browser */
       exit();
 
}
  
}
else{
  
echo 'He22';
echo $status['message'];
}
}
?>
<head>
  <title>Remote Doctor Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
  <link rel="stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/RemoteDoctorHome.css" />
  <!--JS-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/RemoteDoctorHome.js"></script>
  <script type="text/javascript" src="js/resetPswd.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">
        <i class="fa fa-heartbeat" aria-hidden="true" style="margin-right:1px; padding-left: 15px;"></i>RD
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" id="RemoteDoctorHome">Home</a></li>
        <li><a href="#login-content">Login</a></li>
        <li><a href="SignUp.php">Create Account</a></li>
        <li><a href="#reviews">Reviews</a></li>
        <li><a href="#services">Services</a></li>
        <li><a class="modal-trigger" href="#about">About Us</a></li>   <!-- About Modal Trigger -->
        <li><a href="#contact">Contact Us</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#" id="RemoteDoctorHome">Home</a></li>
        <li><a href="#login-content">Login</a></li>
        <li><a href="SignUp.php">Create Account</a></li>
        <li><a href="#reviews">Reviews</a></li>
        <li><a href="#services">Services</a></li>
        <li><a class="modal-trigger" href="#about">About Us</a></li>   <!-- About Modal Trigger -->
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  
  <!-- About Modal Structure -->
  <div id="about" class="modal">
    <div class="modal-content">
      <h4>About Us</h4>
        <p style="text-align: justify; text-justify: none; font-family: 'Arial', sans-serif;">
        The pivotal role of Remote Doctor is to provide an online platform for the access of medical
        services in distant and remote areas of Pakistan. It also to brings new ways of value-based
        care success and to reduce the level of risk and keep the patients healthy and out of the
        hospital. Our focus is to offer the users of our system a responsive interface and instant
        access of qualified doctors 24/7/365.<br>
        Remote Doctor strives to provdie you with medical assistance that you require. With a single click, you can get the help at any hour of need with even travelling far.<br>
        Remote Doctor has gathered the qualified doctors only for you and you can avail the services by registering yourself.
        We’ve divided our entire system into two modes; Patient mode and Provider mode.<br>
        In patient mode, patients are provided an opportunity to get instant access to qualified doctors from different fields by signing up. In this mode, patients can search doctors to discuss their problems by contacting them via secure video or audio conversation online after making a request. It will also support messaging. Patients from remote areas can directly interact with doctors through their own accounts. There is a feature of emergency call that allows the registered patients to connect to any doctor immediately.<br>
        On the other hand, provider mode is there to handle the case of serious injuries.Not only this, our system offer patients to get medical chart. Doctors can record calls to retain all information they consider necessary. Doctors can listen to the problems of their patient and can treat the patient through the Internet.
        </p>
    </div> <!-- ./ about modal-content -->
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div> <!-- ./ about modal-footer -->
  </div>  <!-- ./ about modal-structure -->
  <!-- ./ header content -->
  <!-- Jumbotron -->
  <img class="responsive-img" src="css/imgs/Medicine/5.jpg" alt="" width=100% style=" max-height: 400px;">

  <main>
    <!-- How it works -->
    <div class="container">
      <div class="row" style="margin-bottom: 0px; padding-bottom: 5%;">
        <h5 class="col s12 center-align" style="padding-top: 3%; padding-bottom: 3%;">HOW IT WORKS</h5>
        
        <div class="col m4 s12 center-align">
          <span class="fa-stack fa-5x">
            <i class="fa fa-square fa-stack-2x" ></i>
            <i class="fa fa-power-off fa-stack-1x fa-inverse waves-effect waves-light"></i>  <!-- green darken-1 -->
          </span>
          <h6 class="flow-text center-align" style="color: #47ad24;"><strong>1. Activate</strong></h6>
          <p class="flow-text">Get started online or download our application</p>
        </div>

        <div class="col m4 s12 center-align">
          <span class="fa-stack fa-5x">
            <i class="fa fa-square fa-stack-2x" ></i>
            <i class="fa fa-user-md fa-stack-1x fa-inverse waves-effect waves-light"></i> <!--  orange lighten-1 -->
          </span>
          <h6 class="flow-text center-align" style="color: #e8440d;"><strong>2. Select</strong></h6>
          <p class="flow-text">Choose a doctor</p>
        </div>

        <div class="col m4 s12 center-align">
          <span class="fa-stack fa-5x">
            <i class="fa fa-square fa-stack-2x" ></i>
            <i class="fa fa-mobile-phone fa-stack-2x fa-inverse waves-effect waves-light"></i> <!-- pink lighten-1 -->
          </span>
          <h6 class="flow-text center-align" style="color: #ad42f4;"><strong>3. Consult</strong></h6>
          <p class="flow-text">See a doctor via phone or secure video</p>
        </div>

      </div>
    </div>

    <!-- Login -->
    
    <div class="login-background">
      <div class="container center-align" id="login-content">
        <div class="row">
          <h5 class="col s12 center-align">LOGIN</h5>
            <form action="index.php" method="post">
              <fieldset>
                      <div class="input-field col s12 form-group">
              <i class="material-icons prefix">account_circle</i>
              <input id="username" name="username" type="text" class="validate">
              <label for="username">Username</label>
            </div>
            <div class="input-field col s12 form-group">
              <i class="material-icons prefix">lock</i>
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
            <div class="row center-align" style="margin-bottom: 0px;">
              <input type="radio" name="usertype" id="patient" value="patient" class="validate with-gap" checked />
              <label for="patient" style="color: black;">Patient</label>
              <input type="radio" name="usertype" id="doctor" value="doctor" class="validate with-gap" />
              <label for="doctor" style="color: black;">Doctor</label>
            </div>
            <div class="row center-align">
              <span class="remember-me-check">
                <input type="checkbox" id="remember-me" />
                <label for="remember-me" style="color: black;">Remember me</label>
              </span>
            </div>
            <div class="row center-align">
               <input type="submit" id="login" name="submit" style="width:150px; height:35px;"class="form-control waves-effect waves-light  blue " value="Login" >
                <i class="fa fa-sign-in" aria-hidden="true"></i>
              </button>
            </div>
            </fieldset>
                </form>
            <div class="row center-align">
              <p class="quest_text" >Don't have an account?<a style="cursor:pointer" href="SignUp.php"> Sign Up</a></p>
            </div>
            <div class="row center-align">
                <p class="quest_text">Password forgotten? <a style="cursor:pointer" class="modal-trigger" href="#resetPswd">Click here</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Reset Password Modal Structure -->
    <div id="resetPswd" class="modal">
      <div class="modal-content">
        <p class="flow-text center-align"><h5>Reset Password</h5></p>
        <p class="col s12">Enter the e-mail you used while creating your account.</p>
        
        <div class="input-field col s12 center-align">
          <i class="material-icons prefix">email</i>
          <input id="email-rp" type="email" class="validate">
          <label for="email-rp" data-error="wrong" data-success="right">Email Address</label>
        </div>

        <a href="#!" class="btn waves-effect waves-light blue center-align" type="submit" name="resetPassword">Send reset link
          <i class="material-icons right">send</i>
        </a>
      </div> <!-- ./ reset password modal-content -->
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect btn-flat" onclick="intert.closePF()">Cancel</a>
      </div> <!-- ./ reset password modal-footer -->
    </div>  <!-- ./ reset password modal-structure -->

    <!-- Reviews -->
    <div class="review-background" id="reviews">
      <h5 class="col s12 center-align"><strong>REVIEWS</strong></h5>
      <div class="row" style="margin-bottom: 0px;">
        <div class="col l3 m3 s12">
          <div class="card medium">
            <div class="card-image">
              <img src="css/imgs/Medicine/1.jpg" height="200px">
            </div>
            <div class="card-content">
              <p style="text-align: justify;">"Being able to help the patients all over Pakistan was a great opportunity that I got to do from Remote Doctor. It makes me feel proud of myself when I help those victims who can’t afford such commodities." Dr. Amjad Ali</p>
            </div>
          </div>
        </div>
        <div class="col l3 m3 s12">
          <div class="card medium">
            <div class="card-image">
              <img src="css/imgs/Medicine/11.jpg" height="200px">
            </div>
            <div class="card-content">
              <p style="text-align: justify;">"I have been using Remote Doctor to help people get better and avoid casualties. So far, I am very much satisfied with the product." Dr. Fakhir Hussain</p>
            </div>
          </div>
        </div>
        <div class="col l3 m3 s12">
          <div class="card medium">
            <div class="card-image">
              <img src="css/imgs/A1.jpg" height="200px">
            </div>
            <div class="card-content">
              <p style="text-align: justify;">"This app has solved my problem of waiting in long lines to get a simple checkup. I can easily get myself examine through this app and can pay online for the service."  Alia Jamal</p>
            </div>
          </div>
        </div>
        <div class="col l3 m3 s12">
          <div class="card medium">
            <div class="card-image">
              <img src="css/imgs/Medicine/9.jpeg" height="200px">
            </div>
            <div class="card-content">
              <p style="text-align: justify;">"This app provides the feedback and honest reviews about the registered doctors that helped me to make my decision whom I want to choose as my doctor. It brought me satisfaction."  Asim Haider</p>
            </div>
          </div>
        </div>
      </div> 
    </div> 
    <!-- Services -->
    <div class="services-backgorund" id="services">    
      <h5 class="col s12 center-align"><strong>SERVICES</strong></h5>
      <div class="row">
        <div class="col l6 m6 s12">
          <img class="responsive-img" src="css/imgs/Medicine/17.png">
        </div>
        <div class="col l6 m6 s12 left-align">
          <h5>Instant and Fast Access</h5>
          <p>Our aim is to provide our users with the medical aid within an instant wherever they are.</p>
          <h5>No Need to Wait</h5>
          <p>You don't need to wait fot your turn anymore. Just create an account and join us.</p>
          <h5>Health and Care</h5>
          <p>Our priority is your health and care.</p>
          <h5>Board Certified Doctors</h5>
          <p>We have great doctors to examine you.</p>
          <h5>Application Availablity</h5>
          <p>We are providing online platform for such facility which will be available through your desktop and mobile devices.</p><br>
          <div class="center-align">
            <a class="waves-effect waves-light btn blue btn-large" href="SignUp.php">Join Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Conatct Us -->
    <div class="contact-background">
      <div class="container center-align" id="contact">
        <div class="row">
          <h5 class="col s12 center-align">CONTACT US</h5>
          <p class="col s12 flow-text center-align">We'd <i class="fa fa-heart" aria-hidden="true"></i> to help.</p>
          <form class="col s12">
            <div class="row">
              <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="username" type="text" class="validate">
                <label for="username">Username</label>
              </div>
              <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">phone</i>
                <input id="telephone" type="tel" class="validate">
                <label for="telephone">Telephone</label>
              </div>
              <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="validate">
                <label for="email" data-error="wrong" data-success="right">Email</label>
              </div>
              <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">subject</i>
                <input id="subject" type="tel" class="validate">
                <label for="subject">Subject</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="meassage" class="materialize-textarea"></textarea>
                <label for="meassage">Message</label>
              </div>
            </div>
            <div class="row center-align">
              <button class="btn waves-effect waves-light blue" type="submit" name="action">Send
                <i class="material-icons right">send</i>
              </button>
            </div> 
          </form>
        </div>
      </div>
    </div>
  </main>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12 center-align">
          <h6 class="white-text  center-align">Heath, Care, Fast and Instant Access</h6>
        </div>
      </div>
      
      <div class="row">
        <div class="col l4 m4 s12 center-align">
          <h6 class="white-text"><u>Support</h5></u></h6><br>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Help Center</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Terms of Use</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col l4 m4 s6 center-align">
          <h6 class="white-text"><u>Connect Us</h5></u></h6><br>
          <ul>
            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size:38px;color:#4099FF"></i></a></li>
            <li><a href="https://plus.google.com/"><i class="fa fa-google-plus-square" aria-hidden="true" style="font-size:38px;color:#d34836"></i></a></li>
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size:38px;color:#3B5998"></i></a></li>
          </ul>
        </div>
        <div class="col l4 m4 s6 center-align">
          <h6 class="white-text"><u>Download</u></h6><br>
          <ul>
            <li><a href="#" target=""><img src="css/imgs/D2.png" class="responsive-img" alt="playstore download banner" width: 500px; height: 200px; style="border-radius: 4px;"></a></li>
            <li><a href="#" target=""><img src="css/imgs/D1.png" class="responsive-img" alt="appstore download banner" width: 500px; height: 200px; style="border-radius: 4px;"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="row container">
        <div class="col s12">
          Copyright © 2017, Remote Doctor. All rights reserved.
        </div>
      </div>
    </div>
  </footer> 
  <!-- Fixed Action Button -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-medium blue" href="#RemoteDoctorHome">
      <i class="large material-icons">arrow_drop_up</i>
    </a>
  </div>
  <!-- For Scrolling -->
  <script>
    jQuery(document).ready(function($) {
      $('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate( {
          'scrollTop': $target.offset().top
        }, 1000, 'swing', function () {
          window.location.hash = target;
        } );
      } );
    } );

  function login() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
  </script>
</body>
</html>
