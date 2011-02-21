<?php
include 'checksession.php';
include 'gcalconnect.php';
?>

<html><head><title>Calendar View</title></head><body>
<center>
<?php include 'header.php' ?>
	<table width="800">	
	<tr><td>
<iframe src="http://www.google.com/calendar/embed?src=ieoffices%40gmail.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
	</td>
	<td></td>
	</tr>
</table>
</center></body></html>
