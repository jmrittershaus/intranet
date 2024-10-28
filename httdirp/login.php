<?php
require_once "./config.php";
use Phppot\Member;
if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<html>
<head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<TITLE>Intranet T3-1</TITLE>
<link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
<link href="assets/css/rittershaus13.css" type="text/css" rel="stylesheet" />
<link href="assets/css/idx-ex.css" type="text/css" rel="stylesheet" />
<script src="uhr/clock.js" type="text/javascript"></script>
<script src="functions.js" type="text/javascript"></script>
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</head>
<body id="body" onload="clock_update('meineuhr');">
<center>
<table id="table" name="table" width="100%" height="100%" align="center">
<tr>
<center>
<td>
<?php include 'uhr/clock.htm'; ?><a href="doloomn/cd.htm">
<a href="author/advisory"><img src="imags/ADVISORY.gif"></a>
<br>
<a href="mailto:rittershaus13@gmail.com"><img src="imags/eMail_v3.gif"></a>
</td>
<td>
<center>
<img src="imags/error_shep_v2.gif"></a>
</center>
</td>
<td></td>
</tr>
<tr>
<center>
<td>
<img src="imags/BB_101_v2.gif"></a>
</td>
<td>
<center>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<?php include 'counter/counter.php'; ?>
				<a href="https://www.facebook.com/ritter82" target="_top"><img src="imags/f-book_v2.gif"></a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username" id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
<?php include "menu.tpl"; ?>
</center>
</td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<?php include "exit.tpl"; ?>
</td>
</tr>
</table>
</center>
</body>
</html>