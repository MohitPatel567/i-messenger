<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://localhost/project/css/message_style.css">
</head>
<body>
    <table width="100%">
    <tr>
    <form name="frm" method="post" enctype="multipart/form-data" action="http://localhost/project/room/message/store_data.php">
        <!-- <td style="width: 90%"><input type="text" name="message" id="message" placeholder="Type a message...." autofocus></td> -->
        <td style="width: 90%"><input type="text"  name="message" id="message" placeholder="Type a message...." autofocus></td>
        <td><input type="submit" name="send_btn" value=" " class="button send-btn" style="top: 0%"></td>                    
        <td>
            <div class="file_upload">
                <input type="button" name="file-btn" value=" " class="button file-btn">
                <input type="file" name="file1">
            </div>
        </td>
        </form>
        <td>
            <form method="post" action="http://localhost/project/room/message/store_data.php" name="frm1">
                <input type="submit" name="remove_data" class="button delete_data" value=" " style="top: 0%">
            </form>
        </td>
        <td><a href="http://localhost/project/room/message/view_other_user_profile.php" target='display'" class="button view_profile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
    
    </tr>
    </table>
    <!-- <center>
        <div class="error-message">
            error
        </div>
    </center> -->
</body>
</html>
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