<?php
include 'checksession.php';
?>

<html><head><title>Add User</title></head><body>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="addus.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Add User</strong></td>
</tr>

<tr>
<td width="140">Username</td>
<td width="2">:</td>
<td width="294"><input type="text" size = "20" name="username"></td>
</tr>

<tr>
<td width="140">First Name</td>
<td width="2">:</td>
<td width="294"><input type="text" name="fname"></td>
</tr>

<tr>
<td width="140">Last Name</td>
<td width="2">:</td>
<td width="294"><input type="text" name="lname"></td>
</tr>

<tr>
<td width="140">Password</td>
<td width="2">:</td>
<td width="294"><input type="password" size ="20" align="left" name="pword"></td>
</tr>

<tr>
<td width="140">Email</td>
<td width="2">:</td>
<td width="294"><input type="email" name="email"></td>
</tr>

<tr>
<td width="140">SID</td>
<td width="2">:</td>
<td width="294"><input type="text" name="sid"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Add User"></td>
</tr>
</table>