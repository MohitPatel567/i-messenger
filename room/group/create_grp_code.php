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
                    //veify user already exist or not.
                    if(search_group_name($gname)==0)
                    {
                              if($_FILES["file"]["error"] > 0)
                              {
                                        $msg1="ERROR : File upload not sucessfully";
                              }
                              else
                              {
                                        //verify file size (20MB) and file format
                                        if($_FILES["file"]["type"]=="image/gif" || $_FILES["file"]["type"]=="image/jpeg" || $_FILES["file"]["type"]=="image/png" && $_FILES["file"]["size"]<200000)
                                        {
                                                  $filename="group_profile/". $gname .".jpg";
                                                  unlink($_SERVER['DOCUMENT_ROOT'] . "/project/room/group/" . $filename);
                                                  if(move_uploaded_file($_FILES["file"]["tmp_name"], $filename))
                                                  {
                                                            //file upload is successfully.
                                                            $str=implode(", ", $add_user);
                                                            $filename="group_profile/" . $gname . ".jpg";
                                                            $q1="INSERT INTO group_info(grp_name, admin_id, member_id, profile_img, about) VALUES ('" . $gname . "', " . $_SESSION['msg'] . ", '" . $str . "', 'http://localhost/project/room/group/" . $filename . "', '" . $about . "')";
                                                            $q2="CREATE TABLE `" . $gname . "_tbl` ( message_id int(5) NOT NULL AUTO_INCREMENT, other_user_id int(5) NOT NULL, msg_format varchar(10), msg text(500), file_path text(100), curr_date date NOT NULL DEFAULT CURRENT_TIMESTAMP, curr_time time NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (message_id), FOREIGN KEY (other_user_id) REFERENCES user_info(user_id));";
                                                            if(mysqli_query(database_connect(), $q1))
                                                            {
                                                                      mysqli_query(database_connect(), $q2);
                                                                      $msg1="Group is successfully created....";
                                                            }
                                                            else
                                                            {
                                                                      $msg1="ERROR : Group is not created....";
                                                            }
                                                  }
                                                  else
                                                  {
                                                            //file upload not sucessfully
                                                            $msg1="ERROR : Group profile is not uploded....";
                                                  }
                                        }
                                        else
                                        {
                                                  //image file type not allowed.
                                                  $msg1="ERROR : Image file type is not allowed.....";
                                        }
                              }
                    }
                    else
                    {
                              $msg1="This group is already exist......";
                    }
                    //echo $msg1;
                    $_SESSION['msg1']=$msg1;
          }
          header("Location: http://localhost/project/room/group/create_group.php");
?>