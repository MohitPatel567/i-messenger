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
$table=find_table($_SESSION['group_id']);

$sql = "SELECT * from  `$table` where msg_format='text'";
$res=mysqli_query(database_connect(), $sql);

$temp=1;
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
	<a href="http://localhost/project/room/group/donload_message_menu.php">Back</a>
	<input type="button" class="button" onclick="pdf_print()" value="Download">

	<div id="message_table">
		<table width="100%" border='1px'>
			<tr>
				<th colspan="6">
					<div class="profile">
						<img src="http://localhost/project/img/app_logo1.PNG" class="logo">
						<div class="label">i - messenger</div>
					</div>
				</th>
			</tr>			

			<tr>
				<td colspan="6" style="text-align: left;">
					<div class="profile">
						<?php
							$group=search_group($_SESSION['group_id']);
							echo "<img src='" . $group[4] . "' class='logo'>";
							echo "<div class='label'>" . @$group[1] . " [ ". @$group[5] . " ]</div>";
						?>
					</div>
				</td>
			</tr>
			<tr>
				<td><p>Sr. no</p></td>
				<td><p>User</p></td>
				<td><p>Message</p></td>
				<td><p>Date</p></td>
				<td><p>Time</p></td>
			</tr>
			<tr>
				<?php
					$temp=1;
					while(@$row=mysqli_fetch_array($res))
					{
						echo "<tr>";
						echo "<td><p>" . $temp++ . "</p></td>";
						
						//print user image and name
						$user=user_profile_data(@$row[1]);
						echo "<td>";
						echo "<img src='" . @$user[6] . "' class='logo'><br>";
						echo "<div class='label'>" . @$user[1] . "</div>";
						echo '</td>';
						
						echo "<td><p>" . @$row[3] . "</p></td>";
						echo "<td><p>" . @$row[5] . "</p></td>";
						echo "<td><p>" . @$row[6] . "</p></td>";
						echo "</tr>";
					}
				?>
			</tr>
		</table>
	</div>
</body>
</html>