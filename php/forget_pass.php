<?php
          include "config.php";
          extract($_REQUEST);
          session_start();
          if(isset($verify))
          {
                    include "database_connect.php";
                    $q1="select user_id from user_info where user_name = '" . $uname . "' and dob = '" . $dob . "' and full_name = '" . $fname . "' and email = '" . $email . "'";
                    @$data = mysqli_fetch_array(mysqli_query($conn, $q1));
                    if(@$data[0]>0)
                    {
                              //data is valid
                              $_SESSION['msg']=$data[0];
                              header("Location: http://localhost/project/change_pass.php");
                    }
                    else
                    {
                              //data is not valid
                              $_SESSION['msg']="ERROR : data is not valid....";
                              header("Location: http://localhost/Project/forget_password.php");
                    }
          }
          else if(isset($change_pass))
          {
                    $q1="update user_info set password='" . $npass . "' where user_id=" . $_SESSION['msg1'];
                    include "database_connect.php";
                    if(mysqli_query($conn, $q1))
                    {
                              //password is updated
                              $_SESSION['msg']=$_SESSION['msg1'];
                              unset($_SESSION['msg1']);
                              header("Location: http://localhost/project/room/dashbord/homepage.php");
                    }
                    else
                    {
                              //password is not updated
                              $_SESSION['msg']="ERROR : Password is not updated....";
                              header("Location: http://localhost/project/change_pass.php");
                    }
          }
          else
          {
                    header("Location: http://localhost/Project/forget_password.php");
          }
?>