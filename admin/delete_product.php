<?php
//error_reporting(0);
require('db_config.php');
$id=$_GET['id'];
$query = "DELETE FROM `product` WHERE  `prod_id`='$id'";
$fire = mysqli_query($Server_Connection,$query);
//echo $data;
if(mysqli_affected_rows($Server_Connection)){
    header("Location: all_product.php");
}
else{    
    $err ="<h1>Fail</h1>";
    header("Location: all_product.php?err=$err");
    echo "Fail";
}
?>