<?php
session_start(); 
//echo "Welcome ";
//echo $_SESSION['myusername'];
//echo ". Thanks for logging in";
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>