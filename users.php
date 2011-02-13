<?php
include 'checksession.php';
$table = 'members';
?>

<html><head><title>Test</title></head><body>
<?php include 'header.php';?>;
<center>
	<h1>User List</a></h1>
	<table border="0"><tr>
	
<?php 
include 'connect.php';
$redx = '<img src="x.png" width="20" height="20">';


$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Error');
mysql_select_db($dbname);
$result = mysql_query("SELECT * FROM {$table}");
if (!$result) {
    die("Query to show fields from table failed");
}


$fields_num = mysql_num_fields($result);
echo "<table width = \"800\"><tr align=\"center\">";
// printing table headers
echo "<td align=center></td>";
for($i=0; $i<$fields_num; $i++)
{
	if ($i === 0){
		$field = mysql_fetch_field($result);
	}
	else{
    	$field = mysql_fetch_field($result);
   		echo "<td>{$field->name}</td>";
    }
}
echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";
    //echo "<td>$redx</td>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    $stringcomp = "@";
    foreach($row as $cell){
    		if(strpos($cell,$stringcomp))
    		{
    			echo "<td><a href=\"mailto:$cell\">$cell</a></td>";
    		}
    		elseif($cell === $row[0]){
    			echo "<td><a href=\"deleteuser.php?id=$cell\">$redx</a></td>";
    			}
    		else{
				echo "<td>$cell</td>";
			}
		}
    echo "</tr>\n";
}

mysql_free_result($result);
mysql_close();

?>
</table>
<!--
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="insert.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Add Vendor</strong></td>
</tr>

<tr>
<td width="140">Company Name</td>
<td width="2">:</td>
<td width="294"><input type="text" size = "20" name="name"></td>
</tr>

<tr>
<td width="140">Product Type</td>
<td width="2">:</td>
<td width="294"><input type="text" name="protype"></td>
</tr>

<tr>
<td width="140">Phone Number</td>
<td width="2">:</td>
<td width="294"><input type="text" name="phone"></td>
</tr>

<tr>
<td width="140">Address</td>
<td width="2">:</td>
<td width="294"><input type="address" size ="20" align="left" name="address"></td>
</tr>

<tr>
<td width="140">Email</td>
<td width="2">:</td>
<td width="294"><input type="email" name="email"></td>
</tr>

<tr>
<td width="140">Contact</td>
<td width="2">:</td>
<td width="294"><input type="text" id="contact"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Add Vendor"></td>
</tr>
</table>
-->
<?php
include 'adduser.php'
?>

</td>
</form>
</tr>
</table>
</center>
</body></html>
