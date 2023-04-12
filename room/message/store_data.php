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
          include('config.php');
          extract($_REQUEST);
          $sender=$_SESSION['msg'];
          if(isset($_SESSION['other_user']))
          {
                    $reciver=$_SESSION['other_user'];                    
          }
          else
          {
                    $reciver=$_SESSION['msg'];                    
          }
          if(isset($send_btn))
          {
                    if($message!="" and $_FILES["file1"]["error"] > 0)
                    {
                              store_text_message($sender, $reciver, $message);
                    }
                    else
                    {
                              $sender_table=find_table($sender);
                              $receiver_table=find_table($reciver);
                              $q1="SELECT COUNT(*) FROM " . $sender_table . " WHERE `msg_format`<>'text';";
                              $temp=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
                              if($_FILES["file1"]["type"] == 'image/jpeg' || $_FILES["file1"]["type"] == 'image/png' || $_FILES["file1"]["type"] == 'image/gif' && $_FILES["file1"]["size"]<=500000000)//500mb
                              {
                                        $filename="file_data/file_" . $sender . "_" . $temp[0] . ".jpg";
                                        $file_format="image";
                              }
                              else if($_FILES["file1"]["type"] == 'video/mp4' && $_FILES["file1"]["size"]<=500000000)//500mb
                              {
                                        $filename="file_data/file_" . $sender . "_" . $temp[0] . ".mp4";
                                        $file_format="video";
                              }
                              else if($_FILES["file1"]["type"] == 'application/pdf' && $_FILES["file1"]["size"]<=500000000)//500mb
                              {
                                        $filename="file_data/file_" . $sender . "_" . $temp[0] . ".pdf";
                                        $file_format="pdf";
                              }
                              else if($_FILES["file1"]["type"] == 'audio/mpeg' && $_FILES["file1"]["size"]<=500000000)//500mb
                              {
                                        $filename="file_data/file_" . $sender . "_" . $temp[0] . ".mp3";
                                        $file_format="audio";
                              }
                              else
                              {
                                        echo "File tyoe or size(500MB) allowes.....";
                              }
                              if(move_uploaded_file($_FILES["file1"]["tmp_name"], $filename))
                              {
                                        //file upload is successfully.
                                        $q1="INSERT INTO " . $sender_table . "(`other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`) VALUES ('" . $reciver . "', '1', '". $file_format ."', '" . $message . "','0','" . $filename . "')";
                                        $q2="INSERT INTO " . $receiver_table . "(`other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`) VALUES ('" . $sender . "', '0', '". $file_format ."',' " . $message . "', '0','" . $filename . "')";
                                        if(mysqli_query(database_connect(), $q1))
                                        {
                                                  mysqli_query(database_connect(), $q2);
                                                  echo "Story is successfully uploded.....";
                                        }
                                        else
                                        {
                                                  echo "Stroy not uploded....";
                                        }
                              }
                              else
                              {
                                        //file upload not sucessfully
                                        echo "Story not successfully uploded.....";
                              }
                    }
          }
          if(@isset($remove_data))
          {
                    $tablename=find_table($sender);         
                    $q1="DELETE FROM `$tablename` WHERE other_user_id=$reciver;";
                    if(mysqli_query(database_connect(), $q1))
                    {
                              echo "data removed"; 
                    }                             
          }
          header("Location: http://localhost/project/room/message/message_input_box.php");
?>