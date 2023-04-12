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
          function change_pass($npass, $opass)
          {
                    $q1="update user_info set password='" . $npass . "' where user_id=" . $_SESSION['msg'] . " and password='" . $opass . "'";
                    if(mysqli_query(database_connect(), $q1))
                    {
                              $_SESSION["msg1"]="Password is changed....";
                    }
                    else
                    {
                              $_SESSION["msg1"]="ERROR : Old password is incorrect.....";                            
                    }
          }
          function user_profile_data($id)
          {
                    $conn=database_connect();
                    $q1="select * from user_info where user_id=".$id;
                    return mysqli_fetch_array(mysqli_query($conn, $q1));
          }
          function find_table($id)
          {
                    $data=user_profile_data($id);
                    $str=$data[1]."_tbl";
                    return $str;
          }
?>