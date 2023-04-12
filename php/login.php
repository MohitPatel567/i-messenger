<?php
          extract($_REQUEST);
          //verify page
          if(isset($sbt))
          {
                    include("database_connect.php");
                    session_start();
                    $q1="SELECT user_id FROM `user_info` WHERE user_name='" . $uname . "' and password='" . $pass . "'";
                    //data found or not
                    if($data = mysqli_fetch_array(mysqli_query($conn, $q1)))
                    {
                              $_SESSION["msg"]=$data[0];
                              $q2="insert into log_data (user_id) values (" . $data[0] . ")";
                              mysqli_query($conn, $q2);
                              header("Location: http://localhost/project/room/dashbord/homepage.php");
                    }
                    else
                    {
                              //username and password incorrect
                              $_SESSION["msg"]="&#10008;     Username and password invalid....";
                              header("Location: http://localhost/Project/login.php");
                    }
          }
          else
          {
                    header("Location: http://localhost/Project/login.php");
          }
?>