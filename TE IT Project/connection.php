<?php

$server = "localhost";
$username = "root";
$passwd = "Akshay";
$dbname = "teit";
$conn= mysqli_connect($server, $username, $passwd,$dbname);
//mysqli_select_db($conn,$dbname);
if(!$conn)
{
	die("Error Occure While Connecting to Database".mysqli_connect_error());
}
?>