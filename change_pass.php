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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>i-messanger - chnage password</title>
	<link rel="shortcut icon" href="http://localhost/project/img/app_logo1.png" type="image/x-icon">
	<link rel="stylesheet" href="http://localhost/Project/css/form_style.css">
	<script type="text/javascript" src="http://localhost/Project/js/validation.js"></script>
</head>
<body class="main">
      <form name="frm" action="http://localhost/project/php/forget_pass.php" method="post">
		<table class="container" cellspacing="10px" align="center" id="first">
			<tr>
				<td><img src="http://localhost/Project/img/user.jpg" class="logo"></td>
			</tr>
			
			<tr>
				<td><div class="header">Change Password</div>
			</tr>
			
			<tr>
				<td>
					<span id="error" class="error-message"></span>
					<?php
						if(@$_SESSION["msg"]!=NULL)
						{
							echo "<span class='error-message' style='display: block'>". @$_SESSION["msg"]. "</span>";
							unset($_SESSION["msg"]);
						}
					?>
				</td>
			</tr>

			<tr>
				<td><input type="password" class="pass" name="npass" placeholder="Enter new password...." autofocus></td>
			</tr>
			
			<tr>
				<td><input type="password" class="pass" name="cpass" placeholder="Enter confirm password...."></td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" class="button" name="change_pass" value="Change Password" onclick="return change_pass_valid()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>