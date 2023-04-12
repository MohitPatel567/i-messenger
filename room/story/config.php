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
	function database_connect()
	{
		$conn=mysqli_connect("localhost", "root", "");
		mysqli_select_db($conn, "i-messenger");
		return $conn;
	}
	function show_profile_data($id)
	{
		$conn=database_connect();
		$q1="select * from user_info where user_id=".$id;
		return mysqli_fetch_array(mysqli_query($conn, $q1));
	}
	function find_user_id($uname)
	{
		$conn=database_connect();
		$q1="select user_id from user_info where user_name='" . $uname . "'";
		@$id=mysqli_fetch_array(mysqli_query($conn, $q1));
		if(@$id[0]>0)
		{
			return $id[0];
		}
		else
		{
			return 0;
		}
	}
	function show_all_story()
	{
		$conn=database_connect();
		$q1="select * from story_info order by story_id desc;";
		return mysqli_query($conn, $q1);
	}
	function show_user_story($search_user)
	{
		$res=find_user_id($search_user);
		if($res>0)
		{
			$conn=database_connect();
			$q1="select * from story_info where user_id=" . $res . " order by story_id desc";
			return mysqli_query($conn, $q1);
		}
		else
		{
			return NULL;
		}
	}
?>