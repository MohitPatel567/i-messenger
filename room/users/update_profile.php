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
<?php
          include('config.php');
          extract($_REQUEST);
          if(isset($sbt))
          {
                    $q1 = "select user_name, profile_img from user_info where user_id=". $_SESSION['msg'];
                    $res=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
                    if($_FILES['file1']['error']>0)
                    {
                              $filename=$res[1];
                    }
                    else
                    {
                              //verify file size and file format
                              if($_FILES["file1"]["type"]=="image/gif" || $_FILES["file1"]["type"]=="image/jpeg" || $_FILES["file1"]["type"]=="image/png" && $_FILES["file1"]["size"]<200000)
                              {
                                        $imgname=$res[0] . ".jpg";
                                        $path = "http://localhost/project/room/users/";
                                        $filename=$path . $imgname;
                                        if(file_exists($filename))
                                        {
                                                  unlink($_SERVER['DOCUMENT_ROOT'] . "/project/room/users/user_profile/" . $filename);
                                                  if(move_uploaded_file($_FILES["file1"]["tmp_name"], $imgname))
                                                  {
                                                            $_SESSION["error"]="Update your profile....";
                                                  }
                                                  else 
                                                  {
                                                            $_SESSION["error"]="&#10008;         File not uploaded";
                                                            header("Location: http://localhost/project/room/users/view_profile.php");
                                                  }
                                        }
                                        else
                                        {
                                                  unlink($_SERVER['DOCUMENT_ROOT'] . "/project/php/user_profile" . $res[0] . ".jpg");
                                                  if(move_uploaded_file($_FILES["file1"]["tmp_name"], $imgname))
                                                  {
                                                            $_SESSION["error"]="Update your profile....";
                                                  }
                                                  else 
                                                  {
                                                            $_SESSION["error"]="&#10008;         File not uploaded";
                                                            header("Location: http://localhost/project/room/users/view_profile.php");
                                                  }
                                        }
                              }
                              else
                              {
                                        $_SESSION["error"]="&#10008;       File type is not allow.........";                
                                        header("Location: http://localhost/project/room/users/view_profile.php");
                              }
                    }
                    $q1="UPDATE user_info SET full_name='" . $fname . "',email='" . $email . "',profile_img='" . $filename . "',about='" . $about . "' WHERE user_id=" . $_SESSION['msg'];
                    if(mysqli_query(database_connect(), $q1))
                    {
                              $_SESSION["error"]="Your profile is updated";
                              header("Location: http://localhost/project/room/users/view_profile.php");
                    }
                    else
                    {
                              $_SESSION["error"]="Your profile is not updated";
                              header("Location: http://localhost/project/room/users/view_profile.php");
                    }
          }
          header("Location: http://localhost/project/room/users/view_profile.php");
?>