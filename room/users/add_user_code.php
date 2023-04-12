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
	if(isset($sbt))
	{
		include "config.php";
		add_user($uname);
		header("Location: http://localhost/project/room/users/add_friend.php");
	}
?>