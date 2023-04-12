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
                    .pdf_file
                    {
                              width: 93%;
                              height: 98%;
                              left: 3%;
                              position: absolute;
                              top: 7%;
                    }
                    a
                    {
                              color:red;
                              font-size: 40px;
                              text-decoration: none;
                              position: fixed;
                              right: 0%;
                              top: 0%;
                              width: 60px;
                              height: 60px;
                              text-align: center;
                    }
                    a:hover
                    {
                              color: white;
                              font-weight: bold;
                              background-color: rgba(0, 0,0,.5);
                              border: 1px solid black;
                    }
                    body
                    {
                        background-color: rgb(228, 228, 228);
                        overflow: hidden;
                    }
          </style>
</head>
<body>
          <a href="http://localhost/project/room/setting/setting_menu.php">&#10006;</a>
          <br><embed src='http://localhost/project/room/setting/genratepdf.php' class="pdf_file">
</body>
</html>