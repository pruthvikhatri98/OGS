<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])){


    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database = "e_commerce";

    $Server_Connection = new mysqli($server_name, $username, $password, $database);

    if($Server_Connection->connect_error){
        die("Connection error");
    }


    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $file_name = $_FILES["Image"]["name"];
        $file_tmp = $_FILES["Image"]["tmp_name"];
        $folder1 = "users/Image/".$file_name;
        $folder2 = "Image/".$file_name;
        $folder = "Image/".$file_name;

        if (!move_uploaded_file($file_tmp,$folder1)) {
            throw new Exception('Could not move file');
        }
        if(!copy ( $folder1 , $folder2 ))
        {  
            throw new Exception('Could not move 2nd file');
        }

//        move_uploaded_file($file_tmp,$folder1);
//        move_uploaded_file($file_tmp,$folder2);
        //        $image = $_FILES['Image']['name'];
        $name = $_POST['pname'];
        $fabric = $_POST['fabric'];
        $design = $_POST['design'];
        $category = $_POST['category'];    
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];




        $query = "INSERT INTO `product`(`category_id`, `prod_name`, `fabric`, `design_no`, `quantity`, `price`, `prod_image`) VALUES ('$category', '$name', '$fabric', '$design', '$quantity', '$price', '$folder')";
        $_fire = mysqli_query($Server_Connection,$query);

        echo $Server_Connection->error;

    }
    // if(isset($_FILES["Image"]))
    // {
    $file_name = $_FILES['Image']['name'];
    $file_tmp = $_FILES['Image']['tmp_name'];

    if(move_uploaded_file($file_tmp,"image/".$file_name)==1)
    {
        $query="insert into image(Image_path)values('".$file_name."')";
        mysqli_query($Server_Connection,$query);
        echo "success";
        header('Location: addproduct.php');


    }
    else
    {
        header('Location: addproduct.php');
        echo "errors";

    }
    //}
}
?>

