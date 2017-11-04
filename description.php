<?php	
	$host="localhost";
	$dbuser="X32524795";
	$pass="X32524795";
	$dbname="X32524795";

$conn = mysqli_connect($host, $dbuser, $pass, $dbname);
if(mysqli_connect_errno())
{
    die("Connection Failed! ".mysqli_connect_error());
} else {
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="select * from products where id = $id";
} else {
    $sql="select * from products";
} 

$query=mysqli_query( $conn,$sql);

while($row = mysqli_fetch_array($query)){
			$id 	 = $row['id'];
			$brand	 = $row['brand'];
			$model	 = $row['model'];
			$desc 	 = $row['description'];
			$img	 = $row['image'];
			$price	 = $row['price'];
			echo '<h3>'.$brand.'   '.$model.'</h3><p>' .$img.''.$desc.'</p><p>Price: $'.$price.' '
			.'<input type ="button" value="Buy"></p></br>';
	}
}
?>
