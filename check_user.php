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
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
 $email = $_SESSION['email'];
 $password =  $_SESSION['password'];
  
  $qr=mysqli_query($Server_Connection,"SELECT * FROM `registration` WHERE `email`='$email' AND `password`='$password' and `usertype`=0");

    
    
    if (mysqli_num_rows($qr)!=0 ) {
      header("Location:admin/dash.php");
  		
  }
}

?>