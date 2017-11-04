<!DOCTYPE HTML>
<html lang=	"en" xmlns- "http://www.3.org/1999/xhtml">
	<head>
		<title>SEARCH</title>
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
			</div>
			
	<div id="body">
<?php
	if(isset($_POST['keywords']))
	{
	$host="localhost";
	$dbuser="X32524795";
	$pass="X32524795";
	$dbname="X32524795";
	$conn = mysqli_connect($host, $dbuser, $pass, $dbname);
	if(mysqli_connect_errno())
	{
		die("Connection Failed! ".mysqli_connect_error());
	}
	else{
		$keywords = $_POST['keywords'];
		$sql="select * from products where description LIKE '%{$keywords}%'";
		$query=mysqli_query( $conn,$sql);
		if(empty($keywords)){
			echo '?>'.'<script language="javascript" type="text/javascript"> alert("You did not enter anything in the search box!!!</br> Please enter keywords."); </script></p>'.'<?php';
		}
		else
		{
		$num_rows = mysqli_num_rows($query);
		echo "<p>Found ".$num_rows." results</p>";
		while($row = mysqli_fetch_array($query)){
			$id 	 = $row['id'];
			$brand	 = $row['brand'];
			$model	 = $row['model'];
			$desc 	 = $row['description'];
			$img	 = $row['image'];
			$price	 = $row['price'];
			echo '<h3><a href="checkout.php">'.$brand.'   '.$model.'</a></h3><p>' .$img.''.$desc.'</p><p>Price: $'.$price.' '
			.'<a href="checkout.php"><input type ="button" value="Buy"></a></p></br>';
	}
		}
	}
	}
	?>
	</div>
			<div id="footer">
				Copyright &copy; 2017. laptops galore inc.
				<img src="images/vcss.gif" alt="vcss_validation" class="vcss" />
			</div>
		
	</body>
	</html>

