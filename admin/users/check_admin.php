<?php 

include 'db_config.php';
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
 $email = $_SESSION['email'];
 $password =  $_SESSION['password'];
  
  $qr=mysqli_query($Server_Connection,"SELECT * FROM `registration` WHERE `email`='$email' AND `password`='$password' and `usertype`=1");

    
    
    if (mysqli_num_rows($qr)!=1) {
      header("Location:index.php?error=Invalid Login Details");

  
  }
}

?>