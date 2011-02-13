<?php
include 'connect.php';
$table = 'members';
$redirect = 'users.php';
$username = $_POST[username];
$fname = $_POST[fname];
$lname = $_POST[lname];
$pword = $_POST[pword];
$email = $_POST[email];
$sid = $_POST[sid];

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbname, $conn);

$sql="INSERT INTO $table (username,password,first,last,email,SID) VALUES ('$username','$pword','$fname','$lname','$email','$sid')";

echo "$sql";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
  
header("Location: $redirect"); 
  
?>