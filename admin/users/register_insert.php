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
	$email=$_POST['email'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$contact=$_POST['phone'];

	$insert = "INSERT into `registration` (`email`, `password`, `firstname`, `lastname`, `address`, `city`, `pincode`, `contact`) VALUES ('$email', '$password', '$firstname', '$lastname', '$address', '$city', '$zip', '$contact')";
	if (mysqli_query($Server_Connection, $insert)) {
		header("location:myaccount.php");
	}
	else
	{
		echo "Error";
	}
}
 ?>