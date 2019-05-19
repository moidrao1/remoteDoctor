<?php

session_start();

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

if (!isset ($_SESSION ['user'] )) {

 header("Location: ./index.php#login-content"); /* Redirect browser */
       exit();
 
 
}

?>
<html>
<head>
    <title>Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/doctorActivity.css" />
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script> 
</head>
<body>
  <!-- Header only for small screens -->
  <!-- <header class="hide-on-large-only">
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo center-align">
            <i class="fa fa-heartbeat" aria-hidden="true" style="padding-top: 6%; padding-left: 10px;">RD</i>
          </a>
          <ul class="left">
           <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">more_vert</i></a>
          </ul>
        </div>
      </nav>
    </div>
  </header> -->

  <!-- Fixed sidenav only for large screens -->
  <ul id="slide-out" class="side-nav fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="css/imgs/i4.jpg" alt="nothing" width="100%"> 
      </div>
      <a href="#!user"><img class="circle" src="css/imgs/user.png" style="border: 1px ridge #cccccc;"></a>
      <a href="#!name"><span class="white-text name">FirstName LastName</span></a>
    </div></li>

    <!-- Search patients -->    
    <li>
      <form>
        <div class="input-field card z-depth-2" style=" margin-left: 15px; margin-right: 15px; border-radius: 25px;">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </li>

    <!-- Emergency Call -->
    <!-- <li><a href="#emergencyCall" class="waves-effect" onclick="Materialize.showStaggeredList('#staggered-eCalls')"><i class="material-icons">call</i>Emergency Call</a></li>
     -->
    
    <!-- Appointments -->
    <li><a href="#appointments" class="waves-effect"><i class="material-icons">date_range</i>Appointments</a></li>
  
    <!-- Call -->
    <!-- <li><a href="#call" class="waves-effect"><i class="material-icons">call</i>Calls</a></li> -->
    
    <!-- Medical Chart -->
    <li><a href="#medicalChart" class="waves-effect"><i class="material-icons">multiline_chart</i>Medical Chart</a></li>
    
    <!-- Medical History -->
    <li><a href="#medicalHistory" class="waves-effect"><i class="material-icons">assessment</i>Medical History</a></li>
    
    <!-- Prescriptions -->
    <li><a href="#prescriptions" class="waves-effect"><i class="material-icons">web</i>Prescriptions</a></li>
    
    <!-- Recordings -->
    <li><a href="#recordings" class="waves-effect"><i class="material-icons">mic</i>Recordings</a></li>
    
    <!-- Reports -->
    <li><a href="#reports" class="waves-effect" onclick="Materialize.showStaggeredList('#staggered-reports')"><i class="material-icons">description</i>Reports</a></li>
    
    <!-- User Profile -->
    <li><a href="#docProfile" class="waves-effect"><i class="material-icons">person</i>Profile</a></li>
    
    <!-- Messages -->
    <!-- <li><a href="#messages" class="waves-effect"><i class="material-icons">message</i>Messages</a></li> -->
    
    <!-- Call -->
    <!-- <li><a href="#call" class="waves-effect"><i class="material-icons">call</i>Calls</a></li> -->
    
    <!-- Settings -->
    <li>
      <ul class="collapsible" data-collapsible="expandable">
        <li>
          <div class="collapsible-header">
            <a href="#settings" class='waves-effect settings' onclick="Materialize.showStaggeredList('#staggered-test')" id="setting"><i class="material-icons" style="margin-right: 28px;">settings</i>Settings</a>
          </div>
          <div class="collapsible-body">
            <ul>
              <li><a href="#accountSettings" class="waves-effect"><i class="material-icons">vpn_key</i>Account settings</a></li>
              <li><a href="#notifications" class="waves-effect"><i class="material-icons">add_alert</i>Notifications</a></li>
              <li><a href="#usagePreferences" class="waves-effect"><i class="material-icons">data_usage</i>Usage Preferences</a></li>
              <li class="divider"></li>
              <li><a class="subheader">Other</a></li>
              <li><a href="#HelpCenter.html" class="waves-effect"><i class="material-icons">help</i>Help Center</a></li>  
              <li><a href="#Feedback.html" class="waves-effect"><i class="material-icons">star</i>Feedback</a></li>  
              <li><a href="#contact" class="waves-effect"><i class="material-icons">contact_mail</i>Contact Us</a></li>
              <li class="divider"></li>
            </ul>
          </div>
        </li>
      </ul>  <!-- ./ collapsible -->
    </li>

    <!-- Logout -->
    <li><a href="auth/logout.php" class="waves-effect"><i class="material-icons">power_settings_new</i>Log Out</a></li>
  </ul> <!-- ./ul-sidenav -->
  
  <!-- <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a> -->
  <!-- ./ sidenav -->
  <main>
    <!-- Doctor -->
    <div class="" id="doctor"> 
      <h5 class="center-align blue accent-3" style="padding-top: 2%; padding-bottom: 2%;">Patient</h5>
      <div class="row">
        <!-- Patient profile -->
        <div class="col s12 m4 l4">
          <div id="profile-card" class="card small sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="css/imgs/user-bg.jpg">
              <img class="circle responsive-img card-profile-image activator" src="css/imgs/team1.jpg" alt="123">
            </div>
            <div class="card-content">
              <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right blue accent-3">
                <i class="material-icons">person</i>
              </a>
              <span class="card-title activator grey-text text-darken-4">Patient Name</span>
              <a href="OnAudioCall.html" class="btn-floating btn-medium waves-effect waves-light blue accent-3" style="margin-right: 10px;"><i class="material-icons">call</i></a>
              <a href="OnVideoCall.html"class="btn-floating btn-medium waves-effect waves-light blue accent-3" style="margin-right: 10px;"><i class="material-icons">videocam</i></a>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Patient Name<i class="material-icons right">close</i></span>
              <p>Here is some more information about this patient.</p>
              <p>Age: <label id="patAge" value="" class="grey-text text-darken-4" style="font-size: 16px;">23</label></p>
              <p>Gender: <label id="patGender" value="" class="grey-text text-darken-4" style="font-size: 16px;">Female</label></p>
              <p>Height (cm): <label id="patHeight" value="" class="grey-text text-darken-4" style="font-size: 16px;">163</label></p>
              <p>Username: <label id="patHeight" value="" class="grey-text text-darken-4" style="font-size: 16px;">user123</label></p>
            </div>
          </div>
        </div>
        <!-- Pat Reports -->
        <div class="col s12 m4 l4">
          <div class="card small">
            <div class="card-image">
              <img class="materialboxed" src="css/imgs/R1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">RID: L9087<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Report ID: L9087<i class="material-icons right">close</i></span>
              <p>Doctor: Dr. Hashim</p>
              <p>Patient: user123</p>
              <p>Date: 10/11/2017</p>
              <p style="padding-top: 5%; padding-bottom: 5%;"><a href="#" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">vertical_align_bottom</i>Download</a></p>
            </div>
            <div class="card-action">
              <a href="#viewAllReports" class="blue-text text-lighten-1">All Reports</a>
            </div>
          </div>
        </div>
        <!-- Pat Prescriptions -->
        <div class="col s12 m4 l4">
          <div class="card small">
            <div class="card-image">
              <img class="materialboxed" src="css/imgs/MP1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">PID: L5678<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Prescription ID: L5678<i class="material-icons right">close</i></span>
              <p>Doctor: Dr. Hashim</p>
              <p>Patient: user123</p>
              <p>Date: 03/02/2017</p>
              <p style="padding-top: 5%; padding-bottom: 5%;"><a href="#" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">vertical_align_bottom</i>Download</a></p>
            </div>
            <div class="card-action">
              <a href="#viewAllPrescriptions" class="blue-text text-lighten-1">All Prescriptions</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row" style="background-color: white;">
        <!-- Blood Pressure -->
        <div class="col s12 m6 l6">
            <div class="chart-container">
                <canvas id="lineChart" width="400" height="400"></canvas>
            </div>
        </div>
        <!-- Weight (kg) -->
        <div class="col s12 m6 l6">
            <div class="chart-container">
                <canvas id="barChart" width="400" height="400"></canvas>
            </div>
        </div>
      </div>
      
      <div class="row" id="">
        <!-- Patient problems -->
        <div class="col s12 m6 l6 center-align">
          <ul class="collapsible popout" data-collapsible="accordion">
            <li>
              <div class="collapsible-header blue lighten-4"><i class="fa fa-chain-broken" aria-hidden="true"></i><strong class="flow-text">Allergies</strong></div>
              <div class="collapsible-body blue lighten-5"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li>
              <div class="collapsible-header yellow lighten-4"><i class="fa fa-medkit" aria-hidden="true"></i><strong class="flow-text">Medications</strong></div>
              <div class="collapsible-body yellow lighten-5"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li>
              <div class="collapsible-header red lighten-4"><i class="material-icons">report_problem</i><strong class="flow-text">Problems</strong></div>
              <div class="collapsible-body red lighten-5"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
          </ul>
        </div>
        <!-- Other details -->
        <!-- <div class="card col s12 m4 l4 z-depth-1 center-align" id="">
        </div> -->
      </div> 
    </div>
    
    <!--Doctor Profile -->
    <div class="" id="docProfile"> 
      <h5 class="center-align  light-blue darken-2" style="padding-top: 2%; padding-bottom: 2%;">Profile</h5>
      <div class="card-panel">
        <div class="row">
          <div class="col m6 s12 right-align">
            <img src="css/imgs/Medicine/11.jpg" class="z-depth-3" width="150" height="150">
          </div>
          <div class="col m6 s12 left-align">
            <div class="row">
              <label style="color: black; font-size: 16px; font-weight: 600;" class="col s12">Dr. James Marshall</label>
              <label style="color: black; font-size: 14px;" class="col s12">Family Physician</label>
              <label style="color: #2fbf03; font-size: 14px;" class="col s12">Available now</label>
              <div class="col s12">
                <i class="material-icons" style="color: #ffee58; border-color: #bdbdbd;">star</i>
                <i class="material-icons" style="color: #ffee58; border-color: #bdbdbd;">star</i>
                <i class="material-icons" style="color: #ffee58; border-color: #bdbdbd;">star</i>
                <i class="material-icons" style="color: #ffee58; border-color: #bdbdbd;">star</i>
                <i class="material-icons" style="color: #ffee58; border-color: #bdbdbd;">star</i>
              </div>
            </div>
          </div>         
        </div>

        <ul class="collection" id=staggered-eCalls>
          <li class="collection-item avatar">
            <i class="material-icons circle blue darken-1 medium">school</i>
            <span class="title"><strong>Qualifications</strong></span>
            <p>Yale University, 1991<br>
               Specialization in Physical Medicine
            </p>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle blue darken-1 medium">explicit</i>
            <span class="title"><strong>Years of Experience</strong></span>
            <p>15 years
            </p>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle blue darken-1 medium">access_time</i>
            <span class="title"><strong>Availability</strong></span>
            <p> 9:00 a.m. - 9:00 p.m. (daily)
            </p>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle blue darken-1 medium">perm_contact_calendar</i>
            <span class="title"><strong>Contact Details</strong></span>
            <p>Username:  user12345<br>
            </p>
          </li>
        </ul> 
      </div>
    </div>
    <!-- Appointments -->
    <div class="" id="appointments">
      <h5 class="center-align blue-grey" style="padding-top: 2%; padding-bottom: 2%;">Appointments</h5>
      <div class="card-panel">
        <div class="row">
          <img class="image z-depth-4" src="css/imgs/DA1.jpg" width="100%">
        </div>
        <div class="row">
          <div class="col s12"  style="margin-bottom: 5%;">
            <!-- For medium and large screens -->
            <ul class="tabs tabs-fixed-width hide-on-small-only">
              <li class="tab col s3"><a class="active grey-text text-darken-4" href="#addAppointment" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">add</i>Add Appointment</a></li>
              <li class="tab col s3"><a class="grey-text text-darken-4" href="#allAppointmentssbyDoc" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">date_range</i>All Appointments</a></li>
            </ul>
            <!-- For small screens -->
            <ul class="tabs tabs-fixed-width hide-on-med-and-up">
              <li class="tab col s3"><a class="active grey-text text-darken-4" href="#addAppointment" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">add</i>Add</a></li>
              <li class="tab col s3"><a class="grey-text text-darken-4" href="#allAppointmentssbyDoc" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">date_range</i>All</a></li>
            </ul>
          </div>
          <div id="addAppointment" class="col s12">
            <form>
              <div class="row">
                <div class="input-field col m6 s12">
                  <input id="appointmentTitle" type="text" class="validate">
                  <label class="active" for="appointmentTitle">Appointment Title</label>
                </div>
                <div class="input-field col m6 s12">
                  <input id="appointmentWith" type="text" class="validate">
                  <label class="active" for="appointmentWith">Appointment With</label>
                </div>
                <div class="input-field col m6 s12">
                  <input id="appointmentDate" type="text" class="datepicker">
                  <label class="active" for="appointmentDate">Appointment Date</label>
                </div>
                <div class="input-field col m6 s12">
                  <input id="appointmentTime" type="text" class="timepicker validate">
                  <label class="active" for="appointmentTime">Appointment Time</label>
                </div>
              </div>
              <div class="row center-align">
                <button class="btn waves-effect waves-light blue hoverable" type="button" name="create" style="margin-top:20px; margin-bottom:20px;">Add
                </button>
              </div>
            </form>
          </div>
          <div id="allAppointmentssbyDoc" class="col s12">
            <table class="responsive-table bordered">
            <thead>
              <tr>
                <th>Title</th>
                <th>Patient</th>
                <th>Date</th>
                <th>Time</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>A1</td>
                <td>user123</td>
                <td>13-12-2017</td>
                <td>20:09</td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Recordings -->
    <div class="" id="recordings">
      <h5 class="center-align red accent-3" style="padding-top: 2%; padding-bottom: 2%;">Recordings</h5>
      <div class="card-panel">
        <table class="bordered responsive-table">
          <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Duration</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alvin</td>
              <td>1m</td>
              <td>20-12-13</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>3hr</td>
              <td>10-10-10</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>4m</td>
              <td>13-12-12</td>
            </tr>
          </tbody>
        </table>
      </div>  
    </div>
    <!-- Reports by doctor -->
    <div class="" id="reports"> 
      <h5 class="center-align cyan" style="padding-top: 2%; padding-bottom: 2%;">Reports</h5>
      <div class="card-panel">
        <div class="row">
          <div class="col s12"  style="margin-bottom: 5%;">
            <!-- For medium and large screens -->
            <ul class="tabs tabs-fixed-width hide-on-small-only">
              <li class="tab col s3"><a class="active grey-text text-darken-4" href="#createReport" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">edit</i>Create Report</a></li>
              <li class="tab col s3"><a class="grey-text text-darken-4" href="#allReportsbyDoc" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">description</i>All Reports</a></li>
            </ul>
            <!-- For small screens -->
            <ul class="tabs tabs-fixed-width hide-on-med-and-up">
              <li class="tab col s3"><a class="active grey-text text-darken-4" href="#createReport" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">edit</i>Create</a></li>
              <li class="tab col s3"><a class="grey-text text-darken-4" href="#allReportsbyDoc" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">description</i>All</a></li>
            </ul>
          </div>
          <div id="createReport" class="col s12">
            <form action="#">
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input id="docName" type="text" class="validate" placeholder="Doctor ID">
                </div>
                <div class="input-field col s12 m6 l6">
                  <input id="patName" type="text" class="validate" placeholder="Patient ID">
                </div>
              </div>

              <div class="row">
                <div class="col s12 m6 l6">
                  <div class="file-field input-field">
                    <div class="">
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Choose report from your directory">
                    </div>
                  </div>
                </div>

                <div class="col s12 m6 l6">
                  <input type="text" class="datepicker" placeholder="Date"  style="height: 3.6rem;">
                </div>
              </div>

              <div class="row center-align">
                <button class="btn waves-effect waves-light blue hoverable" type="button" name="create" style="margin-top:20px; margin-bottom:20px;">Create
                </button>
              </div>
            
            </form>
          </div>
          <div id="allReportsbyDoc" class="col s12">
            <div class="row center-align">
              <form style="margin-left: 25%; margin-right: 25%;">
                <div class="input-field card z-depth-2" style="margin-left: 15px; margin-right: 15px; border-radius: 25px;">
                  <input id="searchReport" type="search" placeholder="Search patient report by patient ID" required>
                  <label class="label-icon" for="searchReport"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
            <div class="row">
              <div class="col s12 m4 l4">
                <div class="card small">
                  <div class="card-image">
                    <img class="materialboxed" src="css/imgs/R1.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">RID: L9087<i class="material-icons right">more_vert</i></span>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">RID: L9087<i class="material-icons right">close</i></span>
                    <p>Doctor: Dr. Ali</p>
                    <p>Patient: user123</p>
                    <p>Date: 10/11/2017</p>
                    <p style="padding-top: 5%; padding-bottom: 5%;"><a href="#" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">vertical_align_bottom</i>Download</a></p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 l4">
                <div class="card small">
                  <div class="card-image">
                    <img class="materialboxed" src="css/imgs/R1.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">RID: L9087<i class="material-icons right">more_vert</i></span>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">RID: L9087<i class="material-icons right">close</i></span>
                    <p>Doctor: Dr. Ali</p>
                    <p>Patient: user123</p>
                    <p>Date: 10/11/2017</p>
                    <p style="padding-top: 5%; padding-bottom: 5%;"><a href="#" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">vertical_align_bottom</i>Download</a></p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 l4">
                <div class="card small">
                  <div class="card-image">
                    <img class="materialboxed" src="css/imgs/R1.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">RID: L9087<i class="material-icons right">more_vert</i></span>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">RID: L9087<i class="material-icons right">close</i></span>
                    <p>Doctor: Dr. Ali</p>
                    <p>Patient: user123</p>
                    <p>Date: 10/11/2017</p>
                    <p style="padding-top: 5%; padding-bottom: 5%;"><a href="#" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">vertical_align_bottom</i>Download</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Prescriptions by doctor -->
    <div class="" id="prescriptions"> 
      <h5 class="center-align teal" style="padding-top: 2%; padding-bottom: 2%;">Prescriptions</h5>
      <div class="card-panel">
        <div class="row">
          <div class="col s12"  style="margin-bottom: 5%;">
            <!-- For medium and large screens -->
            <ul class="tabs tabs-fixed-width hide-on-small-only">
              <li class="tab col s3"><a class="active grey-text text-darken-4" href="#createPrescription" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">edit</i>Create Prescription</a></li>
              <li class="tab col s3"><a class="grey-text text-darken-4" href="#allPrescriptionsbyDoc" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">web</i>All Prescriptions</a></li>
            </ul>
            <!-- For small screens -->
            <ul class="tabs tabs-fixed-width hide-on-med-and-up">
              <li class="tab col s3"><a class="active grey-text text-darken-4" href="#createPrescription" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">edit</i>Create</a></li>
              <li class="tab col s3"><a class="grey-text text-darken-4" href="#allPrescriptionsbyDoc" style="font-size: 16px; font-weight: 500;"><i class="material-icons" style="padding-right: 3%;">web</i>All</a></li>
            </ul>
          </div>
          <div id="createPrescription" class="col s12">
            <form action="#">
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input id="docName" type="text" class="validate" placeholder="Doctor ID">
                </div>
                <div class="input-field col s12 m6 l6">
                  <input id="patName" type="text" class="validate" placeholder="Patient ID">
                </div>
              </div>

              <div class="row">
                <div class="col s12 m6 l6">
                  <div class="file-field input-field">
                    <div class="">
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Choose prescription from your directory">
                    </div>
                  </div>
                </div>

                <div class="col s12 m6 l6">
                  <input type="text" class="datepicker" placeholder="Date"  style="height: 3.6rem;">
                </div>
              </div>

              <div class="row center-align">
                <button class="btn waves-effect waves-light blue hoverable" type="button" name="create" style="margin-top:20px; margin-bottom:20px;">Create
                </button>
              </div>
            
            </form>
          </div>
          <div id="allPrescriptionsbyDoc" class="col s12">
            <div class="row center-align">
              <form style="margin-left: 25%; margin-right: 25%;">
                <div class="input-field card z-depth-2" style="margin-left: 15px; margin-right: 15px; border-radius: 25px;">
                  <input id="searchReport" type="search" placeholder="Search patient prescription by patient ID" required>
                  <label class="label-icon" for="searchReport"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
            <div class="row">
              <div class="col m4 s12">
          <div class="card small">
            <div class="card-image">
              <img class="materialboxed" src="css/imgs/MP1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">PID: L9087<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">PID: L9087<i class="material-icons right">close</i></span>
              <p>Doctor: Dr. Ali</p>
              <p>Patient: user123</p>
              <p>Date: 10/11/2017</p>
              <p style="padding-top: 5%; padding-bottom: 5%;"><a href="#" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">vertical_align_bottom</i>Download</a></p>
            </div>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card small">
            <div class="card-image">
              <img class="materialboxed" src="css/imgs/MP1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">PID: L5647<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">PID: L5647<i class="material-icons right">close</i></span>
              <p>Doctor: Dr. Ali</p>
              <p>Patient: user123</p>
              <p>Date: 03/02/2017</p>
              <p style="padding-top: 5%; padding-bottom: 5%;"><a href="#" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">vertical_align_bottom</i>Download</a></p>
            </div>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card small">
            <div class="card-image">
              <img class="materialboxed" src="css/imgs/MP1.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">PID: L1234<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">PID: L1234<i class="material-icons right">close</i></span>
              <p>Doctor: Dr. Ali</p>
              <p>Patient: user123</p>
              <p>Date: 10/08/2016</p>
              <p style="padding-top: 5%; padding-bottom: 5%;"><a href="#" class="waves-effect waves-light btn blue darken-1"><i class="material-icons left">vertical_align_bottom</i>Download</a></p>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Settings-Content -->
    <!-- Account Settings Content -->
    <div class="" id="accountSettings"> 
      <h5 class="center-align purple lighten-2" style="padding-top: 2%; padding-bottom: 2%;">Account Settings</h5>
      <ul class="collapsible popout" data-collapsible="expandable" id=staggered-test>
        <!-- User Profile -->
        <li>
          <div class="collapsible-header grey-text text-darken-4" style="font-size: 16px; font-weight: 500;"><i class="material-icons">edit</i>Edit Profile</div>
          <div class="collapsible-body userProfile">
            <span>
              <div class="row center-align jumbotron">
                <div class="col s2 push-s5">
                  <img src="css/imgs/User.png" alt="" class="circle responsive-img">
                  <a class="btn-floating halfway-fab waves-effect waves-light blue hoverable"><i class="material-icons">camera_alt</i></a>
                </div>
              </div>

              <!-- user data -->
              <div class="container hoverable">
                <form action="#">
                  <div class="input-field col s6">
                    <input type="text" id="firstName" value="Alvin" class="validate">
                    <label for="firstName">FIRST NAME</label>
                  </div>
                
                  <div class="input-field col s6">
                    <input type="text" id="lastName" value="Alvin" class="validate">
                    <label for="lastName">LAST NAME</label>
                  </div>

                  <div class="input-field col s6">
                    <input type="text" id="userName" value="Alvin" class="validate">
                    <label for="userName">USERNAME</label>
                  </div>

                  <div class="input-field col s6">
                    <select>
                      <optgroup label="Physician">
                        <option value="1">Family Physician</option>
                        <option value="2">Option 2</option>
                      </optgroup>
                      <optgroup label="Eye Specialist">
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                      </optgroup>
                    </select>
                    <label style="left: 0.2rem;">DEPARTMENT</label>
                  </div>

                  <div class="input-field col s6">
                    <textarea id="qualifucations" value="" class="materialize-textarea" value=""></textarea>
                    <label for="qualifucations">QUALIFICATIONS</label>
                  </div>
                  
                  <div class="input-field col s6">
                    <input type="text" id="exp" value="15 years" class="validate">
                    <label for="exp">YEARS OF EXPERIENCE</label>
                  </div>

                  <div class="input-field col s6">
                    <input type="number" id="age" value="42" class="validate">
                    <label for="age">AGE</label>
                  </div>
                  
                  <div class="input-field col s6">
                    <input type="text" class="timepicker" id="startTime" value="15:20">
                    <label for="startTime">START TIME</label>
                  </div>
                  
                  <div class="input-field col s6">
                    <input type="text" class="timepicker" id="endTime" value="15:20">
                    <label for="endTime">END TIME</label>
                  </div>
                  
                  <div class="input-field col s6">
                    <input type="number" id="phoneNumber" value="03334565082" class="validate">
                    <label for="phoneNumber">PHONE NUMBER</label>
                  </div>

                  <div class="input-field col s6">
                    <input type="email" id="emailID" value="alvin432@gmail.com" class="validate">
                    <label for="emailID">EMAIL ADDRESS</label>
                  </div>

                  <div class="input-field col s6">
                    <input type="text" id="password" value="*******" class="validate">
                    <label for="password">PASSWORD</label>
                  </div>

                  <div class="row" id="rdBtn">
                    <label>GENDER</label><br>
                    <input type="radio" name="gender" id="male" value="male" class="validate with-gap" checked />
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female" class="validate with-gap" />
                    <label for="female">Female</label>
                  </div>
                  
                  <div class="center-align">
                    <button class="btn waves-effect waves-light blue  hoverable" type="button" name="action" style="margin-top:20px; margin-bottom:20px">Save
                    </button>
                  </div>
                </form>
              </div>  <!-- ./ container -->
            </span>
          </div>
        </li>
        <!-- Security-->
        <li>
          <div class="collapsible-header grey-text text-darken-4" style="font-size: 16px; font-weight: 500;"><i class="material-icons">lock</i>Security</div>
          <div class="collapsible-body" style="padding-left: 10%; padding-right: 10%;">
            <span>  
              <div class="col s12 center-align">
                <span class="fa-stack fa-5x">
                  <i class="fa fa-circle fa-stack-2x" ></i>
                  <i class="fa fa-lock fa-stack-1x fa-inverse waves-effect waves-light"></i>  <!-- green darken-1 -->
                </span>
              </div>

              <div class="row">
                <p>Your records are secured with end-to-end encryption, which means other parties can't read or listen to them.</p>
              </div>
              <div class="row">
                <a style="font-size: 12px; color: blue" type="button" href="#">Learn more about Remote Doctor security.</a>
              </div>
              <div class="divider"></div>
              <br>
              <div class="row">
                <p><strong>Show security notifications</strong></p>
              </div>
              <div class="row">
                <div class="col l6 m6 s12 left-align">
                  <p style="text-align: justify;">Turn on this setting to receive notifications when a security code changed. Your records are encrypted regardless of this setting.</p>  
                </div>
               <div class="col l6 m6 s12 left-align">
                  <!-- Switch -->
                  <div class="switch">
                    <label>
                      <input type="checkbox">
                      <span class="lever"></span>
                    </label>
                  </div>
                </div>
              </div>
            </span>
          </div>
        </li>
        <!-- Delete an account -->
        <li>
          <div class="collapsible-header grey-text text-darken-4" style="font-size: 16px; font-weight: 500;"><i class="material-icons">delete</i>Delete Account</div>
          <div class="collapsible-body deleteAccount">
            <span>  
              <div class="outer">
                <h6 class="flow-text center-align" style="color: red;">Delete Your Account Will:</h6>
                <p><b>*</b> Delete your account from Remote Doctor</p>
                <p><b>*</b> Erase your medical history</p>
                <p><b>*</b> Delete your all reports</p>
                <p><b>*</b> Delete your all prescriptions</p>
                <p><b>*</b> Delete your all backup</p>
                <br>
                <p>To delete your account from Remote Doctor, confirm your username.</p>
                
                <div class="row" style="margin-bottom: 0;">
                  <form class="col s12">
                    <div class="row" style="margin-bottom: 0;">
                      <div class="input-field col s12">
                        <input id="username" type="text" class="validate">
                        <label for="username">Username</label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="center-align" style="margin-top: 3%;">
                <a class="waves-effect waves-light btn red"><i class="material-icons left">delete</i>DELETE MY ACCOUNT</a>
              </div>
            </span>
          </div>
        </li>
      </ul>
    </div>  <!-- ./ Account Settings Content -->
    <!-- Notifications Content -->
    <div class="" id="notifications">
      <h5 class="center-align amber" style="padding-top: 2%; padding-bottom: 2%;">Notifications</h5>
      <div class="card-panel">
        <div class="row">
          <p><strong>Conversation tones</strong></p>
          <div class="col l6 m6 s10 left-align">
            <p style="text-align: justify;">Play sounds for incoming and outgoing messages and calls.</p>  
          </div>
          <div class="col l6 m6 s2 left-align">
            <form>
             <span class="remember-me-check">
                <input type="checkbox" id="remember-me" />
                <label for="remember-me" style="color: black;"></label>
              </span>
            </form>
          </div>
        </div>
        <div class="row">
          <p><strong>Message notifications</strong></p>
          <div class="row">
            <div class="col s12">
              <h6>Notification tone</h6>
              <form action="#">
                <div class="file-field input-field">
                  <div class="">
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" value="asd.mp3">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row hide-on-large-only">
            <div class="col s6">
                <h6>Vibrate</h6>
            </div>
            <div class="col s6">
              <!-- Switch -->
              <div class="switch">
                <label>
                  <input type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s6">
              <h6>Popup notification</h6>
            </div>
            <div class="col s6">
              <!-- Switch -->
              <div class="switch">
                <label>
                  <input type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <p><strong>Call notifications</strong></p>
          <div class="col s12">
            <h6>Ringtone</h6>
            <form action="#">
              <div class="file-field input-field">
                <div class="">
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text"  value="ring3.mp3">
                </div>
              </div>
            </form>
          </div>
          <div class="row hide-on-large-only">
            <div class="col s6">
              <h6>Vibrate</h6>
            </div>
            <div class="col s6">
              <!-- Switch -->
              <div class="switch">
                <label>
                  <input type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  <!-- ./ Notifications Content -->  
    <!-- Contact Us -->
    <div class="" id="contact">
      <h5 class="center-align light-blue darken-1" style="padding-top: 2%; padding-bottom: 2%;">Contact Us</h5>
      <div class="card-panel">
        <div class="row">
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

  <footer class="">
    <div class="footer-copyright">
      <div class="col s12 center-align">
        Copyright © 2017, Remote Doctor. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Chart Js -->
  <script src="js/Chart.js"></script> 
  <script src="js/myCharts.js"></script>
  <!--JS -->
  <script type="text/javascript">
    $(document).ready(function(){
      // Initialize materialbox
      $('.materialboxed').materialbox();
      // Initialize carousel
      $('.carousel').carousel();
      // Initialize tooltip
      $('.tooltipped').tooltip({delay: 50});
      // Initialize collapse button
      $(".button-collapse").sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens,
      });
      // Initialize collapsible (uncomment the line below if you use the dropdown variation)
      $('.collapsible').collapsible({
        // accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style*
        // onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
        // onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
      });
      $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: true, // Change width of dropdown to that of the activator
        hover: false, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
      });
    });
    
    //Scrolling
    // jQuery(document).ready(function($) {
    //   $('a[href^="#"]').bind('click.smoothscroll',function (e) {
    //     e.preventDefault();
    //     var target = this.hash,
    //         $target = $(target);

    //     $('html, body').stop().animate( {
    //       'scrollTop': $target.offset().top
    //     }, 1000, 'swing', function () {
    //       window.location.hash = target;
    //     } );
    //   } );
    // } );
    
    function showAll(divId) {
      $("#" + divId).hide();
      $("#appTable").show();
    }

    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year,
      today: 'Today',
      clear: 'Clear',
      close: 'Ok',
      closeOnSelect: false // Close upon selecting a date,
    });
    $('.timepicker').pickatime({
      default: 'now', // Set default time: 'now', '1:30AM', '16:30'
      fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
      twelvehour: false, // Use AM/PM or 24-hour format
      donetext: 'OK', // text for done-button
      cleartext: 'Clear', // text for clear-button
      canceltext: 'Cancel', // Text for cancel-button
      autoclose: false, // automatic close timepicker
      ampmclickable: true, // make AM PM clickable
      aftershow: function(){} //Function for after opening timepicker
    });


    //Quallifications of doctor
    $('#qualifucations').val('Yale University, 1991');
    $('#qualifucations').trigger('autoresize');

    //Doctor Department select in edit profile
    $(document).ready(function() {
      $('select').material_select();
    });
  </script>
</body>
</html>