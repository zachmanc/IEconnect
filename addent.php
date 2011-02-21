<?php
include 'connect.php';
$table = $_POST[table];
$redirect = "entries.php?id=$table";
$po = $_POST[po];
$quotenum = $_POST[quotenum];
$checked = $_POST[checked];
$description = $_POST[description];
$vendor = $_POST[vendor];
$salesorder = $_POST[salesorder];
$vendorship = $_POST[vendorshipdate];
$arrive = $_POST[arrivedate];
$install = $_POST[installdate];
$notes = $_POST[notes];

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbname, $conn);

$sql="INSERT INTO `$table` (checked,QuoteNum,PO,Description,Vendor,SalesOrder,VendorShip,Arrive,Install,Notes) VALUES ('$checked','$quotenum','$po','$description','$vendor','$salesorder','$vendorship','$arrive','$install','$notes')";

echo "$sql";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }

function createEvent ($client, $title, $desc, $where, $startDate, $startTime, $endDate, $endTime, $tzOffset)
{
  $gdataCal = new Zend_Gdata_Calendar($client);
  $newEvent = $gdataCal->newEventEntry();
  
  $newEvent->title = $gdataCal->newTitle($title);
  $newEvent->where = array($gdataCal->newWhere($where));
  $newEvent->content = $gdataCal->newContent("$desc");
  
  $when = $gdataCal->newWhen();
  $when->startTime = "{$startDate}T{$startTime}:00.000{$tzOffset}:00";
  $when->endTime = "{$endDate}T{$endTime}:00.000{$tzOffset}:00";
  $newEvent->when = array($when);

  // Upload the event to the calendar server
  // A copy of the event as it is recorded on the server is returned
  echo $when;
  $createdEvent = $gdataCal->insertEvent($newEvent);
  return $createdEvent->id->text;
}

include 'gcalconnect.php';
// client vendor S0# typeship
$title = "$table: Vendor Ship Date";
$desc = "<a href=\"http://localhost/IEConnect/entries.php?id=$table\">Link</a>";
$where = 'Lab';
$startDate = "$vendorship";
$startTime = '13:00';
$endDate = "$vendorship";
$endTime = '16:00';
$tzOffset = '-05';

$eid = createEvent ($client, $title, $desc, $where, $startDate, $startTime, $endDate, $endTime, $tzOffset);

$title = "$table: Arrival Date";
$desc = "<a href=\"http://localhost/IEConnect/entries.php?id=$table\">Link</a>";
$where = 'Lab';
$startDate = "$arrive";
$startTime = '13:00';
$endDate = "$arrive";
$endTime = '16:00';
$tzOffset = '-05';

$eid = createEvent ($client, $title, $desc, $where, $startDate, $startTime, $endDate, $endTime, $tzOffset);

$title = "$table: Install Date";
$desc = "<a href=\"http://localhost/IEConnect/entries.php?id=$table\">Link</a>";
$where = 'Lab';
$startDate = "$install";
$startTime = '13:00';
$endDate = "$install";
$endTime = '16:00';
$tzOffset = '-05';

$eid = createEvent ($client, $title, $desc, $where, $startDate, $startTime, $endDate, $endTime, $tzOffset);


echo "EventCreated";
echo " $eid";


  
header("Location: $redirect");

 
  
?>