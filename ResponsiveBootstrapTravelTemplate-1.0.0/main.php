<?php
echo'
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>USA2SA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700" rel="stylesheet" type="text/css">
<script src="popup.js"></script>
 <!--   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" />-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<link href="popup.css" rel="stylesheet">
<script src="popup.js"></script>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Cape%20Town.html">Cape Town</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Johannesburg.html">Johannesburg</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="./Durban.html">Durban</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Catergories</a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Social</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Adventure</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Landmarks</a></li>
                </ul>
            </li>
            <li><a href="login.php" id="registerLink">Register</a></li>
              <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
<header class="hidden-phone">
  <h2 class="header-title">South Africa</h2>
</header>
<div class="container" id="main">
  <div class="row">
    <div class="span12">
      <h1 class="text-center">Popular Locations</h1>
    </div>
  </div>
    <div class="overlay" style="display: none;">
    <div class="login-wrapper">
        <div class="login-content" id="registerTarget">
            <a class="close">x</a>
            <h3>Register</h3>
            <form method="post" action="USA2SA_registerlogin.php">
                <label for="e-mail">
                     E-mail:
                    <input type="email" name="e-mail" id="e-mail" placeholder="Enter e-mail address"  required />
                    <span class="bspan" id="mailinfo"></span>
                </label>
                <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="Enter Username Here" onkeyup="checkUserLength(this)" pattern=".{6,}" required />
                    <span class="bspan" id="userinfo">6 chars req.</span>
                </label>
                <label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="Passowrd must be 6 or more characters" pattern=".{6,}"  required />
                </label>
                <label for="password2">
                    confirm password:
                    <input type="password" name="password2" id="password2" onkeyup="checkPassLength(this)" placeholder="re-enter passowrd" pattern=".{6,}" required />
                    <span class="bspan" id="passinfo">6 chars req.</span>
                </label>
                <input type="submit" id= "register-submit" value="Register"></inputx>
            </form>
        </div>
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
        <strong>Nicholas Gamarra</strong><br />
795 Folsom Ave, Suite 600<br />
San Francisco, CA 94107<br />
<i class="icon-white icon-signal"></i> (123) 456-7890<br />
<i class="icon-envelope icon-white"></i> ngamarra2014@fau.edu
        </address>
      </div>
      <div class="span3">
        <address>
        <strong>AUSTRALIA</strong>
        <br />
        22 Thyme Avenue<br />
        Back Plains, QLD 4361<br />
<i class="icon-white icon-signal"></i> (123) 456-7890<br />
<i class="icon-envelope icon-white"></i> mail@mailboxdomain.com
        </address>
      </div>
      <div class="span3">
        <address>
        <strong>CANADA</strong>
        <br />
3473 Reserve St<br />
Stirling, ON K0K 3E0 <br />
<i class="icon-white icon-signal"></i> (123) 456-7890<br />
<i class="icon-envelope icon-white"></i> mail@mailboxdomain.com
        </address>
      </div>
      <div class="span3">
        <address>
        <strong>GERMANY</strong><br />
Buelowstrasse 48<br />
56729 Langscheid <br />
<i class="icon-white icon-signal"></i> (123) 456-7890<br />
<i class="icon-envelope icon-white"></i> mail@mailboxdomain.com
        </address>
      </div>
    </div>
    <div class="row">
      <div class="span12" id="footer-bottom">
        <div class="row">
          <div class="span6 text-left" id="footer-left"><p>Copyright © 2015 USA2SA. All rights reserved.</p></div>
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
        <strong>USA</strong><br />
795 Folsom Ave, Suite 600<br />
San Francisco, CA 94107<br />
<i class="icon-white icon-signal"></i> (123) 456-7890<br />
<i class="icon-envelope icon-white"></i> mail@mailboxdomain.com
        </address>
      </div>
    </div>
  </div>
</div>
</body>
</html>
';
    ?>