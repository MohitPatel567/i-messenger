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
          <link rel="stylesheet" href="http://localhost/project/css/scroll_style.css">
          <link rel="stylesheet" href="http://localhost/Project/css/form_style.css">
          <script type="text/javascript" src="http://localhost/Project/js/validation.js"></script>
</head>
<body>
<form method="post" name="frm" enctype="multipart/form-data" action="http://localhost/project/room/group/create_grp_code.php">
     <table class="container" cellspacing="15px" align="center" width="60%">
     <tr>
		<td colspan="3"><div class="header">Create Group</div></td>
	</tr>
	<tr>
		<td rowspan="5"><img src="http://localhost/Project/symbol/groupname.jpg" class="image_back"></td>
          <td>
               <span id="error" class="error-message"></span>
               <?php
                    if(@$_SESSION["msg1"]!=NULL)
                    {
                         echo "<span class='error-message' style='display: block'>". @$_SESSION["msg1"]. "</span>";
                         unset($_SESSION["msg1"]);
                    }
               ?>
          </td>
          <td rowspan="5">
               <select multiple name="add_user[]" class="add_user">
                    <?php
                         include "config.php";
                         $data=explode(", ", other_username_data());
                         foreach($data as $temp)
                         {
                              $res=user_profile_data($temp);
                              echo "<option value='" . $res[0] . "'>" . $res[1] . "</option>";
                         }
                    ?>                         
               </select>
          </td>
     	</tr>
          <tr>
                    <td><input type="text" name="gname" class="gname" placeholder="Enter group name....." autofocus></td>
          </tr>
          <tr>
                  <td><input type="text" name="about" class="about" placeholder="Enter group description....."></td>
          </tr>
          <tr>
          <td>
			<div class="file_upload">
				<input type="button" name="btn" value="      Upload image        " class="button">
				<input type="file" name="file">
			</div>
		</td>
          </tr>
          <tr>
		<td>
			<input type="submit" name="sbt" class="button" value="Create" onclick="return grp_validation()"><br><br>
               <a href="http://localhost/project/room/group/menu_group.php">Back</a>
		</td>
          </tr>
      </table>
</form>
</body>
</html>