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

include "config.php";
$table=find_table($_SESSION['msg']);

//code for print data
$sql = "SELECT * from  $table where other_user_id=" . $_SESSION['other_user'] . " and msg_format='text';";
$res=mysqli_query(database_connect(), $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		function pdf_print()
		{
			var printContents = document.getElementById("message_table").innerHTML;
			var originalContents = document.body.innerHTML;
			window.print();
			document.body.innerHTML = originalContents;
		}		
	</script>
	<link rel="stylesheet" href="http://localhost/project/css/scroll_style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/project/css/feedback_style.css">
	<style type="text/css">
		td
		{
			text-align: center;
		}
		.profile
		{
			display: inline;
		}
		.label
		{
			display: inline-flex;
		}
	</style>
</head>
<body>
	<a href="http://localhost/project/room/message/donload_message_menu.php" style="font-size: x-large">Back</a>
	<input type="button" class="button" onclick="pdf_print()" value="Download">

	<div id="message_table">
		<table width="100%" border='1px'>
			<tr>
				<th colspan="5">
					<div class="profile">
						<img src="http://localhost/project/img/app_logo1.PNG" class="logo">
						<div class="label">i - messenger</div>
					</div>
				</th>
			</tr>			

			<tr>
				<td colspan="2">
					<div class="profile">
						<?php
							$user=show_profile_data($_SESSION['msg']);
							echo "<img src='" . $user[6] . "' class='logo'>";
							echo "<div class='label'>" . @$user[1] . "</div>";
						?>
					</div>
				</td>
				<td colspan="3">
					<div class="profile">
						<?php
							$user=show_profile_data($_SESSION['other_user']);
							echo "<img src='" . $user[6] . "' class='logo'>";
							echo "<div class='label'>" . @$user[1] . "</div>";
						?>
					</div>
				</td>
			</tr>
			<tr>
				<td><p>Sr. no</p></td>
				<td><p>Message</p></td>
				<td><p>Message Type</p></td>
				<td><p>Date</p></td>
				<td><p>Time</p></td>
			</tr>
			<tr>
				<?php
					$temp=1;
					while($row=mysqli_fetch_array($res))
					{
						echo "<tr>";
						if(@$row[2]==1)
						{
							$type="Send";
						}
						else
						{
							$type="Receive";
						}
						echo "<td><p>" . $temp++ . "</p></td>";
						echo "<td><p>" . @$row[4] . "</p></td>";
						echo "<td><p>" . $type . "</p></td>";
						echo "<td><p>" . @$row[7] . "</p></td>";
						echo "<td><p>" . @$row[8] . "</p></td>";
						echo "</tr>";
					}
				?>
			</tr>
		</table>
	</div>
</body>
</html>