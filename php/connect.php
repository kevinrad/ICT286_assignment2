<?php
	$host="localhost";
	$dbuser="X32524795";
	$pass="X32524795";
	$dbname="X32524795";
	$conn = mysqli_connect($host, $dbuser, $pass, $dbname);
	if(mysqli_connect_errno())
	{
		die("Connection Failed! ".mysqli_connect_error());
	}
?>
