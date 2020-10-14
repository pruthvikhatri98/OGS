<?php

$server_name="localhost";
$username="root";
$password="";
$database="e_commerce";


$Server_Connection=new mysqli($server_name, $username, $password, $database);

if ($Server_Connection->connect_error) {
	die("Server can not connected");
}
?>