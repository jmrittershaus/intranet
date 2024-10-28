<?php
session_start();
require_once __DIR__ . "/config.php";
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
?>
<HTML>
<HEAD>
<TITLE>Home by Member</TITLE>
<link href="assets/css/rittershaus13.css" type="text/css" rel="stylesheet" />
<script src="functions.js" type="text/javascript"></script>
</HEAD>
<BODY>
<center>
<table id="table" name="table" width="100%" height="100%" align="center">
<td></td>
<td></td>
<td></td>
</tr>
<tr><td>
<center>
<H1>Welcome <?php echo $username;?></H1>
<div class="phppot-container">
	<div class="page-header">
</div>
	<div class="page-content">
	<a href="readme"><img src="imags/readme.gif"></a>
<br>
	<a href="upload"><img src="imags/upload.gif"></a>
<br>
	<span class="login-signup">
	<a href="logout.php"><img src="imags/logout/logout.gif"></a></span>
</div>
</center>
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
