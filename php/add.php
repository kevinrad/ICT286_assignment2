<!DOCTYPE html>
<?php
	include('connect.php')
?>
<html lang=	"en" xmlns- "http://www.3.org/1999/xhtml">
	<head>
		<title>Signup Page</title>
		<link rel="stylesheet" type="text/css" href="../css/style1.css" />
		<link rel="stylesheet" type="text/css" href="../css/SignIn.css" />
	</head>
	<body>
		<div id="container">
			<header>																		<!-- Header contains logo which onclick takes you to homepage-->
				<a href="index.html" class="logoo"><img src="../images/logo.jpg" alt ="Logo" class="logo"></a>
			</header>
		
			<ul class="nav">																		<!-- Navagation bar-->
				<li class="nav"><a href="../index.php" class="logoo">Home</a></li>
				<li class="nav"><a href="../products.php" class="logoo">Products</a></li>
				<li class="nav"><a href="../about.html" class="logoo">About</a></li>
				<li class="nav"><a href="../contact.html" class="logoo">Contact</a></li>
				<li class="nav"><a href="../myaccount.php" class="logoo">My Account</a></li>
			</ul>
			
			<form class="SearchBox">												<!-- A form for Search box -->
				<input type="text" placeholder ="Search Site">
				<button class="search">Search</button>
			</form>
			<div id="body">
				<?php
					$error="";
					if($_SERVER["REQUEST_METHOD"] == "POST")
					{
						$productid = mysqli_real_escape_string($conn,$_POST['productid']);
						$productname = mysqli_real_escape_string($conn,$_POST['productname']);
						$productdescription = mysqli_real_escape_string($conn,$_POST['productdescription']);
						$price = mysqli_real_escape_string($conn,$_POST['price']);
						
						$flag=0;
						if(empty($productid))
						{
							echo("<br>*no Product ID entred");
							$flag=$flag+1;
						}
						if(empty($productname))
						{
							echo("<br>*no Product Name entred");
							$flag=$flag+1;
						}
						if(empty($productdescription))
						{
							echo("<br>*no Product Description entred");
							$flag=$flag+1;
						}
						if(empty($price))
						{
							echo("<br>*no Price entred");
							$flag=$flag+1;
						}
						
						if($flag==0)
						{
							mysqli_query($conn, "INSERT INTO products VALUES('$productid','$productname','$productdescription', '$price')");
							echo "<br />You have successfully added the product!";
						}
						else
						{
							echo "<br />Please go back and fix the errors listed above.";
						}
					}
				?>
			</div>
			<div id="footer">
				Copyright &copy; 2017. laptops galore inc.
				<img src="../images/vcss.gif" alt="vcss_validation" class="vcss" />
			</div>
		</div>
	</body>
</html>