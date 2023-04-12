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
</head>
<body>
          <?php
                    @include "config.php";
                    @$data=user_profile_data($_SESSION["msg"]);
          ?>
          <form  name="frm" method="post" enctype="multipart/form-data" action="http://localhost/project/room/users/update_profile.php">
          <table class="container" align="center">
                    <tr>
                              <td rowspan="6">
                                        <?php
                                                  echo "<img src='". $data[6] ."' class='profile'>";
                                        ?>
                              </td>
                              <td><input type="text" name='uname' value="<?php echo @$data[1];?>" class="uname" disabled></td>
                    </tr>

                    <tr>
                              <td>
                                        <?php
                                                  if(isset($_SESSION['error']))
                                                  {
                                                            echo "<p id='error' class='error-message'>" . $_SESSION['error'] . "</p>";
                                                            unset($_SESSION['error']);
                                                  }
                                        ?>
                              </td>
                    </tr>

                    <tr>
                              <td><input type="text" name='fname' value="<?php echo @$data[2];?>" class="uname"></td>
                    </tr>

                    <tr>
                              <td><input type="date" name='dob' value="<?php echo @$data[3];?>" class="dob" disabled></td>
                    </tr>

                    <tr>
                              <td><input type="email" name='email' value="<?php echo @$data[5];?>" class="email"></td>
                    </tr>

                    <tr>
                              <td><input type="text"  name='about' value="<?php echo @$data[7];?>" class="about"></td>
                    </tr>

                    <tr>
                              <td>
                              <div class="file_upload">
                                        <input type="button" name="btn" value="          Change Image            " class="button">
                                        <input type="file" name="file1">
                              </div>
                              </td>
			<td><input type="submit" name="sbt" value="Update Profile" class="button"></td>
                    </tr>
          </table>
          </form>
</body>
</html>