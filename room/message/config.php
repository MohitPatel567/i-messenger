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
            $conn=mysqli_connect("localhost", "root", "");
            mysqli_select_db($conn, "i-messenger");
            return $conn;
        }
          function show_profile_data($id)
          {
                    $q1="select * from user_info where user_id=".$id;
                    $conn=database_connect();
                    return mysqli_fetch_array(mysqli_query($conn, $q1));
          }
          function verify_user_active($id)
          {
                    $q1="select log_id from log_data where user_id=" . $id;
                    @$res=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
                    if(@$res[0]>0)
                    {
                              return true;
                    }
                    return false;
          }
          function find_table($id)
          {
                    $data=show_profile_data($id);
                    $str=$data[1]."_tbl";
                    return $str;
          }
          function store_text_message($sender, $reciver, $message)
          {
                    $sender_tbl=find_table($sender);
                    $reciver_tbl=find_table($reciver);
                    $q1="INSERT INTO $sender_tbl(other_user_id, msg_type, msg_format, msg, status) VALUES ($reciver,1,'text','$message','0')";
                    $q2="INSERT INTO $reciver_tbl(other_user_id, msg_type, msg_format, msg, status) VALUES ($sender,0,'text','$message','0')";
                    mysqli_query(database_connect(), $q1);
                    mysqli_query(database_connect(), $q2);
          }
?>