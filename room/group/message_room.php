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
    include("config.php");
    if(isset($_SESSION['group_id']))
    {
        $group_id=$_SESSION['group_id'];
    }
    $data1=search_group($group_id);
    header("Refresh: 3");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project/css/message_style.css">
    <link rel="stylesheet" href="http://localhost/project/css/scroll_style.css">
</head>
<body>
    <?php
        echo "<button class='profile'>";
        echo "<img src='" . @$data1[4] . "' class='pro_img'>";
        echo "<div class='profile_data'>";
        echo "<div class='uname'>" . @$data1[1] . "</div>";
        echo "<div class='about'>" . @$data1[5] . "</div>";
        echo "</div>";
        echo "</button>";
    ?>
    <div class="message_room">
        <?php
            //$res=show_profile_data($_SESSION['msg']);
            $tabname=find_table($_SESSION['group_id']);
            $q1 = "SELECT * FROM `$tabname` ORDER by message_id DESC;";
            @$data=mysqli_query(database_connect(), $q1);
            $temp1=0;
            $temp2=0;
            while(@$res=mysqli_fetch_array($data))
            {
                /* prinrt message date */
                $curr_date=@date_create(date('Y-m-d'));
                $msg_date=@date_create($res['curr_date']);
                if($curr_date!=@$msg_date)
                {
                    $curr_date=$msg_date;
                    if($temp1==0)
                    {
                        echo "<div class='date'>" . date_format($msg_date, 'd-M-Y') . "</div>";
                        $temp1++;
                    }
                }
                else
                {
                    if($temp2==0)
                    {
                        echo "<div class='date'>" . date_format($msg_date, 'd-M-Y') . "</div>";
                    }
                    $temp2++;
                }
                /* print all message */
                if(@$res['other_user_id']==$_SESSION['msg'])
                {
                    $user_type="sender";    
                }
                else
                {
                    $user_type="receiver";
                }
                $username=user_profile_data($res[1]);
                /* text message */
                if(@$res['msg_format']=="text")
                {

                    echo "<div class='" . $user_type . "'>";
                    echo "<div class='time'>" . @$username[1] . "</div>";
                    echo "<div class='message'>&#10075;&nbsp;&nbsp;&nbsp;" . @$res['msg'] . "&nbsp;&nbsp;&nbsp;&#10076;</div>";
                    echo "<div class='time'>" . @$res['curr_time'] . "</div>";
                    echo "</div>";
                }
                /* image message */
                if(@$res['msg_format']=='image')
                {
                    echo "<div class='" . $user_type . "'>";
                    echo "<div class='time'>" . @$username[1] . "</div>";
                    echo "<center><img src='" . @$res['file_path'] . "' class='message-image' controls></center>";
                    if(@res['msg']!="NULL")
                    {
                        echo "<div class='message'>&#10075;&nbsp;&nbsp;&nbsp;" . @$res['msg'] . "&nbsp;&nbsp;&nbsp;&#10076;</div>";
                    }
                    echo "<div class='time'>" . @$res['curr_time'] . "</div>";
                    echo "</div>";
                }
                /* video message */
                if(@$res['msg_format']=='video')
                {
                    echo "<div class='" . $user_type . "'>";
                    echo "<div class='time'>" . @$username[1] . "</div>";
                    echo "<center><video src='" . @$res['file_path'] . "' controls  class='file-message'></video></center>";
                    if(@res['msg']!="NULL")
                    {
                        echo "<div class='message'>&#10075;&nbsp;&nbsp;&nbsp;" . @$res['msg'] . "&nbsp;&nbsp;&nbsp;&#10076;</div>";
                    }
                    echo "<div class='time'>" . @$res['curr_time'] . "</div>";
                    echo "</div>";
                }
                /* audio message */
                if(@$res['msg_format']=='audio')
                {
                    echo "<div class='" . $user_type . "'>";
                    echo "<div class='time'>" . @$username[1] . "</div>";
                    echo "<center><audio src='" . @$res['file_path'] . "' controls  type='audio/mp3' class='audio-message'></audio></center>";
                    if(@res['msg']!="NULL")
                    {
                        echo "<div class='message'>&#10075;&nbsp;&nbsp;&nbsp;" . @$res['msg'] . "&nbsp;&nbsp;&nbsp;&#10076;</div>";
                    }
                    echo "<div class='time'>" . @$res['curr_time'] . "</div>";
                    echo "</div>";
                }
                /* pdf file */
                if(@$res['msg_format']=='pdf')
                {
                    echo "<div class='" . $user_type . "'>";
                    echo "<div class='time'>" . @$username[1] . "</div>";
                    echo "<center><embed src='" . @$res['file_path'] . "' class='file-message'></center>";
                    if(@res['msg']!="NULL")
                    {
                        echo "<div class='message'>&#10075;&nbsp;&nbsp;&nbsp;" . @$res['msg'] . "&nbsp;&nbsp;&nbsp;&#10076;</div>";
                    }
                    echo "<div class='time'>" . @$res['curr_time'] . "</div>";
                    echo "</div>";
                }
            }
        ?>
    </div>
</body>
</html>