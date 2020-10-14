<?php 
session_start();
include 'db_config.php';
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
 $email = $_SESSION['email'];
 $password =  $_SESSION['password'];
  
  $qr=mysqli_query($Server_Connection,"SELECT * FROM `registration` WHERE `email`='$email' AND `password`='$password' and `usertype`=0");

    
    
    if (mysqli_num_rows($qr)!=0 ) {
      header("Location:admin/dash.php");
  		
  }
}

?>