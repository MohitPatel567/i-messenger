<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>i-messanger - signin</title>
  	<link rel="shortcut icon" href="http://localhost/project/img/app_logo1.png" type="image/x-icon">
	<link rel="stylesheet" href="http://localhost/Project/css/form_style.css">
	<script type="text/javascript" src="http://localhost/Project/js/validation.js"></script>
</head>
<body class="main">
      <form name="frm" method="post" enctype="multipart/form-data" action="http://localhost/Project/php/create_user.php">
		<table class="container" cellspacing="5px" cellpadding="10px" align="center" width="60%">
			<tr>
				<td colspan="3"><div class="header">Sign In</div></td>
			</tr>
			<tr>
				<td rowspan="6">
					<img src="http://localhost/Project/img/user2.PNG" class="image_back">
					<br>
					<div class="header">i-messenger</div>
				</td>
				<td colspan="2">
					<span id="error" class="error-message"></span>
					<?php
						// @session_start();
						// if(@$_SESSION[msg]!=NULL)
						// {
						// 	echo "<span class='error-message' style='display: block'>". @$_SESSION['msg']. "</span>";
						// 	unset($_SESSION["msg"]);
						// }
					?>
				</td>
			</tr>

			<tr>
				<td><input type="text" name="uname" class="uname" placeholder="Enter username..." autofocus></td>
				<td><input type="text" name="fname" class="uname" placeholder="Enter Fullname..."></td>
			</tr>

			<tr>
				<td><input type="date" name="dob" class="dob"></td>
				<td>
					<select class="gender" name="gender">
						<option>--Select Gender--</option>
						<option>Male</option>
						<option>Female</option>
						<option>Other</option>
					</select>
				</td>
			</tr>

			<tr>
				<td><input type="email" name="email" class="email" placeholder="Enter email ID..."></td>
				<td><input type="password" name="pass" class="pass" placeholder="Enter password..."></td>
			</tr>

			<tr>
				<td><input type="text" name="about"  data-emoji-picker="true" class="about" placeholder="Enter about..."></td>
				<td>
					<div class="file_upload">
						<input type="button" name="btn" value="      Upload image        " class="button">
						<input type="file" name="file1">
					</div>
				</td>
			</tr>

			<tr>
				<td><a href="login.php">Log In</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/Project/">Back</a></td>
				<td><input type="submit" name="sbt" value="Sign In" class="button" onclick="return signin_validation()"></td>
			</tr>
		</table>
	</form>
</body>
</html>