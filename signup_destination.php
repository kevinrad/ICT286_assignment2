<?php
include('connect.php');
?>
<html>
	<head>
		<title> Signup Page </title>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link rel="stylesheet" type="text/css" href="css/SignIn.css" />
	</head>
</html>
		<?php
			if(isset($_POST['submit']))
			{
				$first=$_POST['first_name'];
				$last=$_POST['last_name'];
				$email=$_POST['email'];
				$gender=$_POST['gender'];
				$pass=$_POST['pass'];
				$repass=$_POST['repass'];
				$addr=$_POST['addr'];
				$name=$first.' '.$last;
					if(empty($first) || empty($last) || empty($email) || empty($gender) || empty($pass) || empty($addr))
					{
						echo "Fill the empty field";
					}
					elseif($pass!=$repass)
					{
						echo "Passwords didnt match";
					}
					else
					{
						$sql="INSERT INTO user1(name,email,gender,pass,addr)". "values('$name','$email','$gender','$pass','$addr')";
						$res=mysqli_query($conn,$sql);
						if(!$res)
						{
							die("Query Failed! ".mysqli_error($conn));
						}
					else
					{
						header("location:index.php");
					}
					}
			}
		