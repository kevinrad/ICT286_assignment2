<?php
	include('connect.php');
	
	if(isset($_POST['submit']))
	{
		$first=$_POST['first_name'];
		$last=$_POST['last_name'];
		$username=$_POST['username'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$pass=$_POST['pass'];
		$repass=$_POST['repass'];
		$addr=$_POST['addr'];
		$name=$first.' '.$last;
		
		if(empty($first) || empty($last) || empty($username) || empty($phone) || empty($email) || empty($gender) || empty($pass) || empty($addr))
		{
			echo "Fill the empty field";
		}
		else if($pass!=$repass)
		{
			echo "Passwords didnt match!";
		}
		else
		{
			$sql="INSERT INTO users values ('$username','$pass','$name','$phone','$email','$addr','$gender',default)";
			$res=mysqli_query($conn,$sql);
			
			if(!$res)
			{
				die("Query Failed! ".mysqli_error($conn));
			}
			else
			{
				header("location:../myaccount.php");
			}
		}
	}
?>