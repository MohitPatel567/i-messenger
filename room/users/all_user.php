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
        extract($_REQUEST);
        if(isset($search_btn))
        {
                //search a data
                $data=search_particular_user($search_user);
                $i=0;
                while($res=mysqli_fetch_array($data))
                {  
                        $data1[$i]=$res[0]; 
                        $i++; 
                }
                if(isset($data1))
                {
                        show_all_user($data1);
                }
                else
                {
                        @$data1=explode(", ", other_username_data());
                        show_all_user(@$data1);
                }
        }
        else
        {
                @$data1=explode(", ", other_username_data());
                show_all_user(@$data1);
        }
        if(isset($other_user_btn))
        {
                $_SESSION['other_user']=$other_user_btn;
                $table_name = find_table($_SESSION['msg']);
                $q1="update " . $table_name . " set status=1 where other_user_id=" . $_SESSION['other_user'];
                mysqli_query(database_connect(), $q1);                
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://localhost/project/css/user_style.css">
	<link rel="stylesheet" href="http://localhost/project/css/scroll_style.css">
</head>
<body class="main">
        <div class="search-box">
                <form name="frm" method="post">
                        <input type="text" name="search_user" class="search-textbox" placeholder="Search user....." autofocus>
                        <input type="submit" name="search_btn" value="" class="search-button">
                        <input type="button" value="&#9851;" class="reload-button" onClick="window.location.reload();">
                </form>
        </div>
        <?php
                function show_all_user($data1)
                {
                        echo "<form name='userdata' method='post'>";
                        echo "<div class='all-user'>";
                        if(@isset($data1))
                        {
                                for($i=0;$i<count(@$data1);$i++)
                                {
                                        @$user=user_profile_data($data1[$i]);
                                        echo "<button type='submit' value='" . @$user[0] . "' class='button' name='other_user_btn'>";
                                       echo "<img src='" . @$user[6] . "' class='logo'>";
                                        echo "<div class='content'>";
                                        echo "<div class='uname'>" . @$user[1] . "</div>";
                                        echo "<div class='about'>" . @$user[7] . "</div>";
                                        //how many meesage unseen
                                        @$temp=count_unseen_message($_SESSION['msg'], @$user[0]);
                                        if(@$temp>0)
                                        {
                                                echo "<div class='message-cont'>" . @$temp . "</div>";
                                        }
                                        echo "</div>";
                                        echo "</button>";
                                }
                        }
                        echo "</div>";
                        echo "</form>";
                }
        ?>
</body>
</html>