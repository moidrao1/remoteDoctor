<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

if (!isset ($_SESSION ['user'] )) {

  echo '<script type="text/javascript">
           window.location = "./index.php#login-content"
       </script>';
 
}

?>
<html>
<head>
    <title>On Audio Call</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/onCall.css" />
</head>
<body>
    <section class="bg">
        <div class="inner">
            <div class="content">
                <div class="row center-align ">
                    <div class="col s2"><i class="material-icons">arrow_back</i></div>
                    <div class="col s8"><h5 class="center-align">REMOTE DOCTOR CALL</h5></div>
                </div>
            </div>
            <div class="container center-align hidden" id="userDiv">
                <div class="col s12 center-align"><label id="" class="grey-text text-darken-4" style="font-size: 16px;">Username</label></div>
                <img src="css/imgs/user.png" class="circle responsive-image" alt="" width="150" height="150">
            </div>
            
            <div class="row" id="displayDivs">
                <div class="col s12 m6 l6">
                    <div class="container center-align" id="" style="padding-bottom: 5px;">
                        <div class="row">
                            <div class="col s12 center-align"><label id="" class="grey-text text-darken-4" style="font-size: 16px;">Pat Username</label></div>
                        </div>
                        <img src="css/imgs/user.png" class="circle responsive-image" alt="" width="250" height="250">
                    </div>
                </div>

                <div class="col s12 m6 l6">
                    <div class="container center-align" id="" style="padding-bottom: 5px;">
                        <div class="row">
                            <div class="col s12 center-align"><label id="" class="grey-text text-darken-4" style="font-size: 16px;">Doc Username</label></div>
                        </div>
                        <img src="css/imgs/user.png" class="circle responsive-image" alt="" width="250" height="250">
                        <!--<video class="responsive-video" controls>
                           <source src="movie.mp4" type="video/mp4">
                        </video>
                         -->
                    </div>
                </div>
            </div>

            <div class="container row center-align">
                <div class="col s3" >
                    <a href="#volume_up" class="btn btn-floating btn-medium teal"><i class="material-icons">volume_up</i></a>
                </div>
                <div class="col s3">
                    <a href="#videocam" id="videocam" style="display: none;" class="btn btn-floating btn-medium orange" onclick="javascript:showVideo('videocam');"><i class="material-icons">videocam</i></a>
                    
                    <a href="#videocam_off" id="videocamOff" class="btn btn-floating btn-medium orange" onclick="javascript:hideVideo('videocamOff');"><i class="material-icons">videocam_off</i></a>
                </div>
                <div class="col s3">
                    <a href="#mic_off" class="btn btn-floating btn-medium indigo darken-1"><i class="material-icons">mic_off</i></a>
                </div>
                <div class="col s3">
                    <a href="#goback" class="btn btn-floating btn-medium red"><i class="material-icons">call_end</i></a>
                </div>
            </div>
            <!-- <div class="container row center-align">
                <div class="col s12">
                    <a href="#goback" class="btn btn-floating btn-medium red"><i class="material-icons">call_end</i></a>
                </div>
            </div> --><!-- 
            <div class="container">
                <div class="fixed-action-btn vertical">
                    <a class="btn-floating btn-medium light-blue">
                      <i class="large material-icons">add</i>
                    </a>
                    <ul>
                      <li><a class="btn-floating light-blue"><i class="material-icons">mic</i></a></li>
                      <li><a class="btn-floating light-blue"><i class="material-icons">photo_camera</i></a></li>
                      <li><a class="btn-floating light-blue"><i class="material-icons">attach_file</i></a></li>
                    </ul>
                </div>
            </div> -->
        </div>
    </section>
<!-- Fixed bottom navbar -->
    <!--JS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script> 
    <script type="text/javascript">
    function showVideo(divId) {
      $("#" + divId).hide();
      $("#userDiv").hide();
      $("#displayDivs").show();
      $("#videocamOff").show();
    }
    function hideVideo(divId) {
      $("#" + divId).hide();
      $("#displayDivs").hide();
      $("#videocam").show();
      $("#userDiv").show();
    }
    </script>
</body>
</html>