<?php
session_start();
$host = "localhost"; 
$user = "user1"; 
$pass = "testing"; 
$db_name = "crawler"; 

$dbhandle = $_SESSION['dbhandle'] = mysql_connect($host, $user, $pass) or die("Unable to connect. <br>");
echo "Connected Successfully !<br>";

$selected = mysql_select_db($db_name,$dbhandle) or die("Could not select database");

?>