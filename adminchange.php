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
<br><br>
<h1>TO UPDATE</h1>
<br><br>
<?php

session_start();
if (isset($_SESSION['vow']))
{

include('dbcon.php');
$user ="admin";

$id=$_POST['id'];



echo "<font face='ALGERIAN' size='5'>UPDATE DETAILS IN SPACE GIVEN BELOW";
$result = "SELECT * FROM data WHERE Id='$id'";
$run = mysql_query($result) or die("ERROR".mysql_error());
$row=mysql_fetch_array($run);


echo "<form action='adminupdate.php' method='POST'><input type='hidden' name='id' value='". $row['Id'] ."'></input><br> First Name &nbsp;&nbsp;<input type='text' name='newF' value='" .$row['Fname'] . "'><br>Last Name &nbsp;&nbsp;<input type='text' name='newL' value='" .$row['Lname'] . "'><br>City &nbsp;&nbsp;<input type='text' name='newC' value='" .$row['City'] . "'><br>Email &nbsp;&nbsp;<input type='text' name='newM' value='" .$row['Mail'] . "'><br><br><input type='submit' value='update'></input></form>";

}
?>





</form>
</div>

</body>
</html>