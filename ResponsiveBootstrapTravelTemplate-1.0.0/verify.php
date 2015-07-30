<?php
require_once 'usa2sa_cred.php';
$mysqli=connect($dbhost,$dbuser,$dbpass,$dbname);
$email=$_GET['email'];
echo $email;
$gHash=$_GET['verify_hash'];
$result = $mysqli->query("SELECT Verify_Hash FROM userlist WHERE email='$email'");
$hash=$result->fetch_array();
echo
    '<!doctype html>
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
          <div class = "nav pull-right" data-toggle="modal" data-target="#myModal2">
              <li><a href="myModal2" id ="loginLink">Login</a></li>
              </div>
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
                <h4 class="modal-title" id="myModalLabel">Login</h4>
              </div>
              <div class="modal-body">
                  <form method="post" action="usa2sa_login.php">              
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-user"></i></span>
                          <input type="text" name = "username2" id = "username2"  class="form-control" placeholder="Enter Username" aria-describedby="basic-addon1" required>
                          
                      </div> 
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-lock"></i></span>
                          <input required class="form-control" type="password" name="password3" id="password3" placeholder="Enter Password Here" aria-describedby="basic-addon1" required>
                          </div>
                      <button  type="submit" class="btn btn-primary" id= "login-submit">Login!</button>
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
      <h1 class="text-center">Verification Message</h1>
      ';
       if($hash[0] == $gHash)
       {
    $mysqli->query("UPDATE userlist SET verified ='1' WHERE email ='$email'");
    echo'You have been verified please click here to return to the <a href="main.php">Home page</a> or login in using the "login" button above';
       }else
       {
    echo'Not verified try registration again';
        }
   echo '
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
</div>
</body>
</html>';


?>