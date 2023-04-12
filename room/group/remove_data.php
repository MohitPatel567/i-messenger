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
          extract($_REQUEST);
          include "config.php";
          if(isset($remove_data))
          {
                    $res=search_group($remove_data);
                    $tabname=find_table($remove_data);
                    //verify user group admin or member
                    if($res[2]==$_SESSION['msg'])
                    {
                              //user is admin
                              $q1="SELECT * FROM `$tabname` WHERE file_path<>'NULL';";
                              $data=mysqli_query(database_connect(), $q1);
                              $temp=0;
                              while($row=mysqli_fetch_array($data))
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
                                        unlink($_SERVER['DOCUMENT_ROOT'] . "/project/room/group/group_data/file_" . $res[1] . "_$temp" . $exe);
                                        //echo $_SERVER['DOCUMENT_ROOT'] . "/project/room/group/group_data/file_" . $res[1] . "_$temp" . $exe;
                                        $temp++;
                              }                 
                              $q2="delete from `$tabname`";
                              $q3="alter table `$tabname` auto_increment=1";
                              mysqli_query(database_connect(), $q2);                                         
                              mysqli_query(database_connect(), $q3);                                         
                              echo "data is delete";
                    }
                    else
                    {
                              //user is member
                              echo "data is not removed";
                    }
          }
          header("Location: http://localhost/project/room/group/message_input_box.php");
?>