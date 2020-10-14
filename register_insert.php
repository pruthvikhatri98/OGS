<?php 

$server_name="localhost";
$username="root";
$password="";
$database="e_commerce";


$Server_Connection=new mysqli($server_name, $username, $password, $database);

if ($Server_Connection->connect_error) {
	die("Server can not connected");
}

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$mobile=$_POST['mobile'];

	$insert = "INSERT into `registration` (`name`,`email`, `password`, `address`, `city`, `pincode`, `contact`) VALUES ('$name', '$email', '$password', '$address', '$city', '$pincode', '$mobile')";
	if (mysqli_query($Server_Connection, $insert)) {
		header("location:index.php");
	}
	else
	{
		echo "Error";
	}
}
 ?>