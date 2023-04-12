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
function other_username_data()
{
        $conn=database_connect();
        $q1="SELECT other_user FROM add_other_user WHERE user_id=" . $_SESSION['msg'];
        $data=mysqli_fetch_array(mysqli_query($conn, $q1));
        return $data[0];
}
function find_user_name($id)
{
        $q1="select user_name from user_info where user_id=". $id;
        $data=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
        return $data[0];
}
function user_profile_data($id)
{
        $conn=database_connect();
        $q1="select * from user_info where user_id=" . $id;
        return @mysqli_fetch_array(mysqli_query($conn, $q1));
}
function search_group_name($gname)
{
        $q1="select grp_id from group_info where grp_name='$gname';";
        $data=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
        if($data[0]>0)
        {
                return 1;
        }
        else
        {
                return 0;
        }
}
function search_group($id)
{
        $q1="select * from group_info where grp_id=$id;";
        $data=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
        return $data;
}
function find_table($id)
{
        $q1="SELECT grp_name FROM `group_info`where grp_id=" . $id;
        $data=mysqli_fetch_array(mysqli_query(database_connect(), $q1));
        $tab=$data[0] . "_tbl";
        return $tab;
}
function user_id($uname)
{
        $q1="select user_id from user_info where user_name='" . $uname . "'";
        $data = mysqli_fetch_array(mysqli_query(database_connect(), $q1));
        return $data[0]; 
}
?>