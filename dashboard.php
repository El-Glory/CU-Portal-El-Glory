<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <!--   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  -->  <!--  <meta name="viewport" content="width = devive-width, initial-scale=1">
    --> <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JavaScript</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src = "js/controls.js"></script>
    <script type="text/JavaScript" src="js/print.js"></script>
   
    <script type="text/javascript">
        $(document).ready(function(){
          $('.sidebar').hover(function(){
            $('.main-content').css('margin-left', '230px')}, function(){
            $('.main-content').css('margin-left', "150px");
           
          });
        });

        // $(document).ready(function(){
        //   $('.sidebar').hover(function(){
        //     alert('fish');
        //   })
        // })
    </script>
    </head>
 <body style="background-color:#f4f4f4;">
  <div class="row">
    <nav class="navbar navbar-default" role="navigation" id="navbar" style="height: 69px; margin-top: -40px; background: #ffffff;">
      <ul class="nav navbar-nav">
        <li class="logo" style="margin-top: 7px;"><a href="#"><img src="img/cu logo5.GIF"></a></li>
        <li class="power"><a href="index.php"><i class="fa fa-power-off"  style="font-size: 25px;"></i></a></li>
      </ul>
      
    </nav>

    <nav class="navbar navbar-default sidebar" role="navigation">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
          <ul class="nav navbar-nav">

            <li><a href="#" id ="profile-page">Profile<span style="font-size: 25px;" class="pull-right hidden-xs showopacity fa fa-user"></span></a></li>

            <li class="dropdown">
              <a href="#" id = "course-admin" class="dropdown-toggle" data-toggle="dropdown">Course Admin<span class="caret"></span><span style="font-size: 25px;" class="pull-right hidden-xs showopacity fa fa-th-large"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="#" id="course-evaluation" style="background-color: #e4e4e4;">Course evaluation</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" id = "Finance" data-toggle="dropdown">Finance<span class="caret"></span><span style="font-size: 25px;" class="pull-right hidden-xs showopacity fa fa-cc-visa"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="#" id ="pay-fees" style="background-color: #e4e4e4";>Pay Fees</a></li>
                <li><a href="#" id="payment-receipt" style="background-color: #e4e4e4";>Payment Reciept</a></li>
              </ul>
            </li>
 
            <li class="dropdown">
              <a href="#" id="grading" class="dropdown-toggle" data-toggle="dropdown">Grading<span class="caret"></span><span style="font-size: 25px;" class="pull-right hidden-xs showopacity fa fa-bar-chart"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="#" id="attendance-ca" style="background-color: #e4e4e4;">Attendance & C.A</a></li>
                
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" id="registration" class="dropdown-toggle" style="" data-toggle="dropdown">Registration<span class="caret"></span><span style="font-size: 25px;" class="pull-right hidden-xs showopacity fa fa-files-o"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="#" id="add-drop" style="background-color: #e4e4e4;">Add & Drop</a></li>
                <li><a href="#" id="course-registration" style="background-color: #e4e4e4;">Course Registratn.</a></li>
                <li><a href="#" id="eds-practical" style="background-color: #e4e4e4;">EDS Practical</a></li>
                <li><a href="#" id="print-registration" style="background-color: #e4e4e4;">Print Registration</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" id="result" class="dropdown-toggle" data-toggle="dropdown">Results<span class="caret"></span><span style="font-size: 25px;" class="pull-right hidden-xs showopacity fa fa-file-text"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="#" id="unofficial-transcript" style="background-color: #e4e4e4;">Unofficial Transcript</a></li>
                <li><a href="#" id="request-official" style="background-color: #e4e4e4;">Request Official</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" id="resumption" class="dropdown-toggle" data-toggle="dropdown">Resumption<span class="caret"></span><span style="font-size: 25px;" class="pull-right hidden-xs showopacity fa fa-file-o"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="#" id="print-clearance" style="background-color: #e4e4e4;">Print Clearance</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" id="settings" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span><span style="font-size: 25px;" class="pull-right hidden-xs showopacity fa fa-cogs"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="index.php" id="logout" style="background-color: #e4e4e4;">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>

      </div><!-- container-fluid -->
    </nav>



    <div class="main-content" style="margin-left: 150px; height: 500px;">
     
     <?php
       include_once("partials/profile-page.php");
       include_once("partials/course-evaluation.php");
       include_once("partials/pay-fees.php");
       include_once("partials/payment-receipt.php");
       include_once("partials/attendance-ca.php");
       include_once("partials/add-drop.php");
       include_once("partials/course-registration.php");
       include_once("partials/eds-practical.php");
       include_once("partials/print-registration.php");
       include_once("partials/print-transcript.php");
       include_once("partials/print-clearance.php");

     ?>

    </div>


   <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  </body>
  </html>