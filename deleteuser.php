<?php
include 'checksession.php';
include 'connect.php';
$table = 'members';
$redirect = 'users.php';
$id = $_GET['id'];
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbname, $conn);

$sql="DELETE FROM $table WHERE id=$id";

echo "$sql";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
  
header("Location: $redirect"); 
  
?>