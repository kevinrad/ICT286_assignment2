<!DOCTYPE html>
<html lang=	"en" xmlns- "http://www.3.org/1999/xhtml">
	<head>
		<title>Signup Page</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link rel="stylesheet" type="text/css" href="css/SignIn.css" />
	</head>
	<body>
		<div id="container">
			<header>																		<!-- Header contains logo which onclick takes you to homepage-->
				<a href="index.html" class="logoo"><img src="images/logo.jpg" alt ="Logo" class="logo"></a>
			</header>
		
			<ul class="nav">																		<!-- Navagation bar-->
				<li class="nav"><a href="index.html" class="logoo">Home</a></li>
				<li class="nav"><a href="products.php" class="logoo">Products</a></li>
				<li class="nav"><a href="about.html" class="logoo">About</a></li>
				<li class="nav"><a href="contact.html" class="logoo">Contact</a></li>
				<li class="nav"><a href="myaccount.php" class="logoo">My Account</a></li>
			</ul>
			
			<form class="SearchBox">												<!-- A form for Search box -->
				<input type="text" placeholder ="Search Site">
				<button class="search">Search</button>
			</form>
			
			<form method="POST" action="php/signup_destination.php">
				<div class="form-style-8">
					<h2>SIGN UP</h2>
					
					<input type="text" id="first_name" name="first_name" placeholder="First Name" /></br>
					<input type="text" id="last_name" name="last_name" placeholder="Last Name" /></br>
					<input type="text" id="username" name="username" placeholder="Username" /></br>
					<input type="text" id="phone" name="phone" placeholder="Phone Number" /></br>
					<input type="text" id="email" name="email" placeholder="Email" /></br>
					<input type="text" id="addr" name="addr" placeholder="Full Address" /></br>
					<input type="password" id="password" name="pass" placeholder="Password" /></br>
					<input type="password" id="password" name="repass" placeholder="Retype password" /></br>
					Gender
					<input type="radio" id="gender" name="gender" value="male"/>Male
					<input type="radio" id="gender" name="gender" value="female"/>Female</br>
					<input type="submit" name="submit" value="submit" />
				</div>
			</form>
			
			<div id="footer">
				Copyright &copy; 2017. laptops galore inc.
				<img src="images/vcss.gif" alt="vcss_validation" class="vcss" />
			</div>
		</div>
	</body>
</html>