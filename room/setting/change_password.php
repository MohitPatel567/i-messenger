<?php
	@session_start();
	if(isset($_SESSION['msg']))
	{
		$_SESSION['msg']=$_SESSION['msg'];
	}
	else
	{
		header("Location: http://localhost/project/");
	}
	include 'config.php';
	extract($_REQUEST);
	if(isset($sbt))
	{
		change_pass($npass, $opass);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="http://localhost/project/js/validation.js"></script>
	<link rel="stylesheet" href="http://localhost/Project/css/form_style.css">
</head>
<body>
      <table>
      <form name="frm" method="post">
		<table class="container" cellspacing="15px" align="center">
			<tr>
				<td><img src="http://localhost/Project/img/user.jpg" class="logo"></td>
			</tr>
			<tr>
				<td><div class="header">Change Password</div></td>
			</tr>
            		<tr>
				<td>
					<span id="error" class="error-message"></span>
					<?php
						if(@$_SESSION["msg1"]!=NULL)
						{
							echo "<span class='error-message' style='display: block'>". @$_SESSION["msg1"] . "</span>";
							unset($_SESSION["msg1"]);
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="opass" class="pass" placeholder="Enter old password....." autofocus>
				</td>
			</tr>
            		<tr>
				<td>
					<input type="password" name="npass" class="pass" placeholder="Enter new password.....">
				</td>
			</tr>

             		<tr>
				<td>
					<input type="password" name="cpass" class="pass" placeholder="Enter confirm password.....">
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="sbt" class="button" value="Change password" onclick="return change_pass_validation()"><br />
					<a href="http://localhost/project/room/setting/setting_menu.php">Back</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>