<?php

$con=mysql_connect('localhost','root','')or die("Unable to connect to MySQL: " . mysql_error()); 
mysql_select_db("log")or die("Unable to select database: " . mysql_error()); 
?>