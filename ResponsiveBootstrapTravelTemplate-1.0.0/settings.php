<?php
require_once 'usa2sa_cred.php';
session_start();
$myusername = $_SESSION['usa2sa_myusername'];

echo'
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>USA2SA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" />
 
<script type="text/javascript" src="bootstrap/js/jquery.js"></script><script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><script type="text/javascript" src="ScriptLibrary/dmxGoogleMaps.js"></script>
<script src="popup.js"></script>

</head>

<body>
<nav>
  <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
      <div class="container"> 
        
        <!-- .btn-navbar is used as the toggle for collapsed navbar content --> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> 
        
        <!-- Be sure to leave the brand out there if you want it shown --> 
        <a class="brand" href="#">USA2SA</a> 
        
        <!-- Everything you want hidden at 940px or less, place within here -->
        <div class="nav-collapse collapse"> 
          <!-- .nav, .navbar-search, .navbar-form, etc -->
          <ul class="nav">
            <li class="active"> <a href="index.html">Home</a> </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Locations</a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Cape%20Town.php">Cape Town</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Johannesburg.php">Johannesburg</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Durban.php">Durban</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Catergories</a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Social.php?param=All">Social</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Adventure.php?param=All">Adventure</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Landmarks.php?param=All">Landmarks</a></li>
                </ul>
            </li>
          </ul>
        </div>
          <div class = "nav pull-right">
          <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">'.$myusername.'\'s options <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Manage Account</a></li>
            <li class="divider"></li>
            <li><a href="usa2sa_logout.php">Logout</a></li>
        </ul>
    </li>
              
          </div>
      </div>
    </div>
  </div>
</nav>

 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Change Password</h4>
              </div>
              <div class="modal-body">
                  <form method="post" action="usa2sa_updatepassmail.php">              
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-lock"></i></span>
                          <input type="password" name = "password4" id = "password4"  class="form-control" placeholder="Enter current password" aria-describedby="basic-addon1" required>                          
                      </div> 
                      
                     <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-lock"></i></span>
                          <input required class="form-control" type="password" name="password" id="password" placeholder="Password must be 6 or more characters" pattern=".{6,}"aria-describedby="basic-addon1">
                      </div><br>
                      
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-lock"></i></span>
                          <input required class="form-control" type="password" name="password2" id="password2" onkeyup="checkPassLength(this)" placeholder="re-enter passowrd" pattern=".{6,}" aria-describedby="basic-addon1">
                      </div>
                      <span class="bspan" id="passinfo">6 characters required.</span><br>
                      <hr>
                      <button disabled = "disabled" type="submit" class="btn btn-danger" id= "password-change">Change Password!</button>
                      </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update E-mail Address</h4>
              </div>
              <div class="modal-body">
                  <form method="post" action="usa2sa_updatepassmail.php">              
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-lock"></i></span>
                          <input type="password" name = "password5" id = "password5"  class="form-control" placeholder="Enter Password Here" aria-describedby="basic-addon1" required>                          
                      </div>                       
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-envelope"></i></span>
                          <input required class="form-control" type="e-mail" name="e-mail" id="e-mail"  placeholder="Enter E-mail" aria-describedby="basic-addon1">
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-primary" id= "password-change">Update E-mail!</button>
                      </form>
                </div>
              </div>
            </div>
          </div>
<header class="hidden-phone">
        <h2 class="header-title">South Africa</h2>
    </header>
<div class="container" id="main">
  <div class="row">
    <div class="span12">
      <h1 class="text-center">Account Management</h1>
    </div>
  </div>
  <div id="usa2sa_alertsys">
  
</div>
    <button type="button" class="btn-warning btn-block" data-toggle="modal" data-target="#myModal2">Change Password</button>
    <button type="button" class="btn-info btn-block" data-toggle="modal" data-target="#myModal">Change E-mail</button>
    
  </div>
</div>

<footer class="hidden-phone">
  <div class="container">
    <div class="row">
      <div class="span3">
        <address>
        <strong>Product Owner</strong><br />
        Nicholas Gamarra<br />
        <i class="icon-white icon-signal"></i> (561) 456-7890<br />
        <i class="icon-envelope icon-white"></i> ngamarra2014@fau.edu
        </address>
      </div>
      <div class="span3">
        <address>
        <strong>Scrum Master</strong> <br />
        David Mendieta<br />
        <i class="icon-white icon-signal"></i> (561) 456-7890<br />
        <i class="icon-envelope icon-white"></i> dmendie1@fau.edu
        </address>
      </div>
      <div class="span3">
        <address>
        <strong>Developer Team</strong> <br />
        Hope Ashmeade<br />
        <i class="icon-white icon-signal"></i> (561) 456-7890<br />
        <i class="icon-envelope icon-white"></i> hashmeade2014@fau.edu
        </address>
      </div>
      <div class="span3">
        <address>
        <strong>Developer Team</strong><br />
        Adeola Adebiyi<br />
        <i class="icon-white icon-signal"></i> (561) 456-7890<br />
        <i class="icon-envelope icon-white"></i> aadebiyi@fau.edu
        </address>
      </div>
    </div>
    <div class="row">
      <div class="span12" id="footer-bottom">
        <div class="row">
          <div class="span6 text-left" id="footer-left">
            <p>Copyright © 2015 USA2SA. All rights reserved.</p>
          </div>
          <div class="span6 text-right" id="footer-right">
            <p>Terms and conditions</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="visible-phone footer-phone">
  <div class="container">
    <div class="row">
      <div class="span12 text-center">
        <address>
        <strong>Product Owner</strong><br />
        Nicholas Gamarra<br />
        <i class="icon-white icon-signal"></i> (561) 456-7890<br />
        <i class="icon-envelope icon-white"></i> ngamarra2014@fau.edu
        </address>
      </div>
    </div>
  </div>
</div>';
if($_SESSION['usermailerror']==true)
{
    echo
        '
        <script>
       /*jQuery("#usa2sa_alertsys").append(" <div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> A user has already registered that e-mail.
</div>");*/
         document.getElementById("usa2sa_alertsys").innerHTML="<div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;<\/a>  <strong>Error!</strong> Either that e-mail is already registered or the password you entered is incorrect.<\/div>";
        </script>
        ';
    $_SESSION['usermailerror']=false;
    
}else if($_SESSION['usermailsuccess']==true)
{
     echo
        '
        <script>
       /*jQuery("#usa2sa_alertsys").append(" <div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> A user has already registered that e-mail.
</div>");*/
         document.getElementById("usa2sa_alertsys").innerHTML="<div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;<\/a>  <strong>Success!</strong> Your e-mail has been updated.<\/div>";
        </script>
        ';
    $_SESSION['usermailsuccess']=false;
    
}

if($_SESSION['userpasserror']==true)
{
    echo
        '
        <script>
       /*jQuery("#usa2sa_alertsys").append(" <div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> A user has already registered that e-mail.
</div>");*/
         document.getElementById("usa2sa_alertsys").innerHTML="<div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;<\/a>  <strong>Error!</strong> Your password is incorrect.<\/div>";
        </script>
        ';
    $_SESSION['userpasserror']=false;
    
}else if($_SESSION['userpasssuccess']==true)
{
     echo
        '
        <script>
       /*jQuery("#usa2sa_alertsys").append(" <div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> A user has already registered that e-mail.
</div>");*/
         document.getElementById("usa2sa_alertsys").innerHTML="<div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;<\/a>  <strong>Success!</strong> Your password has been changed.<\/div>";
        </script>
        ';
    $_SESSION['userpasssuccess']=false;
    
}
echo'
</body>
</html>

';

echo'
</body>
</html>

';



?>