<html>
<head>
</head>
<body bgcolor="gray">
<div align="right">
<form action="destroy.php" method="POST">
<input type="submit" value="LOGOUT"></input>
</form>
</div>
<div align="center">
<h1>Welcome</h1>
<br><br>
</div>
<?php

session_start();
if (isset($_SESSION['view']))
{

include('dbcon.php');
$user = $_SESSION['user'];
$result = "SELECT * FROM data WHERE Mail='$user'";
$run = mysql_query($result) or die("ERROR".mysql_error());
while($row = mysql_fetch_array($run))
  {
  
  $file = $row['File'];
  
  echo "<img src = '" . $file . "'/>";
  echo "<br><br><br>";
  echo "<font face='Algerian' size='6'>NAME:&nbsp;&nbsp;" . $row['Fname'] . "&nbsp;" . $row['Lname'] . "</font>";
  echo "<br><br><br>";
  echo "<font face='Algerian' size='6'>City:&nbsp;&nbsp;" . $row['City'] . "</font>";
  echo "<br><br><br>";
  echo "<font face='Algerian' size='6'>Mail:&nbsp;&nbsp;" . $row['Mail'] . "</font>";
  echo "<br><br><br>";
  echo "<font face='Algerian' size='6'>Password:&nbsp;&nbsp;" . $row['Password'] . "</font>";
  
  }

}
else
{
echo "<script>window.location.assign('login.php')</script>";
}
?>
<div align="right">
<br><br>
<a href="change.php">TO CHANGE YOUR PASSWORD CLICK HERE</a>
</div>
</body>
</html>