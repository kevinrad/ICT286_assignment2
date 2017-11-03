<?php
	include("connect.php");
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$myusername= mysqli_real_escape_string($conn,$_POST['username']);
		$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

		$sql="SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active=$row['active'];

		$count = mysqli_num_rows($result);

		if($count == 1){
			$_SESSION['login_user'] = $myusername;

			header("location: ../myaccount.php");
		}
		else{
			$error = "Your Login Name or Password is invalid";
		}
	}
?>