<?php
          function search_user_name($name)
          {
                    include "database_connect.php";
                    $q1="select user_id from user_info where user_name = '". $name ."' and status=1";
                    if($data = mysqli_fetch_array(mysqli_query($conn, $q1)))
                    {
                              return $data[0];
                    }
                    return 0;
          }
?>