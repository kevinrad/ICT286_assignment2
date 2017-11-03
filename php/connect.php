<?php
	$host="localhost";
	$dbuser="X32237834";
	$pass="X32237834";
	$dbname="X32237834";
	$conn = mysqli_connect($host, $dbuser, $pass, $dbname);
	if(mysqli_connect_errno())
	{
		die("Connection Failed! ".mysqli_connect_error());
	}
?>