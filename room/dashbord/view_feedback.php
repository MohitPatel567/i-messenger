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
          <link rel="stylesheet" href="http://localhost/project/css/feedback_style.css">
          <link rel="stylesheet" href="http://localhost/project/css/scroll_style.css">
</head>
<body>
          <table class="container">
                    <tr><th colspan="4"><h1>FEEDBACK</h1><hr color="white" width="95%"><h3></th></tr>
                    <tr>
                              <th style="width: 10%">No. </th>
                              <th style="width: 30%">Full Name</th>
                              <th style="width: 30%">Email</th>
                              <th>Feedback</th>
                    </tr>
                    <?php
                              include "config.php";
                              header("Refresh: 5");
                              $data=view_feedback();
                              $i=1;
                              while($res=mysqli_fetch_array($data))
                              {
                                        echo "<tr>";
                                        echo "<td>" . $i . ". </td>";
                                        echo "<td>" . $res[1] . "</td>";
                                        echo "<td>" . $res[2] . "</td>";
                                        echo "<td>" . $res[3] . "</td>";
                                        echo "</tr>";
                                        $i++;
                              }                      
                    ?>
          </table>
</body>
</html>