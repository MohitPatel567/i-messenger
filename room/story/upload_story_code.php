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
	extract($_REQUEST);
	if(isset($upload_sbt))
	{
		include "config.php";
  		$q1="SELECT count(story_id) from story_info";
		$temp=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
		//story record is out of 100000
		if(temp[0]>=100000)
		{
			$query1="alter table story_info auto_increment=1";
			$query2="delete from story_info where story_id<=50000";
			mysqli_query(database_connect(), $query1);
			mysqli_query(database_connect(), $query2);
		}
		$filename="all_story/story" . $temp[0] . ".mp4";
		//verify file uploaded or not
		if($_FILES["file1"]["error"] > 0)
		{
			//file error
			$msg="Story is not uploaded";
		}
		else
		{
			//verify file size and file format
			if($_FILES["file1"]["type"]=="video/mp4" || $_FILES["file1"]["type"]=="video/mp4a" && $_FILES["file1"]["size"]<500000000) // 500mb
			{
				if(move_uploaded_file($_FILES["file1"]["tmp_name"], $filename))
				{
					//file upload is successfully.
					$q1="insert into story_info(user_id, file_path) values (". $_SESSION['msg'] .", '" . $filename . "');";
					if(mysqli_query(database_connect(), $q1))
					{
						$msg="Story is successfully uploded.....";
					}
					else
					{
						$msg="Stroy not uploded....";
					}
				}
				else
				{
					//file upload not sucessfully
					$msg="Story not successfully uploded.....";
				}
			}
			else
			{
				//image file type not allowed.
				$msg="Story type is not allowed....<br>Story size allowed 1GB....";
			}
		}
		$_SESSION["error"]=$msg;
		header("Location: http://localhost/project/room/story/story.php");
	}
?>