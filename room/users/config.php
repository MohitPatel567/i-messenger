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
function database_connect()
{
        $conn = mysqli_connect('localhost', "root", "");
        mysqli_select_db($conn, "i-messenger");
        return $conn;
}
function user_profile_data($id)
{
        $conn=database_connect();
        $q1="select * from user_info where user_id=" . $id;
        return @mysqli_fetch_array(mysqli_query($conn, $q1));
}
function find_table($id)
{
        $data=user_profile_data($id);
        @$str=$data[1]."_tbl";
        return $str;
}
function count_unseen_message($user_id, $other_user_id)
{
        $table_name=find_table($user_id);
        $q1 = "SELECT count(message_id) FROM " . $table_name . " WHERE other_user_id=" . $other_user_id . " and status=0 and msg_type=0";
        @$data=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
        if(@$data[0]>0)
        {
                return $data[0];
        }
        else
        {
                return 0;
        }
}
function other_username_data()
{
        $conn=database_connect();
        $q1="SELECT other_user FROM add_other_user WHERE user_id=" . $_SESSION['msg'];
        $data=mysqli_fetch_array(mysqli_query($conn, $q1));
        return $data[0];
}
function search_particular_user($user)
{
        $conn=database_connect();
        $q1="SELECT user_id FROM `user_info` WHERE user_name like '%". $user ."%'";
        return mysqli_query($conn, $q1);        
}
function search_id($uname, $tab)
{
        $conn=database_connect();
        $q1="SELECT user_id FROM " . $tab . " WHERE user_name='" . $uname . "' and user_id<>". $_SESSION['msg'];
        $res=mysqli_query($conn, $q1);
        //data found or not
        if($data = mysqli_fetch_array($res))
        {
                //data is found
                return $data[0];
        }
        else
        {
                //data is not found
                return 0;
        }
}
function add_user($uname)
{
        $temp=search_id($uname, "user_info");
        //user found or not
        if($temp==0)
        {
                $_SESSION['msg1']=$uname . " is not found......";
        }
        else
        {
                $conn=database_connect();
                $q1="select * from add_other_user where user_id=". $_SESSION['msg'];
                if($data=mysqli_fetch_array(mysqli_query($conn, $q1)))
                {
                        $flag=0;
                        $arr=explode(", ", $data[2]);
                        print_r($arr);
                        foreach($arr as $res)
                        {
                            if($res==$temp)
                            {
                                    $_SESSION['msg1']=$uname . " is alredy exist....";
                                    $flag=1;
                                    break;
                            }
                        }
                        if($flag==0)
                        {
                                    $str=$data[2] . ", " . $temp;
                                    $q1="update add_other_user set other_user='" . $str . "' where user_id=" . $_SESSION['msg'];
                                    $_SESSION['msg1']=$uname. " sucessfully added.....";
                        }
                }
                else
                {
                        $q1="insert into add_other_user (user_id,  other_user) values (" . $_SESSION['msg'] . ", '" . $temp . "')";
                        $_SESSION['msg1']=$uname. " sucessfully added.....";
                }
                mysqli_query($conn, $q1);
        }      
}
?>