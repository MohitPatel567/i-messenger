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
	<link rel="stylesheet" href="http://localhost/Project/css/main_menu.css">
</head>
<body>
          <div class="container">
                    <a href="http://localhost/project/room/users/view_profile.php" class="button" target="content"><img src="http://localhost/project/room/dashbord/img/profile.jpg" class="logo"></a>
                    <a href="http://localhost/project/room/message/message_home.php" class="button" target="content"><img src="http://localhost/project/room/dashbord/img/chat.jpg" class="logo"></a>
                    <a href="http://localhost/project/room/users/add_friend.php" target="content" class="button"><img src="http://localhost/project/room/dashbord/img/add_user.jpg" class="logo"></a>
                    <a href="http://localhost/project/room/group/menu_group.php" target="content" class="button"><img src="http://localhost/project/room/dashbord/img/create_group.jpg" class="logo"></a>
                    <a href="http://localhost/project/room/story/story.php" target="content" class="button"><img src="http://localhost/project/room/dashbord/img/story.jpg" class="logo"></a>
                    <a href="http://localhost/project/room/setting/setting_menu.php" target="content" class="button"><img src="http://localhost/project/room/dashbord/img/setting.jpg" class="logo"></a>
                    <a href="http://localhost/project/room/dashbord/view_feedback.php" target="content" class="button"><img src="http://localhost/project/room/dashbord/img/view_feedback.jpg" class="logo"></a>
                    <a href="http://localhost/project/room/dashbord/logout.php" class="button" target="_top"><img src="http://localhost/project/room/dashbord/img/logout.jpg" class="logo"></a>
                    <?php
                              include "config.php";
                              @$user_id=$_SESSION["msg"];
                              @$data=user_profile_data($user_id);
                              echo "<img src='".@$data[6]."' class='logo' style='margin-left: 10%;'";
                    ?>
          </div>
</body>
</html>