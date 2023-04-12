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
          <link rel="stylesheet" href="http://localhost/project/css/group_style.css">
</head>
<body>
          <h1>Group</h1>
          <hr color="gray" width="30%">
          <form method="post" name="frm">
          <table class="container" align="center" cellpadding="25px">
          <tr>
          <td class=block>
          <a href="http://localhost/project/room/group/create_group.php">
                    <img src='http://localhost/project/symbol/create_grp.jpg' class='logo'>
                    <div class="admin">Create Group</div>
          </a>
          </td>
          <?php
                    include "config.php";
                    $q1="SELECT * FROM `group_info` WHERE member_id LIKE '%" . $_SESSION['msg'] . ",%' OR member_id LIKE '%, " . $_SESSION['msg'] . "' or admin_id='" . $_SESSION['msg'] . "';";
                    $data=mysqli_query(database_connect(), $q1);
                    $temp=2;
                    while($row=mysqli_fetch_array($data))
                    {
                              if($temp==4)
                              {
                                        echo "<tr>";
                              }
                              $name=find_user_name($row[2]);
                              echo "<td class=block>";
                              echo "<button class='profile'>";
                              echo "<img src='" . $row[4] . "' class='logo'>";
                              echo "<div class=gname>" . $row[1] . "</div>";
                              echo "<div class=admin>" . $name . "</div>";
                              echo "</button>";
                              echo "<input name='group' type=submit value=" . $row[0] . ">";
                              echo "</td>";
                              if($temp==4)
                              {
                                        echo "</tr>";
                                        $temp=1;
                              }
                              $temp++;
                    }
          ?>
          </table>
          </form>  
</body>
</html>
<?php
          extract($_REQUEST);
          if(isset($group))
          {
                    $_SESSION['group_id']=$group;
                    header("Location: http://localhost/project/room/group/home_group.php");
          }
?>