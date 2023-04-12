<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>i-messanger - Forget password</title>
	<link rel="shortcut icon" href="http://localhost/project/img/app_logo1.png" type="image/x-icon">
	<link rel="stylesheet" href="http://localhost/Project/css/form_style.css">
	<script type="text/javascript" src="http://localhost/Project/js/validation.js"></script>
</head>
<body class="main">
      <form name="frm" method="post" action="http://localhost/project/php/forget_pass.php">
		<table class="container" cellspacing="10px" align="center" id="first">
			<tr>
				<td><img src="http://localhost/Project/img/user.jpg" class="logo"></td>
			</tr>
			
			<tr>
				<td><div class="header">Forget Password</div>
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
				<td><input type="text" class="uname" name="uname" placeholder="Enter user name...." autofocus></td>
			</tr>
			
			<tr>
				<td><input type="text" class="uname" name="fname" placeholder="Enter full name...."></td>
			</tr>
			
			<tr>
				<td><input type="date" class="dob" name="dob"></td>
			</tr>
			
			<tr>
				<td><input type="email" class="email" name="email" placeholder="Enter email ID...."></td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" class="button" name="verify" value="Verify" onclick="return verify_code()">
					<br>
					<a href="http://localhost/project/login.php">Log In</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>