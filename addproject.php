<?php
include 'checksession.php';
?>

<html><head><title>Add User</title></head><body>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="addpr.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Add User</strong></td>
</tr>

<tr>
<td width="140">Name</td>
<td width="2">:</td>
<td width="294"><input type="text" size = "20" name="name"></td>
</tr>

<tr>
<td width="140">Customer</td>
<td width="2">:</td>
<td width="294"><input type="text" name="customer"></td>
</tr>

<tr>
<td width="140">Address</td>
<td width="2">:</td>
<td width="294"><input type="text" name="address"></td>
</tr>

<tr>
<td width="140">Quote</td>
<td width="2">:</td>
<td width="294"><input type="text" size ="20" align="left" name="quote"></td>
</tr>

<tr>
<td width="140">Sales</td>
<td width="2">:</td>
<td width="294"><input type="text" name="sales"></td>
</tr>

<tr>
<td width="140">Designer</td>
<td width="2">:</td>
<td width="294"><input type="text" name="designer"></td>
</tr>

<tr>
<td width="140">Coordinator</td>
<td width="2">:</td>
<td width="294"><input type="text" name="coordinator"></td>
</tr>

<tr>
<td width="140">Contact</td>
<td width="2">:</td>
<td width="294"><input type="text" name="contact"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Add Project"></td>
</tr>
</table>