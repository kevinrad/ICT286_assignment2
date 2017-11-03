<?php
	$host="localhost";
	$dbuser="root";
	$pass="";
	$dbname="assignment";
	$conn = mysqli_connect($host, $dbuser, $pass, $dbname);
	if(mysqli_connect_errno())
	{
		die("Connection Failed! ".mysqli_connect_error());
	}
?>