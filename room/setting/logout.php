<script>
          function close_win()
          {
                    window.close();
          }
</script>
<?php
          session_start();
          if(isset($_SESSION['msg']))
          {
                  $_SESSION['msg']=$_SESSION['msg'];
          }
          else
          {
                  header("Location: http://localhost/project/");
          }
          unset($_SESSION['msg']);
          echo  "<script type='text/javascript'>";
          echo "close_win();";
          echo "</script>";
          session_destroy();
          mysqli_close();
          header("Location: http://localhost/project");
?>