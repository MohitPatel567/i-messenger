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
        <title>i-messenger - dashboard</title>
        <link rel="shortcut icon" href="http://localhost/project/img/app_logo1.png" type="image/x-icon">
        <link rel="stylesheet" href="http://localhost/project/css/scroll_style.css">
        <style>
                frame , frameset
                {
                        resize: none;
                        border: 0px;
                } 
        </style>
</head>
<frameset  rows="92%, *" border="0px" name="main">
        <frameset cols="30%, *">
                <frame src="http://localhost/project/room/users/all_user.php"></frame>
                <frame name="content" src="http://localhost/project/room/dashbord/temporary_page.php"></frame>
        </frameset>
        <frame src="http://localhost/project/room/dashbord/menu.php"></frame>
</frameset>
</html>