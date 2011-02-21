<?php
include 'checksession.php';
?>

<html><head><title>Add Entry</title></head><body>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="addent.php?table=<?php$table?>">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Add Entry</strong></td>
</tr>

<tr>
<td width="204">Checked (Yes or No)</td>
<td width="2">:</td>
<td width="294"><input type="text" size = "20" name="checked"></td>
</tr>

<tr>
<td width="204">QuoteNum</td>
<td width="2">:</td>
<td width="294"><input type="text" name="quotenum"></td>
</tr>

<tr>
<td width="204">PO</td>
<td width="2">:</td>
<td width="294"><input type="text" name="po"></td>
</tr>

<tr>
<td width="204">Description</td>
<td width="2">:</td>
<td width="294"><input type="text" size ="20" align="left" name="description"></td>
</tr>

<tr>
<td width="204">Vendor</td>
<td width="2">:</td>
<td width="294"><input type="text" name="vendor"></td>
</tr>

<tr>
<td width="204">Sales Order Number</td>
<td width="2">:</td>
<td width="294"><input type="text" name="salesorder"></td>
</tr>

<tr>
<td width="204">Vendor Ship Date</td>
<td width="2">:</td>
<td width="294"><input type="text" name="vendorshipdate"></td>
</tr>

<tr>
<td width="204">Arrive Date</td>
<td width="2">:</td>
<td width="294"><input type="text" name="arrivedate"></td>
</tr>

<tr>
<td width="204">Install Date</td>
<td width="2">:</td>
<td width="294"><input type="text" name="installdate"></td>
</tr>

<tr>
<td width="204">Notes</td>
<td width="2">:</td>
<td width="294"><input type="text" name="notes"></td>
</tr>
<?php echo "<input type=\"hidden\" name=\"table\" value=\"$table\">";?>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Add Entry"></td>
</tr>
</table>