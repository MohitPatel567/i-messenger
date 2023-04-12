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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project/css/menu.css">
    <title>i-messenger setting menu</title>
</head>
<body>
    <a href="http://localhost/project/room/message/view_other_user_profile.php">Back</a>
    <table class="menu" align="center" cellspacing="20px" cellpadding="20px">
        <tr>
            <td>
                <a href="http://localhost/project/room/message/file_message.php">
                    <img src="http://localhost/Project/symbol/file_download.jpg" class="logo">
                    <div class="label">File download</div>
                </a>
            </td>
            <td>
                <a href="http://localhost/project/room/message/genratepdf.php">
                    <img src="http://localhost/Project/symbol/downloadmsg.jpg" class="logo">
                    <div class="label">Download Message</div>
                </a>
            </td>
        </tr>
    </table>
</body>
</html>