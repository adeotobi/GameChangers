<?php
require_once 'usa2sa_cred.php';
//session_start();
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
    //$_SESSION['userpasserror']=true;
    echo'u suk';
    $result->close();
    //header("location:signinup.php");
    exit();
}
$result = $mysqli->query("SELECT password FROM userlist WHERE username='$myusername' limit 1");
$hash=$result->fetch_array();
if (password_verify($mypassword, $hash[0])) {
    //$_SESSION['myusername']=$myusername;
   // header("location:foofa.php");
    echo'u gud';
    $result->close();
    exit();
}
else {
    //$_SESSION['userpasserror']=true;
    echo'u duble suk';
    $result->close();
   // header("location:signinup.php");
    exit();
}
?>