<?php
#include ("../config.php");
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<HEAD>
<TITLE>HELP . SOURCE</TITLE>
<meta http-equiv="expires" content="So, 1 Aug 1982 00:00:01 GMT">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<link href="assets/css/rittershaus13.css" type="text/css" rel="stylesheet" />
<link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
<meta HTTP-EQUIV="Refresh" CONTENT="6; URL=http://rittershaus13.bplaced.net/interface/interface.php">
</HEAD>
<BODY>
<center>
<table id="table" width="100%" height="100%" align="center">
<td></td>
<td></td>
<td></td>
</tr>
<tr><td>
<center>
<img src="../../imags/config/config.gif">
<br>
<input type="button" value="Konfigurator schliessen" onClick="window.location.href='../interface.php'">
</center
</td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</center>
</BODY>
</HTML>