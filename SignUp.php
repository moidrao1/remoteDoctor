<?php
session_start();
$_SESSION = array();

if (isset ( $_POST ['submit'] )) {
  	require_once 'Controllers/AuthController.php';
		$status = singup ($_POST);


if($status == "SUCCESS")
{
echo '<script type="text/javascript">
           window.location = "./index.php#login-content"
      </script>';
}
else{
  echo $status;
}
}
?>
<html>
  
<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
    <link rel="stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    
    <!--JS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
    <!-- Sign Up -->
    <main>
        <div class="container signup-background">
            <div class="row">
                <div class="col s3 m4 l3"><a href="index.php"><i class = "material-icons" style="color:#000000">arrow_back</i></a></div>
                <div class="col s6 m4 l6 center-align"><span class="flow-text"><h5>SIGN UP</h5></span></div>
            </div>

            <div class="col s2 m3 l4"></div>
            <div class="col s8 m6 l4" >
                <form action="SignUp.php" method="post">
                  <fieldset>
                    <div class="input-field col s6 form-group">
                        <input type="text" name="firstName" id="firstName" class="validate form-control">
                        <label for="firstName">FIRST NAME</label>
                    </div>

						
                    <div class="input-field col s6 form-group">
                        <input type="text" name="lastName" id="lastName" class="validate form-control">
                        <label for="lastName">LAST NAME</label>
                    </div>
                    
                    <div class="input-field col s6">
                        <input type="text" name="userName" id="userName" class="validate">
                        <label for="userName">USERNAME</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="number" name="age" id="age" class="validate">
                        <label for="age">AGE</label>
                    </div>
                    
                    <div class="input-field col s6">
                        <input type="number" name="phoneNumber" id="phoneNumber" class="validate">
                        <label for="phoneNumber">PHONE NUMBER</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="email" name="emailID" id="emailID" class="validate">
                        <label for="emailID">EMAIL ADDRESS</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="password" name= "password" id="password" class="validate">
                        <label for="password">PASSWORD</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="password" name= "password_2" id="password_2" class="validate">
                        <label for="password_2">Confirm PASSWORD</label>
                    </div>

                    <div class=" row" id="rdBtn">
                        <label>GENDER</label><br>
                        <input type="radio" name="gender" id="male" value="male" class="validate with-gap" checked />
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="female" class="validate with-gap" />
                        <label for="female">Female</label>
                    </div>
                     <div class=" row" id="rdBtn">
                        <label>Account Type</label><br>
                        <input type="radio" name="userType" id="patient" value="patient" class="validate with-gap" checked />
                        <label for="patient">Patient</label>
                        <input type="radio" name="userType" id="doctor" value="doctor" class="validate with-gap" />
                        <label for="doctor">Doctor</label>
                    </div>


                    <div class="center-align">
                       <input type="submit" id="login" name="submit" style="width:150px; height:35px;"class="form-control waves-effect waves-light  blue " value="Sign up" >
                    </div>
                    </fieldset>
                </form>
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
    
</body>
</html>
