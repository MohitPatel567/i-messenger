<?php
          extract($_REQUEST);
          if(isset($sbt))
          {
                    include "config.php";
                    session_start();

                    //verify user are already exist or not
                    if(@search_user_name($uname)>0)
                    {
                              $_SESSION['msg']="&#10008;       This user name is already exists......";
                              header("Location: http://localhost/Project/signin.php");
                    }
                    else 
                    {
                              //verify file uploaded or not
                              if($_FILES["file1"]["error"] > 0)
                              {
                                        $_SESSION["msg"]="&#10008;       Please, Eneter profile image.....";
                                        header("Location: http://localhost/Project/signin.php");
                              }
                              else
                              {
                                        //verify file size (2MB) and file format
                                        if($_FILES["file1"]["type"]=="image/gif" || $_FILES["file1"]["type"]=="image/jpeg" || $_FILES["file1"]["type"]=="image/png" && $_FILES["file1"]["size"]<2000000)
                                        {
                                                  $filename="../room/users/user_profile/".$uname.".jpg";
                                                  $file="http://localhost/project/room/users/user_profile/" . $uname . ".jpg";
                                                  if(move_uploaded_file($_FILES["file1"]["tmp_name"], $filename))
                                                  {
                                                            //file upload and insert a data in databases
                                                            include("database_connect.php");
                                                            $q1="INSERT INTO `user_info`(`user_name`, `full_name`, `dob`, `gender`, `email`, `profile_img`, `about`, `password`) VALUES ('" . $uname . "','". $fname . "','" . $dob . "','" . $gender . "','" . $email . "','" . $file . "','" . $about . "','" . $pass . "')";
                                                            $q2="CREATE TABLE " . $uname . "_tbl ( message_id int(5) NOT NULL AUTO_INCREMENT, other_user_id int(5) NOT NULL, msg_type int(1), msg_format varchar(10), msg text(500), status int, file_path text(100), curr_date date NOT NULL DEFAULT CURRENT_TIMESTAMP, curr_time time NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (message_id), FOREIGN KEY (other_user_id) REFERENCES user_info(user_id));";
                                                            mysqli_query($conn, $q1);
                                                            mysqli_query($conn, $q2);
                                                            $_SESSION["msg"]="Registration is sucessfully saved....";
                                                            header("Location: http://localhost/Project/login.php");
                                                  }
                                                  else 
                                                  {
                                                            $_SESSION["msg"]="&#10008;       File not uploaded";
                                                            header("Location: http://localhost/Project/signin.php");
                                                  }
                                        }
                                        else
                                        {
                                                  $_SESSION["msg"]="&#10008;       File type and size is not allow.........";
                                                  header("Location: http://localhost/Project/signin.php");                                                  
                                        }
                              }
                    }
          }
          else
          {
                    header("Location: http://localhost/Project/signin.php");
          }
?>