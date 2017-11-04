<!DOCTYPE HTML>
<html lang=	"en" xmlns- "http://www.3.org/1999/xhtml">
	<head>
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
	</head>
	<body>
		<div id="container">
			<header>																		<!-- Header contains logo which onclick takes you to homepage-->
				<a href="index.php" class="logoo"><img src="images/logo.JPG" alt ="Logo" class="logo"></a>
			</header>
		
			<ul class="nav">																		<!-- Navagation bar-->
				<li class="nav"><a href="index.php" class="logoo">Home</a></li>
				<li class="nav"><a href="products.php" class="logoo">Products</a></li>
				<li class="nav"><a href="about.html" class="logoo">About</a></li>
				<li class="nav"><a href="contact.html" class="logoo">Contact</a></li>
				<li class="nav"><a href="myaccount.php" class="logoo">My Account</a></li>
			</ul>
			
			<form action ="search.php" method="POST" class="SearchBox">												<!-- A form for Search box -->
				<input type="text" placeholder ="Search Product" name="keywords">
				<button>Search</button>
			</form>
			
			<div id="body">
				<br /><h1 class="employee_heading">Who We Are</h1><br />
				<h2 class="title">CEO - John Doe</h2>
				<p class="home_p">
				Hi, I'm John Doe and I'm the founder of Laptops Galore. I started this business with a net worth of $10 when I was 6 Years old in the garage of my parents house. 
				Today we are the world largest laptop retailer with over 25,000 stores world wide. We pride ourselves in quality and never take shortcuts to get where ever it is we're going. 
				If you have been cheated before then we know how you feel. At Laptops Galore, we provide 24/7 customer service to all out customers and have a 100% track reckord for resolving everyones issues. - John Doe
				</p>
				<img class="employee" src="images/employee1.png" alt="11" />
				<h2 class="title">COO - Jane Doe</h2>
				<p class="home_p">
				Hi, I'm Jane Doe and I co-founded Laptops Galore along-side John. We originally became business partners 
				to make Laptops Galore a small-city business. With-in 6 months of opening up shop, we were offered multiple 
				franchise plans and decided to expand. With over 45 years combined experience in the IT industry, I believe 
				we are the best at what we do and are always striving to do better. - Jane Doe
				</p>
				<img class="employee" src="images/employee2.png" alt="12" />
			</div>
			</div>
			<div id="footer">
				Copyright &copy; 2017. laptops galore inc.
				<img src="images/vcss.gif" alt="vcss_validation" class="vcss" />
			</div>
		
	</body>
</html>
