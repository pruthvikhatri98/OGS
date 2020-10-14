<?php 
session_start();

$server_name="localhost";
$username="root";
$password="";
$database="e_commerce";


$Server_Connection=new mysqli($server_name, $username, $password, $database);

if ($Server_Connection->connect_error) {
	die("Server can not connected");
}

if (isset($_POST['email']) && isset($_POST['password'])) {
	$email=mysqli_real_escape_string($Server_Connection,$_POST['email']);
	$password=mysqli_real_escape_string($Server_Connection,$_POST['password']);
	$qr=mysqli_query($Server_Connection,"SELECT * FROM `registration` WHERE `email`='$email' AND `password`='$password'");
	if(mysqli_num_rows($qr)>0){
		$data=mysqli_fetch_assoc($qr);
		$_SESSION['email']=$_POST['email'];
		$_SESSION['password']=$_POST['password'];
		if ($data['usertype']==1) {
			header("Location:dash.php");
		}
		else
		{
			header("Location:index.php");
		}

	}
	else
	{
		header("Location:Login.php?error=Invalid Login Details"); 
		#echo $email;
		#echo $password;
	}
}
else{
	header("Location:Login.php?error=Please Enter Email and Password");
}
?>



