<html>
<head>
</head>
<body bgcolor="gray">
<div align="right">
<form action="destroy.php" method="POST">
<input type="submit" value="LOGOUT"></input>
</form>
</div>
<?php

session_start();
if (isset($_SESSION['view']))
{

include('dbcon.php');
$user = $_SESSION['user'];

$result = "SELECT Password FROM data WHERE Mail='$user'";
$run = mysql_query($result) or die("ERROR".mysql_error());
$row=mysql_fetch_array($run);

}
?>
<br><br><br><br><br><br>
<div align="center">
<form action="update.php" method="POST">
<font face='Castellar' size='3'>NEW PASSWORD<input type="password" name="pass" value=""></input></font>
<br><br><br><input type="submit" value="Change"></input>
</form>
</div>
</body>
</html>