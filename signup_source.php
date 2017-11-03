<!DOCTYPE html>
<html>
	<head>
		<title> Signup Page </title>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link rel="stylesheet" type="text/css" href="css/SignIn.css" />
	</head>
	<body>
	<div id="container">
			<header>																		<!-- Header contains logo which onclick takes you to homepage-->
				<a href="index.html" class="logoo"><img src="images/logo.jpg" alt ="Logo" class="logo"></a>
			</header>
		
			<ul class="nav">																		<!-- Navagation bar-->
				<li class="nav"><a href="index.php" class="logoo">Home</a></li>
				<li class="nav"><a href="products.php" class="logoo">Products</a></li>
				<li class="nav"><a href="about.html" class="logoo">About</a></li>
				<li class="nav"><a href="contact.html" class="logoo">Contact</a></li>
				<li class="nav"><a href="myaccount.php" class="logoo">My Account</a></li>
			</ul>
			</div>
		<form method="POST" action="signup_destination.php">
				<div class="form-style-8">
					<h2>SIGN UP</h2>
	 
						<input type="text" id="first_name" name="first_name" placeholder="First Name" /></br>
						<input type="text" id="last_name" name="last_name" placeholder="Last Name" /></br>
						<input type="text" id="email" name="email" placeholder="Someone@example.com" /></br>
						<input type="text" id="addr" name="addr" placeholder="Full Address" /></br>
						<input type="password" id="password" name="pass" placeholder="Password" /></br>
						<input type="password" id="password" name="repass" placeholder="Retype password" /></br>
						Gender<input type="radio" id="gender" name="gender" value="male"/>Male
						<input type="radio" id="gender" name="gender" value="female"/>Female</br>
						<input type="submit" name="submit" value="submit" />
				</div>
			</form>
	</body>
</html>