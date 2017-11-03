<!DOCTYPE html>
<?php
	include('php/session.php');
?>
<html lang=	"en" xmlns- "http://www.3.org/1999/xhtml">
	<head>
		<title>My Account</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
	</head>
	<body>
		<div id="container">
			<header>																		<!-- Header contains logo which onclick takes you to homepage-->
				<a href="index.html"><img src="images/logo.jpg" alt ="Logo" class="logo">
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
			
			<div id="body">
				<legend>My Account Info</legend><br />
				<a class="logout" href = "php/logout.php">Logout</a>
				<?php
					$username = $_SESSION['login_user'];
							
					$query = "SELECT username, name, phone, email, address, gender, UserType FROM users WHERE username='$username';";
					$result = mysqli_query($conn, $query);
					
					if (!$result)
					{
						print "Error - the query could not be executed";
						var_dump($result);
						exit;
					}
					else
					{
						while ($line = mysqli_fetch_array($result))
						{
							echo "<p>Name: " . $line['name'] . "<br />" . "Username: " . $line['username'] . "<br />" . "Address: " . $line['address'] . "<br />" . "Phone Number: " . $line['phone'] . "<br />" . "Email: " . $line['email'] . "<br />" . "Gender: " . $line['gender'] . "<br />" . "Type of Registration: " . $line['UserType'] . "</p>";
						}
						
						$query = "SELECT usertype FROM users WHERE username='$username';";
						$result = mysqli_query($conn, $query);
						
						$row = mysqli_fetch_array($result);
						
						if($row['usertype']=='admin')
						{
							echo "Hi Admin!<br>";
							?>
								<a class="add" href ="add.html">Add a Product</a>
							<?php
						}
					}
					mysqli_free_result($result);
					mysqli_close($conn);
				?>
			</div>
			
			<div id="footer">
				Copyright &copy; 2017. laptops galore inc.
				<img src="images/vcss.gif" alt="vcss_validation" class="vcss" />
			</div>
		</div>
	</body>
</html>
