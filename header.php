<?php
	

echo	"<link rel=\"stylesheet\" type=\"text/css\" href=\"shadowbox/shadowbox.css\">
	<script type=\"text/javascript\" src=\"shadowbox/shadowbox.js\"></script>";
	
	echo "<script type=\"text/javascript\">";
	echo "Shadowbox.init(); </script>";
	//Shadowbox.init({
    // let's skip the automatic setup because we don't have any
    // properly configured link elements on the page
    //skipSetup: true
//})";

echo "<div style=\"background-color:FFFFFF\">";
echo "<center>
		<table width=\"700\">
			<tr>
		<td width=\"200\"><a rel=\"shadowbox\" href=\"logo.png\"><img src=\"logo.png\" width=\"150\" height=\"100\"></a></td>
		
		<td width=\"200\" align=\"center\" valign=\"top\">";
		echo "Welcome "; 
		echo $_SESSION['myusername']; 
		//echo ". Thanks for logging in"; 
		echo "</td>
		<td width=\"300\" align=\"right\" valign=\"top\"> <a href=\"vendors.php\">Vendors</a> | <a href=\"projects.php\">Projects</a> |  <a href=\"cal.php\">Calendar</a>  |  <a href=\"logout.php\">Logout</a></td>
	</tr>
	</table>
</center></div>";
?>