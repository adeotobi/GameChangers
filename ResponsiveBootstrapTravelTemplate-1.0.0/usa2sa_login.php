<?php
session_start();
require_once 'usa2sa_cred.php';
require_once 'alreadyloggedin.php';
$myusername=$_POST['username2']; 
$mypassword=$_POST['password3']; 
$mysqli=connect($dbhost,$dbuser,$dbpass,$dbname);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$result = $mysqli->query("SELECT * FROM userlist WHERE username='$myusername'");
if($result->num_rows==0)
{
    $_SESSION['userpasserror']=true;
    $result->close();
    //header("location:signinup.php");
    exit();
}
$result = $mysqli->query("SELECT password FROM userlist WHERE username='$myusername' limit 1");
$hash=$result->fetch_array();
$result = $mysqli->query("SELECT Verified FROM userlist WHERE username='$myusername'");
$verified=$result->fetch_array();
if (password_verify($mypassword, $hash[0]) && $verified) {
    //$_SESSION['myusername']=$myusername;
   
    $_SESSION['usa2sa_myusername'] = $myusername;
    $result->close();
    echo $_SESSION['usa2sa_myusername'];
    header("location:main.php");
    exit();
}
else {
    $_SESSION['userpasserror']=true;   
    $result->close();
    header("location:main.php");
    exit();
}
?>