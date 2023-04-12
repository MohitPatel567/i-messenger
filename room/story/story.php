<?php
	session_start();
	if(isset($_SESSION['msg']))
	{
	        $_SESSION['msg']=$_SESSION['msg'];
	}
	else
	{
	        header("Location: http://localhost/project/");
	}
	include "config.php";
	$data=show_profile_data($_SESSION['msg']);
	extract($_REQUEST);
	if(isset($search_btn))
	{
		$data1=show_user_story($search_user);
		if($data1==NULL)
		{
			$data1=show_all_story();
		}
	}
	else if(isset($view_story))
	{
		$uname=show_profile_data($_SESSION['msg']);
		$data1=show_user_story($uname['user_name']);
		if($data1==NULL)
		{
			$data1=show_all_story();
		}
	}
	else
	{
		$data1=show_all_story();
	}
	story($data1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>i - messenger status</title>
	<link rel="stylesheet" href="http://localhost/project/css/story_style.css">
	<link rel="stylesheet" href="http://localhost/project/css/scroll_style.css">
	<script type="text/javascript" src="http://localhost/project/js/status_js.js"></script>
</head>
<body>
	<button onclick="window.location.reload();" class="refresh_bnt">&#9851;</button>
	<!-- show all satus -->
	<div class="header">
		<div class="search">
		<form method="post">
			<input type="text" name="search_user" placeholder="Search user...." autofocus>
			<input type="submit" name="search_btn" value="&#128269">
		</form>
		</div>
		<input type="button" value="&#x2630;" class="hidden-btn button" onclick="hidden_fun()">
	</div>
	<?php
	function story($data1)
	{
		echo "<div class='all-status'>";
		while(@$row=mysqli_fetch_array($data1))
		{
			$profile=show_profile_data($row['user_id']);
			echo "<div class='status-box'>";
			echo "<table class='other-user-profile'>";
			echo "<tr>";
			echo "<td rowspan='2' style='margin: 5px;'><img src='" . $profile['profile_img'] . "' class='pro_img'></td>";
			echo "<td class='uname'>" . $profile['user_name'] . "</td>";
			echo "<td class='about'>" . $profile['about'] . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan='2' class='time'>" . $row['story_time'] . "</td>";
			echo "<td colspan='2' class='time'>" . $row['story_date'] . "</td>";
			echo "</tr>";
			echo "</table>";
			echo "<video src='http://localhost/project/room/story/" . $row['file_path'] . "' controls class='video-status' id='video'></video>";
			echo "</div>";
		}
		echo "</div>";
	}
	?>

	<!-- user profile and upload status -->
	<div id="uprofile">
		<?php
		echo "<img src='" . $data['profile_img'] . "' class='profile-logo'>";
		?>
		<div class="label1">
		<?php
			echo $data['user_name'];
		?>
		</div>
		<div class="label2">
		<?php
			echo $data['about'];
		?>
		</div>
		<form name="frm" method="post">
			<input type="submit" value="View Story" class="button status-btn" name="view_story">
			<input type="button" value="Upload Story" class="status-btn button" onclick="upload_status_win()">
		</form>
	</div>
	
	<!-- sub windows : upload status -->
	<div id="windows">
		<div id="upload_status">
		<input type="button" value="&#xd7" class="cancel" onclick="close_windows()">
		<form name="frm" action="upload_story_code.php" enctype="multipart/form-data" method="post" >
		<div class="file_upload">
			<input type="button" name="btn" value=" + " class="file_upload_button">
			<input type="file" name="file1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Select Video</label><br>
			<?php
				
				if(@$_SESSION["error"]!=NULL)
				{
					echo "<label>" . $_SESSION["error"] . "</label>";
					unset($_SESSION["error"]);
					echo "<script> window.location.reload(); </script>";
				}
			?>
		</div>
		<input type="submit" name="upload_sbt" class="button upload-story" value="Upload Story" style="width: 40%;">
		</form>
		</div>
	</div>
</body>
</html>