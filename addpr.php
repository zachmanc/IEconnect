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
  
$addtablesql = "CREATE TABLE `zachmanc`.`$name` (
`id` TINYINT NOT NULL AUTO_INCREMENT ,
`checked` BOOL NOT NULL ,
`QuoteNum` VARCHAR( 60 ) NOT NULL ,
`PO` VARCHAR( 60 ) NULL ,
`Description` VARCHAR( 500 ) NULL ,
`Vendor` VARCHAR( 60 ) NULL ,
`SalesOrder` VARCHAR( 60 ) NULL ,
`VendorShip` DATETIME NULL ,
`Arrive` DATETIME NULL ,
`Install` DATETIME NULL ,
`Notes` VARCHAR( 500 ) NULL ,
PRIMARY KEY ( `id` )
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci";

echo $addtablesql;

if (!mysql_query($addtablesql,$conn))
  {
  die('Error: ' . mysql_error());
  }

header("Location: $redirect"); 
  
?>