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
        <link rel="stylesheet" href="http://localhost/project/css/scroll_style.css">
        <style>
                body
                {	
                        background-color: rgb(228, 228, 228);
                }
                .file-box
                {
                        background-color: white;
                        height: 300px;
                        width: 250px;
                        padding: 20px;
                        cursor: pointer;
                }
                .file-box:hover
                {
                        background-color: red;
                        box-shadow: 0 32px 64px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }
                p
                {
                        color: red;
                        font-size: large;
                }
                p:hover
                {
                        font-weight: bold;      
                        text-decoration: underline;
                }
                a
                {
                        color: red;
                        font-size: small;
                        text-decoration: none;
                        text-align: right;
                }
                a:hover
                {
                        font-weight: bold;
                        text-decoration: underline;
                }
        </style>
</head>
<body>
        <a href="http://localhost/project/room/group/donload_message_menu.php" style="font-size: x-large">Back</a>
          <table width="100%">
                    <?php
                              include "config.php";
                              $sender_tab=find_table($_SESSION['group_id']);
                              $q1="select * from `" . $sender_tab . "` where msg_format<>'text' order by curr_date";
                              $data=mysqli_query(database_connect(), $q1);

                              $temp=1;
                              while($row=mysqli_fetch_array($data))
                              {
                                        $filename=@$row[4];
                                        $uname=user_profile_data($row[1]);
                                        if($temp>3)
                                        {
                                                  echo "<tr>";
                                                  $temp=1;
                                        }
                                        if($row[2]=='audio')
                                        {
                                                  echo "<td><audio src='" . $filename . "' controls  type='audio/mp3' class='file-box'></audio><br><p>" .  $uname[1] . "</p><a href='$filename'  target='_blank'>Full Screen</a></td>";
                                        }
                                        else if($row[2]=='video')
                                        {
                                                  echo "<td><video src='" . $filename . "' controls  type='video/mp4' class='file-box'></video><br><p>" . $uname[1] . "</p><a href='$filename'  target='_blank'>Full Screen</a></td>";
                                        }
                                        else if($row[2]=='image')
                                        {
                                                  echo "<td><img src='" . $filename . "' controls class='file-box'><br><p>" . $uname[1] . "</p><a href='$filename'  target='_blank'>Full Screen</a></td>";
                                        }
                                        else if($row[2]=='pdf')
                                        {
                                                  echo "<td><embed src='" . @$filename . "' class='file-box'><br><p>" . $uname[1] . "</p><a href='$filename'  target='_blank'>Full Screen</a></td>";
                                        }
                                        if($temp>3)
                                        {
                                                  echo "</tr>";
                                                  $temp=1;
                                        }
                                        $temp++;
                              }
                    ?>
          </table>
</body>
</html>