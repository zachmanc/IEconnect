<?php
include 'connect.php';
$table = 'vendors';
$redirect = 'index.php';
$comp = $_POST[name];
$phone = $_POST[phone];
$add = $_POST[address];
$type = $_POST[protype];
$email = $_POST[email];
$contact = $_POST[contact];

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbname, $conn);

$sql="INSERT INTO $table (Company,Product,Address,Phone,Email,Contact) VALUES ('$comp','$type','$add','$phone','$email','$contact')";

echo "$sql";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
  
header("Location: $redirect"); 
  
?>
