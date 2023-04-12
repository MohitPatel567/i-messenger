<?php
          extract($_REQUEST);
          //verify page
          if(isset($submit))
          {
                    include('database_connect.php');
                    $q1="INSERT INTO `feedback` VALUES (NULL,'" . $name . "','". $email . "','" . $message . "')";
                    mysqli_query($conn, $q1);
          }
          header("Location: http://localhost/project/#contact-section");
?>