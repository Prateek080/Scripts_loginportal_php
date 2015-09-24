
<?php

include("dbcon.php");
mysql_select_db('log');

$user=$_POST['user'];
$pass=$_POST['pass'];



$result = "SELECT Password FROM data WHERE Mail='$user'";
$run = mysql_query($result) or die("ERROR".mysql_error());
$row=mysql_fetch_array($run);


if ($user == "admin" && $pass == "admin")
{
session_start();
$_SESSION['vow']=1;
$_SESSION['user']="admin";
echo "<script>window.location.assign('admin.php')</script>";
}


else if($pass != $row[0] || $pass == "")
{
	echo "<script>alert('Password dont match or mail id is wrong')</script>";
	echo "<script>window.location.assign('login.php')</script>";
}




else
{
session_start();
$_SESSION['view']=1;
$_SESSION['user']=$user;
echo "<script>window.location.assign('user.php')</script>";
}
?>
