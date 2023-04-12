<!DOCTYPE html>
<html>
<head>
	<title>i-messenger - Login</title>
	<link rel="shortcut icon" href="http://localhost/project/img/app_logo1.png" type="image/x-icon">
	<link rel="stylesheet" href="http://localhost/Project/css/form_style.css">
	<script type="text/javascript" src="http://localhost/Project/js/validation.js"></script>
</head>
<body class="main">
	<form name="frm" method="post" action="http://localhost/project/php/login.php">
		<table class="container" cellspacing="15px" align="center">
			<tr>
				<td><img src="http://localhost/Project/img/user.jpg" class="logo"></td>
			</tr>
			<tr>
				<td><div class="header">Log In</div></td>
			</tr>
			<tr>
				<td>
					<span id="error" class="error-message"></span>
					<?php
						@session_start();
						if(@$_SESSION["msg"]!=NULL)
						{
							echo "<span class='error-message' style='display: block'>". @$_SESSION["msg"]. "</span>";
							unset($_SESSION["msg"]);
						}
					?>	
				</td>
			</tr>
			<tr>
				<td><input type="text" name="uname" class="uname" placeholder="Enter username....." autofocus></td>
			</tr>
			<tr>
				<td>
					<input type="password" name="pass" class="pass" placeholder="Enter password.....">
					<br>
					<a href="http://localhost/Project/forget_password.php">Forget password ?</a>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="sbt" class="button" value="Log In" onclick="return login_validation()">
					<br>
					<a href="signin.php">Create account ?</a><br>
					<a href="http://localhost/Project/">Back</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>