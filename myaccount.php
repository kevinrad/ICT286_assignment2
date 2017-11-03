<!DOCTYPE HTML>
<html lang=	"en" xmlns- "http://www.3.org/1999/xhtml">
	<head>
		<title>Contact Us</title>
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
			<form class="SearchBox">												<!-- A form for Search box -->
				<input type="text" placeholder ="Search Product">
				<button>Search</button>
			</form>
			
		</div>
			
		<div id="inner-body">
					<form method="POST" action="">
				<div class="form-style-8">
					<h2>LOG IN</h2>
	 
						<input type="text" id="name" name="Username" placeholder="Username" />
						<input type="password" id="password" name="Password" placeholder="Password" />
						<input type="button" onclick="" value="Login" />
					<p>Dont have an account?  	<a href="Signup_source.php">Signup</a> <p>    
	  
				</div>
			</form>

		</div>
			<div id="footer">
				Copyright &copy; 2017. laptops galore inc.
				<img src="images/vcss.gif" alt="vcss_validation" class="vcss" />
			</div>
		</div>
	</body>
</html>
