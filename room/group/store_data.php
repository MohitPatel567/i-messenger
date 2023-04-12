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
          extract($_REQUEST);
          include "config.php";
          if(isset($send_btn))
          {
                    $tabname=find_table($_SESSION['group_id']);
                    if($_FILES['file1']['error']>0 && $message!="")
                    {
                              //text message send
                              $q1="INSERT INTO `$tabname`(`other_user_id`, `msg_format`, `msg`) VALUES ('" . $_SESSION['msg'] . "','text','$message');";
                              if(mysqli_query(database_connect(), $q1))
                              {
                                        echo "data insert";
                              }
                    }
                    else
                    {
                              //file and message send
                              $groupname= search_group($_SESSION['group_id']);
                              $q1="SELECT COUNT(*) FROM `" . $tabname . "` WHERE `msg_format`<>'text';";
                              $temp=mysqli_fetch_array(mysqli_query(database_connect(), $q1));

                              if($_FILES["file1"]["type"] == 'image/jpeg' || $_FILES["file1"]["type"] == 'image/png' || $_FILES["file1"]["type"] == 'image/gif' && $_FILES["file1"]["size"]<=500000000)//500mb
                              {
                                        $filename="group_data/file_" . $groupname[1] . "_" . $temp[0] . ".jpg";
                                        $file_format="image";
                              }
                              else if($_FILES["file1"]["type"] == 'video/mp4' && $_FILES["file1"]["size"]<=500000000)//500mb
                              {
                                        $filename="group_data/file_" . $groupname[1] . "_" . $temp[0] . ".mp4";
                                        $file_format="video";
                              }
                              else if($_FILES["file1"]["type"] == 'application/pdf' && $_FILES["file1"]["size"]<=500000000)//500mb
                              {
                                        $filename="group_data/file_" . $groupname[1] . "_" . $temp[0] . ".pdf";
                                        $file_format="pdf";
                              }
                              else if($_FILES["file1"]["type"] == 'audio/mpeg' && $_FILES["file1"]["size"]<=500000000)//500mb
                              {
                                        $filename="group_data/file_" . $groupname[1] . "_" . $temp[0] . ".mp3";
                                        $file_format="audio";
                              }
                              else
                              {
                                        echo "File tyoe or size(500MB) allowes.....";
                              }
                              if(move_uploaded_file($_FILES["file1"]["tmp_name"], $filename))
                              {
                                        //file upload is successfully.
                                        $file_path_name="http://localhost/project/room/group/" . $filename;
                                        $q1="INSERT INTO `$tabname`(`other_user_id`, `msg_format`, `msg`, `file_path`) VALUES ('" . $_SESSION['msg'] . "','" . $file_format . "','$message', '" . $file_path_name . "');";
                                        if(mysqli_query(database_connect(), $q1))
                                        {
                                                  echo "File is successfully uploded.....";
                                        }
                                        else
                                        {
                                                  echo "File not uploded....";
                                        }
                              }
                              else
                              {
                                        //file upload not sucessfully
                                        echo "File not successfully uploded.....";
                              }
                    }
          }
          header("Location: http://localhost/project/room/group/message_input_box.php");
?>