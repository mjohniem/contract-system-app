<?php
session_start ();
?>
<html>
<head><title>user login</title>
<style>
.tableheader{background-color:#95BEE6; color:white; font-weight:bold;}
.tablerow{background-color:#A7D6F1; color:white;}
.message{color:FF0000; font-weight:bold; text-align:center; width:100%}
</style>
</head>
<body>
<form name="frmuser" method="post" action="financeval.php">
  <table width="500" height="181" border="0" align="center" cellpadding="10" cellspacing="1">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td width="111" align="right">Username </td>
<td width="346"><input name="username" type="text" size="50" maxlength="50" pattern="[A-Za-z]+" title="inputs should be letters only" required></td></tr>
<tr class="tablerow">
<td align="right">Id. Number</td>
<td><textarea name="description" cols="50" required></textarea></td></tr>
<tr class="tablerow">
<td align="right">Password </td>
<td><input name="password" type="password" size="50" maxlength="50" required></td></tr>

<tr class="tableheader"><td align="center" colspan="2"><input type="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>