<?php

require_once("db_config.php");

?>
<?php

if(isset($_GET['id']))
{
  $id = $_GET['id'];
  
  $sql = "select * from product where prod_id = $id";
  
  $result = mysqli_query($Server_Connection,$sql);
  
  $row = mysqli_fetch_array($result);

}

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>OGS | Edit Product</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">
        <!-- Navbar -->
        <?php include 'header.php' ?>
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./all_product.php">Products</a></li>
                    <li class="breadcrumb-item active">Edit Product</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <!-- SELEC    T2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-body">
                  <div class="row">                     
                    <div class="col-md-6">
                    	<form action="edit_product_request.php" method="POST">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="hidden" name="id" class="txtField" value="<?php echo $row['prod_id']; ?>">
                        <input type="text" name="prod_name" class="form-control" value="<?php echo $row['prod_name']; ?>">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Fabric</label>
                        <input type="text" name="fabric" class="form-control" value="<?php echo $row['fabric']; ?>">
                      </div>
                      <!-- /.form-group --> 
                      <div class="form-group">
                        <label>Design Number</label>
                        <input type="text" name="design" class="form-control" value="<?php echo $row['design_no']; ?>">
                      </div> 
                    </div>
                    <!-- /.col -->                    
                    <div class="col-md-6">
                    	<?php
                    	$category_id_temp = $row['category_id'];
                    	// $get_category_name = "SELECT * FROM `category` WHERE `category_id`='$category_id_temp'";
                    	// $fire_query = mysqli_query($Server_Connection,$get_category_name);
                    	// $category_data = mysqli_fetch_assoc($fire_query);
                    	// $category_name = $category_data['category_name'];
                    	

                    	$get_categorys = "SELECT * FROM `category`";
                    	$fire_query = mysqli_query($Server_Connection,$get_categorys);
                    	$categories = array();
                    	while ($rwo = mysqli_fetch_assoc($fire_query)) {
                    		$id = $rwo['category_id'];
                    		$name =$rwo['category_name'];
                    		$categories[$id]= $name;
                    	}
                    ?>
                      <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                        	   <?php foreach($categories as $key => $value){
                        	    if($category_id_temp == $key){
                        	    	echo '<option value="'.$key.'" selected>'.$value.'</option>';
                        	    }else{
                        	    	echo '<option value="'.$key.'">'.$value.'</option>';
                        	    }                        	   
                        	}   ?>                 	
                      </select>
                       
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" value="<?php echo $row['price']; ?>">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="quantity" class="form-control" value="<?php echo $row['quantity']; ?>">
                      </div>
                      <div class="form-group">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <input type="submit" name="submit" class="btn bg-gradient-success btn-sm" value="Update" /> &nbsp &nbsp
                        <a href="dash.php" name="cancle" class="btn bg-gradient-secondary btn-sm">Cancle</a>

                      </div>
                    </form>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

              </div>
              <!-- /.card-body -->
            </div>
            
            <!-- jQuery -->
            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="js/demo.js"></script>
          </div>
        </section>
      </div>
    </div>
  </body>
  </html>
