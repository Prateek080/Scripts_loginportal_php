<?php

session_start();
if (isset($_SESSION['vow']))
{

include('dbcon.php');
$user = "admin";
$id = $_POST['id'];
$newF = $_POST['newF'];
$newL = $_POST['newL'];
$newC = $_POST['newC'];
$newM = $_POST['newM'];

$result1 = "UPDATE data SET Fname='$newF' WHERE Id='$id'";
$run = mysql_query($result1) or die("ERROR".mysql_error());
$result2 = "UPDATE data SET Lname='$newL' WHERE Id='$id'";
$run = mysql_query($result2) or die("ERROR".mysql_error());
$result3 = "UPDATE data SET city='$newC' WHERE Id='$id'";
$run = mysql_query($result3) or die("ERROR".mysql_error());
$result4= "UPDATE data SET mail='$newM' WHERE Id='$id'";


$run = mysql_query($result4) or die("ERROR".mysql_error());

echo "<script>alert('Changed Successfully')</script>";
echo "<script>window.location.assign('admin.php')</script>";
}

else
{
echo "<script>window.location.assign('login.php')</script>";
}
?>