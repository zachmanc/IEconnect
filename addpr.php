<?php
include 'connect.php';
$table = 'projects';
$redirect = 'projects.php';
$name = $_POST[name];
$customer = $_POST[customer];
$address = $_POST[address];
$quote = $_POST[quote];
$sales = $_POST[sales];
$designer = $_POST[designer];
$coordinator = $_POST[coordinator];
$contact = $_POST[contact];

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbname, $conn);

$sql="INSERT INTO $table (Name,Customer,Address,Quote,Sales,Designer,Coordinator,Contact) VALUES ('$name','$customer','$address','$quote','$sales','$designer','$coordinator','$contact')";

echo "$sql";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
  
header("Location: $redirect"); 
  
?>