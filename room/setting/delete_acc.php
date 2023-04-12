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
          include "config.php";
          $data = user_profile_data($_SESSION['msg']);
          $q1="drop table " . $data[1] . "_tbl";
          $q2="delete from story_info where user_id=". $_SESSION['msg'];
          $q4="delete from add_other_user where user_id=". $_SESSION['msg'];
          $q6="delete from user_info where user_id=". $_SESSION['msg'];
          $q7="delete from log_data where user_id=". $_SESSION['msg'];
          mysqli_query(database_connect(), $q1);
          mysqli_query(database_connect(), $q2);
          mysqli_query(database_connect(), $q4);
          mysqli_query(database_connect(), $q7);
          
          //remeove user in add_other_user
          $q8 = "SELECT * FROM `add_other_user`";
          $data=mysqli_query(database_connect(), $q8);
          while($row=mysqli_fetch_array($data))
          {
                    $arr1=explode(", ", $row['other_user']);
                    $i=0;
                    foreach($arr1 as $res)
                    {
                              if($_SESSION['msg']!=$res)
                              {
                                        $temp[$i]=$res;
                                        $i++;
                              }
                    }
                    $str=implode(", ", $temp);
                    $q9="update add_other_user set other_user='" . $str . "' where user_id=". $row['user_id'];
                    mysqli_query(database_connect(), $q9);
          }
          
          //remove group member in group
          $q10 = "SELECT * FROM `group_info`";
          $data=mysqli_query(database_connect(), $q10);
          while($row=mysqli_fetch_array($data))
          {
                    $arr1=explode(", ", $row['member_id']);
                    $i=0;
                    foreach($arr1 as $res)
                    {
                              if($_SESSION['msg']!=$res)
                              {
                                        $temp[$i]=$res;
                                        $i++;
                              }
                    }
                    $str=implode(", ", $temp);
                    $q9="update group_info set member_id='" . $str . "' where user_id=". $row['grp_id'];
                    mysqli_query(database_connect(), $q9);
          }
          
          //remove all message in all group
          $q11="select grp_name from group_info";
          $data=mysqli_query(database_connect(), $q11);
          while($row=mysqli_fetch_array($data))
          {
                    $q12="delete from `" . $row[0] . "_tbl` where other_user_id=" . $_SESSION['msg'];
                    mysqli_query(database_connect(), $q12);
          }

          $q11="select user_name from user_info";
          $data=mysqli_query(database_connect(), $q11);
                    while($row=mysqli_fetch_array($data))
          {
                    $q12="delete from " . $row[0] . "_tbl where other_user_id=" . $_SESSION['msg'];
                    mysqli_query(database_connect(), $q12);
          }

          $q12="delete from group_info where admin_id=" . $_SESSION['msg'];
          mysqli_query(database_connect(), $q12);

          //remove image from user profile
          $data = user_profile_data($_SESSION['msg']);
          $str=str_replace("http://localhost/", "/", $data[6]);
          unlink($_SERVER['DOCUMENT_ROOT'] . $str);

          mysqli_query(database_connect(), $q6);
          session_destroy();
          header("Location: http://localhost/Project/signin.php");
?>