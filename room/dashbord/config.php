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
          function database_connect()
          {
                    $conn = mysqli_connect('localhost', "root", "");
                    mysqli_select_db($conn, "i-messenger");
                    return $conn;
          }
          function user_profile_data($id)
          {
                    $conn=database_connect();
                    $q1="select * from user_info where user_id=".$id;
                    return mysqli_fetch_array(mysqli_query($conn, $q1));
          }
          function view_feedback()
          {
                    $conn=database_connect();
                    $q1="select * from feedback order by feedback_id desc";
                    return mysqli_query($conn, $q1);
          }
?>