<?php
echo '
<!doctype html>
<html>
<head>
    <link href="http://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link href="popup.css" rel="stylesheet">
    <script src="popup.js"></script>
</head>

<body>
<div id = "overlay2"class="test"></div>
<a href="login.php" id="loginLink">Register</a>

<div id ="overlay2" class="overlay" style="display: none;">
    <div class="login-wrapper">
        <div class="login-content" id="registerTarget">
            <a class="close">x</a>
            <h3>Register</h3>
            <form method="post" action="USA2SA_registerlogin.php">
                
                <label for="username">
                    Username:
                    <input type="text" name="username2" id="username2" placeholder="Enter Username Here" onkeyup="checkUserLength(this)" required>
                </label>
                <label for="password">
                    Password:
                    <input type="password" name="password3" id="password3" placeholder="Enter Password Here" required/>
                </label>
                <button type="submit">Sign in</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
'
?>