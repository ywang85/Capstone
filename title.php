
<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['username'])){
	header("Location:login.html");
	exit();
}

//包含数据库连接文件
include('conn.php');
//$banner_id = $_SESSION['banner_id'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from users where username='$username' limit 1");
$row = mysql_fetch_array($user_query);

echo "<div style='text-align:right;'><i style='color:white;'> Banner ID: ",$row['banner_id'],"<br />";
echo 'Name: ',$row['first_name'],' ',$row['last_name'],'<br />';
echo 'User type: ',$row['user_type'],'<br />';
echo "</div>";