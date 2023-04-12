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
          <style>
                  frame , frameset
                  {
                            resize: none;
                            border: 0px;
                  } 
          </style>
</head>
<frameset  rows="90%, *" border="0px" name="main">
          <frame src="http://localhost/project/room/group/message_room.php" name="display"></frame>
          <frame src="http://localhost/project/room/group/message_input_box.php"></frame>
</frameset>
</html>