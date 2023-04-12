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
          <style>
                    .image
                    {
                              height: 80%;
                              width: 80%;
                              border-radius: 50%;
                              margin-top: 20px;
                    }
          </style>
</head>
<body>
<?php
          include("config.php");
          $q1="select * from group_info where grp_id=" . $_SESSION['group_id'];
          $res=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
?>
<form method="post" name="frm" enctype="multipart/form-data" action="http://localhost/project/room/group/modify_grp_code.php">
     <table class="container" align="center" width="60%">
          <tr>
               <?php
                    @$temp=user_profile_data($res[2]);
               ?>
		<td colspan="3"><div class="header"><?php echo @$temp[1]; ?></div></td>
	</tr>
	<tr>
		<td rowspan="4"><?php echo "<img src='" . @$res[4] . "' class='image';>" ?></td>
          <td>
               <?php
                    if(@$_SESSION["error"]!=NULL)
                    {
                         echo "<span class='error-message' style='display: block'>". @$_SESSION["error"]. "</span>";
                         unset($_SESSION["error"]);
                    }
               ?>
          </td>
          <td rowspan="5">
               <select multiple name="add_user[]" class="add_user">
                    <?php
                              $q1="select user_id, user_name from user_info";
                              $data = mysqli_query(database_connect(), $q1);
                              $arr=explode(", ", $res[3]);
                              while($row=mysqli_fetch_array($data))
                              {
                                   $temp=0;
                                   foreach($arr as $i) 
                                   {
                                        if(@$row[0]==$i)
                                        {
                                             $temp=1;
                                             break;
                                        }
                                   }   
                                   if($temp==1)
                                   {
                                        echo "<option selected>$row[1]</option>";
                                   }
                                   else
                                   {
                                        echo "<option>$row[1]</option>";
                                   }
                              }
                    ?>                         
               </select>
          </td>
     	</tr>
          <tr>
                    <td><input type="text" name="gname" class="gname" value="<?php echo @$res[1]; ?>" disabled></td>
          </tr>
          <tr>
                  <td><input type="text" name="about" class="about" value="<?php echo @$res[5]; ?>"></td>
          </tr>
          <tr>
                    <td><input type="submit" name="update_btn" class="button" value="Update Group"></td>
          </tr>
          <tr>
               <td>
			<div class="file_upload">
				<input type="button" name="file1" value="      Upload image        " class="button">
				<input type="file" name="file">
			</div>
			<input type="submit" name="view_btn" value="Download message" class="button">
		     </td>
		<td>
			<input type="submit" name="delete_btn" value="      Delete Group        " class="button">
               <a href="http://localhost/project/room/group/message_room.php">Back</a>
		</td>
          </tr>
      </table>
</form>
</body>
</html>