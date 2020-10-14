<?php
$server_name="localhost";
$username="root";
$password="";
$database="e_commerce";

$Server_Connection = new mysqli($server_name, $username, $password, $database);

if($Server_Connection->connect_error){
    die("Connection Error");
}

if (isset($_POST['submit'])) {
    $cat_name=$_POST['category_name'];


    $insert = "INSERT INTO `category`(`category_name`) VALUES ('$cat_name')";

    if (mysqli_query($Server_Connection,$insert)) {
        header("location:category_add.php");
    }
    else{
        echo "Error";
    }


}

?><?php
