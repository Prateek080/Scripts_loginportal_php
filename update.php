<?php

session_start();
if (isset($_SESSION['view']))
{

include('dbcon.php');
$user = $_SESSION['user'];
$pass = $_POST['pass'];
$result = "UPDATE data SET Password=$pass WHERE Mail='$user'";
$run = mysql_query($result) or die("ERROR".mysql_error());

echo "<script>alert('Changed Successfully')</script>";
echo "<script>window.location.assign('user.php')</script>";
}
else
{
echo "<script>window.location.assign('login.php')</script>";
}
?>