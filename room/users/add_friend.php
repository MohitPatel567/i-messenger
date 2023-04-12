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
          <link rel="stylesheet" href="http://localhost/Project/css/form_style.css">
          <script>
                    function validation()
                    {
                              if(frm.uname.value=="")
                              {
                                        var msg=document.getElementById("error");
                                        msg.style.display="block";
                                        msg.innerHTML="Please, Enter your friend name...";
                                        document.frm.uname.focus();
                                        return false;
                              }
                              return true;
                    }
          </script>
</head>
<body>
<form name="frm" method="post" action="http://localhost/project/room/users/add_user_code.php">
		<table class="container" cellspacing="15px" align="center">
			<tr>
				<td><img src="http://localhost/project/symbol/search_user.jpg" class="logo"></td>
			</tr>
			<tr>
				<td><div class="header">Add user</div></td>
			</tr>
			<tr>
				<td>
					<span id="error" class="error-message"></span>
				</td>
			</tr>
			<tr>
				<td>
					<?php
						if(@$_SESSION['msg1'])
						{
							echo "<span class='error-message' style='display: block'>". @$_SESSION['msg1'] . "</span>";
							unset($_SESSION["msg1"]);
						}
					?>
				</td>
			</tr>
			<tr>
				<td><input type="text" name="uname" class="searchuser" placeholder="Search friend....." autofocus></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="sbt" class="button" value="Start chat" onclick="return validation()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>