<html>
<head>
</head>
<body bgcolor="gray">
<div align="left">
<form action="search.php" method="POST">
<input type="text" name="name" value=""></input><br>by
<input type="radio" name="search" value="id" checked="checked">Id</input>
<input type="radio" name="search" value="mail">Mail</input>
<input type='submit' value='search'></input>
</form>
<form action="searchdate.php" method="POST">
<select name="date">
<option value="2013-06-17">2013-06-17</option>
<option value="2013-06-16">2013-06-16</option>
<option value="2013-06-15">2013-06-15</option>
<option value="2013-06-14">2013-06-14</option>
</select>
<input type="submit"value="search by date">
</form>
</form>
</div>
<div align="right">
<form action="destroy.php" method="POST">
<input type="submit" value="LOGOUT"></input>
</form>
</div>
<div align="center">
<h1>Welcome ADMIN</h1>
<br>

<h2>Registered Users</h2>
<br>
<font face="algerian" size="6">
<?php

session_start();
if (isset($_SESSION['vow']))
{

include('dbcon.php');
$user ="admin";
$result = "SELECT * FROM data";
$run = mysql_query($result) or die("ERROR".mysql_error());
echo "<table cellspacing='20' cellpadding='20'>";
echo "<tr>";
  echo "<th>Id</th>";
  echo "<th>First Name</th>";
  echo "<th>Last  Name</th>";
  echo "<th>City</th>";
  echo "<th>Email</th>";
  echo "<th>Update here</th>";
  echo "<th>Delete here</th>";
  echo "</tr>";
while($row = mysql_fetch_array($run))
  {
  
  echo "<tr>";	
  echo   "<td>" . $row['Id'] . "</td><td>" . $row['Fname'] . "</td><td> " . $row['Lname']. "</td><td> " . $row['City']. "</td><td> " . $row['Mail'] . "</td><td><form action='adminchange.php' method='POST'><input type='hidden' name='id' value='". $row['Id'] ."'><input type='submit' value='update'></input></form></td><td><form action='admindelete.php' method='POST'><input type='hidden' name='id' value='". $row['Id'] ."'></input><input type='submit' value='delete'></input></form></td>";
  echo "</tr>";
  
  }
echo "</table>";
}
else
{
echo "<script>window.location.assign('login.php')</script>";
}

?>
</font>


</body>
</html>