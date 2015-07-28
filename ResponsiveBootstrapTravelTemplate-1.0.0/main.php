<?php
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
<script src="popup.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script><script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><script type="text/javascript" src="ScriptLibrary/dmxGoogleMaps.js"></script>
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
          <div class = "nav pull-right" data-toggle="modal" data-target="#myModal">
              <li><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
          </div>
      </div>
    </div>
  </div>
</nav>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
              </div>
              <div class="modal-body">
                  <form method="post" action="USA2S_registerlogin.php">
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-envelope"></i></span>
                          <input type="email" name = "e-mail"  id ="email" required class="form-control" placeholder="Enter E-mail address" aria-describedby="basic-addon1">
                      </div>
                      <span class="bspan" id="mailinfo"></span><br>
                      
                      <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><i class="icon-user"></i></span>
                          <input type="text" name = "username" id = "username" onkeyup="checkUserLength(this)" pattern=".{6,}" class="form-control" placeholder="Enter Username" aria-describedby="basic-addon1">
                      </div>
                      <span class="bspan" id="userinfo">6 characters required.</span><br>
                  
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
                      <button disabled = "disabled" type="button" class="btn btn-primary" id= "register-submit">Sign in</button>
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
      <h1 class="text-center">Popular Locations</h1>
    </div>
  </div>
  <div class="row">
    <div class="span4 offer">
    	<div class="offer-wrap">
   	    <img src="./Pictures/CapeTown.jpg" alt="140x140" />
        <div class="btn-group">
            <button class="btn btn-small" type="button"><em class="icon-info-sign"></em></button>
            <button class="btn btn-small" type="button"><em class="icon-plane"></em></button>
            <button class="btn btn-small" type="button"><em class="icon-camera"></em></button>
          </div>
        <div class="padding">
        <h2 class="text-center text-info">Cape Town</h2>
            <p class = "text-center"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><p>       
        </div>
        </div>
    </div>
    <div class="span4 offer">
    	<div class="offer-wrap">
   	    <img src="./Pictures/johannesburg-homepage.jpg" alt="140x140" />
        <div class="btn-group">
            <button class="btn btn-small" type="button"><em class="icon-info-sign"></em></button>
            <button class="btn btn-small" type="button"><em class="icon-plane"></em></button>
            <button class="btn btn-small" type="button"><em class="icon-camera"></em></button>
          </div>
        <div class="padding">
        <h2 class="text-center text-info">Johannesburg</h2>
          <p class = "text-center"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><p>        
        </div>
        </div>
    </div>
    <div class="span4 offer">
    	<div class="offer-wrap">
   	    <img src="./Pictures/Durban.jpg" alt="140x140" />
        <div class="btn-group">
            <button class="btn btn-small" type="button"><em class="icon-info-sign"></em></button>
            <button class="btn btn-small" type="button"><em class="icon-plane"></em></button>
            <button class="btn btn-small" type="button"><em class="icon-camera"></em></button>
          </div>
        <div class="padding">
        <h2 class="text-center text-info">Durban</h2>
          <p class = "text-center"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><p>  
        </div>
        </div>
    </div>
  </div>
  <div class="row">
      <div class="span12">
      <h1 class="text-center">Popular Attractions/Activities</h1>
    </div>
    <div class="span4 offer">
      <div class="offer-wrap"> <img src="http://www.placehold.it/800x450/ddd/bbb&text=Image" alt="140x140" /> <span class="label label-success">Label</span>
        <div class="btn-group">
          <button class="btn btn-small" type="button"><em class="icon-info-sign"></em></button>
          <button class="btn btn-small" type="button"><em class="icon-plane"></em></button>
          <button class="btn btn-small" type="button"><em class="icon-camera"></em></button>
        </div>
        <div class="padding">
          <h2 class="text-center text-info">Destination</h2>
          <h4 class="text-center">Lorem ipsum dolor <span class="badge badge-warning">10%</span></h4>
        </div>
      </div>
    </div>
    <div class="span4 offer">
      <div class="offer-wrap"> <img src="http://www.placehold.it/800x450/ddd/bbb&text=Image" alt="140x140" /> <span class="label label-success">Label</span>
        <div class="btn-group">
          <button class="btn btn-small" type="button"><em class="icon-info-sign"></em></button>
          <button class="btn btn-small" type="button"><em class="icon-plane"></em></button>
          <button class="btn btn-small" type="button"><em class="icon-camera"></em></button>
        </div>
        <div class="padding">
          <h2 class="text-center text-info">Destination</h2>
          <h4 class="text-center">Lorem ipsum dolor <span class="badge badge-warning">10%</span></h4>
        </div>
      </div>
    </div>
    <div class="span4 offer">
      <div class="offer-wrap"> <img src="http://www.placehold.it/800x450/ddd/bbb&text=Image" alt="140x140" /> <span class="label label-success"> Label </span>
        <div class="btn-group">
          <button class="btn btn-small" type="button"><em class="icon-info-sign"></em></button>
          <button class="btn btn-small" type="button"><em class="icon-plane"></em></button>
          <button class="btn btn-small" type="button"><em class="icon-camera"></em></button>
        </div>
        <div class="padding">
          <h2 class="text-center text-info">Destination</h2>
          <h4 class="text-center">Lorem ipsum dolor <span class="badge badge-important">15%</span></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="span12">
      <ul class="pager">
        <li class="previous"> <a href="#">&larr; Previous</a></li>
        <li class="next"> <a href="#">Next &rarr;</a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="span12">
      <div class="alert alert-block alert-info"> <a class="close">&times;</a>
        <h4 class="alert-heading text-center">Alert Block Title</h4>
        <p class="text-center">Alert block message goes here. It can be as long as you need.</p>
      </div>
    </div>
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
</div>
</body>
</html>

'
?>