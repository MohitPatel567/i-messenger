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
                    body
                    {
                              overflow: hidden;
                    }
                    .image
                    {
                              height: 90%;
                              width: 90%;
                    }
          </style>
</head>
<body>
          <center>
          <img src="http://localhost/project/img/room_backgroung.gif" class="image">
          </center>
</body>
</html>