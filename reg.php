<?php
include("dbcon.php");



if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
	if (file_exists("" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "" . $_FILES["file"]["name"]);
      
      }
    }
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$email=$_POST['mail'];
$pass=$_POST['pass'];
$file=$_FILES["file"]["name"];
$date=date("Y/m/d");

$sql="INSERT INTO data(FName,LName,City,Mail,Password,File,date)
VALUES
('$fname','$lname','$city','$email','$pass','$file','$date')";

$run=mysql_query($sql);


if (!$run)
  {
  die('Error: ' . mysql_error($run));
  }
  else{
echo "<script>alert('Successfully Registered')</script>";
echo "<script>window.location.assign('login.php')</script>";
}



?>