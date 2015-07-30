<?php
session_start();
require_once 'usa2sa_cred.php';
session_destroy();
header("location:main.php");
?>