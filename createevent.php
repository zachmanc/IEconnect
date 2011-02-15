<?php

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

$title = 'HCCPD Demo';
$desc = '<a href="http://localhost/IEConnect/projects.php">Link</a>';
$where = 'Lab';
$startDate = '2011-02-15';
$startTime = '13:00';
$endDate = '2011-02-15';
$endTime = '16:00';
$tzOffset = '-05';

include 'gcalconnect.php';
$eid = createEvent ($client, $title, $desc, $where, $startDate, $startTime, $endDate, $endTime, $tzOffset);
echo "EventCreated";
echo " $eid";
?>