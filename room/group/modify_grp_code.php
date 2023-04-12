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
          include "config.php";
          if(isset($_SESSION['group_id']))
          {
                    $q1="select * from group_info where grp_id=" . $_SESSION['group_id'];
                    $data=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
                    extract($_REQUEST);
                    if($data[2]==$_SESSION['msg'])
                    {
                              if(isset($update_btn))
                              {
                                        //update group profile
                                        $arr=array();
                                        foreach($add_user as $member)
                                        {
                                                  array_push($arr, user_id($member));
                                        }
                                        $str=implode(", ", $arr);
                                        if($_FILES["file"]["error"] > 0)
                                        {
                                                  $fullname=$data[4];
                                        }
                                        else
                                        {
                                                  //delete old image
                                                  @unlink($_SERVER['DOCUMENT_ROOT'] . "/project/room/group/group_profile/" . $data[1] . ".jpg");
                                                  //verify file size and file format
                                                  if($_FILES["file"]["type"]=="image/gif" || $_FILES["file"]["type"]=="image/jpeg" || $_FILES["file"]["type"]=="image/png" && $_FILES["file"]["size"]<200000)
                                                  {
                                                            $filename="group_profile/". $data[1] .".jpg";
                                                            unlink($_SERVER['DOCUMENT_ROOT'] . "/project/room/group/" . $filename);
                                                            if(move_uploaded_file($_FILES["file"]["tmp_name"], $filename))
                                                            {
                                                                      $fullname="http://localhost/project/room/group/group_profile/" . $data[1] . ".jpg";
                                                            }
                                                            else
                                                            {
                                                                      //file upload not sucessfully
                                                                      $_SESSION['error']="ERROR : Group profile is not uploded.....";
                                                                      header("Location: http://localhost/project/room/group/show_grp_detail.php");
                                                            }
                                                  }
                                                  else
                                                  {
                                                            //image file type not allowed.
                                                            $_SESSION['error']="ERROR : Image file type is not allowed.....";
                                                            header("Location: http://localhost/project/room/group/show_grp_detail.php");
                                                  }
                                        }
                                        $q2="UPDATE `group_info` SET `member_id`='$str',`profile_img`='$fullname',`about`='$about' WHERE grp_id=" . $_SESSION['group_id'];
                                        if(mysqli_query(database_connect(), $q2))
                                        {
                                                  $_SESSION['error']="Group updated.....";
                                                  header("Location: http://localhost/project/room/group/show_grp_detail.php");
                                        }
                                        else
                                        {
                                                  $_SESSION['error']="Group not updated...";
                                                  header("Location: http://localhost/project/room/group/show_grp_detail.php");
                                        }
                              }                              
                              if(isset($delete_btn))
                              {
                                        $tabname=find_table($_SESSION['group_id']);
                                        $q1="SELECT * FROM `$tabname` WHERE file_path<>'NULL';";
                                        $data1=mysqli_query(database_connect(), $q1);
                                        $temp=0;
                                        while($row=mysqli_fetch_array($data1))
                                        {
                                                  if($row[2]=='image')
                                                  {
                                                            $exe='.jpg';
                                                  }
                                                  else if($row[2]=='video')
                                                  {
                                                            $exe='.mp4';
                                                  }
                                                  else if($row[2]=='audio')
                                                  {
                                                            $exe='.mp3';
                                                  }
                                                  else if($row[2]=='pdf')
                                                  {
                                                            $exe='.pdf';
                                                  }
                                                  unlink($_SERVER['DOCUMENT_ROOT'] . "/project/room/group/group_data/file_" . $data[1] . "_$temp" . $exe);
                                                  $temp++;
                                        } 
                                        @unlink($_SERVER['DOCUMENT_ROOT'] . "/project/room/group/group_profile/" . $data[1] . ".jpg");
                                        $q1="DROP TABLE `$tabname`;";
                                        $q2="DELETE FROM `group_info` WHERE grp_id=" . $_SESSION['group_id'];        
                                        if(mysqli_query(database_connect(), $q1))
                                        {
                                                  mysqli_query(database_connect(), $q2);
                                                  $_SESSION["msg1"]="Group is deleted.....";
                                                  header("Location: http://localhost/project/room/group/create_group.php");
                                                  unset($_SESSION['group_id']);
                                        }
                                        else
                                        {
                                                  $_SESSION['error']="Group not delete...";
                                                  header("Location: http://localhost/project/room/group/show_grp_detail.php");
                                        }
                              }
                    }
                    else
                    {
                              $_SESSION['error']="You not admin, So you can not modify data";
                              header("Location: http://localhost/project/room/group/show_grp_detail.php");                            
                    }
                    if(isset($view_btn))
                        {
                                header("Location: http://localhost/project/room/group/donload_message_menu.php");
                        }
          }
?>