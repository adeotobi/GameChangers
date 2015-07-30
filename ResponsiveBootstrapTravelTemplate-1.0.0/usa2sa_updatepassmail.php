<?php
session_start();
require_once 'usa2sa_cred.php';
require_once 'alreadyloggedin.php';
$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
}
$myusername=$_SESSION['usa2sa_myusername']; 
//$email=$_POST['e-mail'];
$myusername = stripslashes($myusername);
$myusername = mysql_real_escape_string($myusername);
if(isset($_POST['password4'])){
   $mypassword=$_POST['password4']; 
   $mynewpass=$_POST['password'];
   $mypassword = stripslashes($mypassword);
   $mypassword = mysql_real_escape_string($mypassword);
   $mynewpass = stripslashes($mynewpass);
   $mynewpass = mysql_real_escape_string($mynewpass);
   $result = $mysqli->query("SELECT password FROM userlist WHERE username='$myusername' limit 1");
   $hash=$result->fetch_array();
   if (password_verify($mypassword, $hash[0])) {
       $hash = password_hash($mynewpass, PASSWORD_DEFAULT);
    $mysqli->query("UPDATE userlist SET password='$hash' WHERE username='$myusername'");
       
        $_SESSION['userpasssuccess']=true;
   }else{
       $_SESSION['userpasserror']=true;
   }
    $result->close();
}
if(isset($_POST['e-mail'])){
   $email=$_POST['e-mail']; 
   $email = stripslashes($email);
   $email = mysql_real_escape_string($email);
   $mypassword=$_POST['password5']; 
   $mypassword = stripslashes($mypassword);
   $mypassword = mysql_real_escape_string($mypassword);
   $result = $mysqli->query("SELECT password FROM userlist WHERE username='$myusername' limit 1");
   $hash=$result->fetch_array();
   if (password_verify($mypassword, $hash[0])) {
    $result = $mysqli->query("SELECT email FROM userlist WHERE email='$email' limit 1");
    $res =$result->fetch_array();
    if($res[0]!=$email)
    {
        $mysqli->query("UPDATE userlist SET email='$email' WHERE username='$myusername'");
        echo $res[0];
        $_SESSION['usermailsuccess']=true;
    }else{
       $_SESSION['usermailerror']=true;
    }
    $result->close();
}else{
       $_SESSION['usermailerror']=true;
     }
}

header("location:settings.php");
?>