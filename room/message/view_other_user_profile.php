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
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://localhost/project/css/profile_style.css">
          <style>
                    a
                    {
                              color:red;
                              font-size: 40px;
                              text-decoration: none;
                              position: fixed;
                              right: 0%;
                              top: 0%;
                              width: 60px;
                              height: 60px;
                              text-align: center;
                    }
                    a:hover
                    {
                              color: white;
                              font-weight: bold;
                              background-color: rgba(0, 0,0,.5);
                              border: 1px solid black;
                    }
          </style>
</head>
<body>
          <?php
                    @include "config.php";
                    @$data=show_profile_data($_SESSION["other_user"]);
          ?>
          <a href="http://localhost/project/room/message/message_room.php" target="display">&#10006;</a>
          <table class="container"  align="center">
                    <tr>
                              <td rowspan="4">
                                        <?php
                                                  echo "<img src='". @$data[6] ."' class='profile'>";
                                        ?>
                              </td>
                              <td>
                                        <h1>
                                                  <?php
                                                            echo @$data[0] . ".   " . @$data[1];                    
                                                  ?>
                                        </h1>
                              </td>
                    </tr>

                    <tr>
                              <td>
                                        <img src="http://localhost/project/symbol/user_icon.jpg" class="icon">
                                        <h3>
                                                  <?php
                                                            echo @$data[2];
                                                  ?>
                                        </h3>
                              </td>
                    </tr>

                    <tr>
                              <td>
                                        <img src="http://localhost/project/symbol/dob.jpg" class="icon">
                                        <h3>
                                                  <?php
                                                            echo @$data[3];
                                                  ?>
                                        </h3>
                              </td>
                    </tr>

                    <tr>
                              <td>
                                        <img src="http://localhost/project/symbol/email.jpg" class="icon">
                                        <h3>
                                                  <?php
                                                            echo @$data[5];
                                                  ?>
                                        </h3></td>
                    </tr>

                    <tr>            
                                <td>
                                      <form method="post" action="http://localhost/project/room/message/donload_message_menu.php"><input type="submit" name="sbt" value="&#10507; Message" class="button" style="width: 90%;"></form>
                              </td>
                              <td>
                                        <img src="http://localhost/project/symbol/about.jpg" class="icon">
                                        <h3>
                                                  <?php
                                                            echo @$data[7];
                                                  ?>
                                        </h3>
                              </td>
                    </tr>
          </table>
</body>
</html>