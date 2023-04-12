<script>
          function close_win()
          {
                    window.close();
          }
</script>
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
          include("config.php");
          $q1="delete from log_data where user_id=" . $_SESSION['msg'];
          mysqli_query(database_connect(), $q1);
          unset($_SESSION['msg']);
          echo  "<script type='text/javascript'>";
          echo "close_win();";
          echo "</script>";
          session_destroy();
          echo "mysqli_close()";
          header("Location: http://localhost/project");
?>