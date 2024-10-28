<html>
<head>
<link rel="icon" type="image/x-icon" href="http://rittershaus13.bplaced.net/jMr.ico">
<TITLE>Welshikk</TITLE>
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<script type="text/javascript" src="clock.js"></script>
</head>
<body id="body">
<center>
<table id="table" name="table" width="100%" height="100%" align="center">
<tr>
<center>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<center>
<td></td>
<td>
<center>
<?php include 'clock.tpl'; ?>
</center>
</td>
<td></td>
</tr>
<tr>
<td>
<a href="mailto:rittershaus13@gmail.com"><img src="imags/eMail_v3.gif"></a>
<form name=clock>
<input type=text name=showTime size=7 class=input>
</form>
</td>
<td></td>
<td class='alnright'><a href="http://www.google.com/search?q=<?php echo $SearchFor; ?>"><img src="imags/EXIT_red_v3_soft.gif" target="_self"></a>
</td>
</tr>
</table>
</center>
</body>
</html>