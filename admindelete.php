<?php

session_start();
if (isset($_SESSION['vow']))
{

include('dbcon.php');
$user = "admin";
$id = $_POST['id'];
$result = "DELETE FROM data WHERE Id='$id'";
$run = mysql_query($result) or die("ERROR".mysql_error());

echo "<script>alert('Changed Successfully')</script>";
echo "<script>window.location.assign('admin.php')</script>";
}
else
{
echo "<script>window.location.assign('login.php')</script>";
}
?>

