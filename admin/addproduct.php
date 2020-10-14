<?php
include_once 'db_config.php';
$sql = "SELECT * FROM category";
$res = mysqli_query($Server_Connection, $sql);




?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Admin | Add Product</title>

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
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                <div class="card-body">
                  <form action="function.php" method="post" enctype="multipart/form-data" autocomplete="on">
                  <div class="row">
                    <div class="form-group">
                       <label for="product" class="field-label">Upload product Photo*</label>
                      <label class="field prepend-icon">
                        <input type="file" name="Image" id="mobile" class="gui-input" accept="image/*" onchange="loadFile(event)" required>
                        <span class="error"> <?php if(isset($photoErr)) {echo $photoErr;}?> </span>
                        <span class="field-icon"><i class="fa fa-file-image-o"></i></span>  
                      </label>
                      <label for="colorpicker-rgb" class="col-sm-4 control-label"></label>
                      <div class="col-md-10">  
                       &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
                       <img src="" id="output" height="150" width="200"  alt="">
                     </div>

                    </div><!-- end section -->
                    <div class="form-group">
                      <label for="colorpicker-rgb" class="col-sm-4"></label>
                      <div class="col-sm-4">  
                       &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
                       
                     </div>
                    <script>
                      function loadFile(event) {
                        document.getElementById('output').src =
                        URL.createObjectURL(event.target.files[0]);
                      };
                    </script>

                    
                   </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" class="form-control" name="pname" placeholder="Product Name" required>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Fabric</label>
                      <input type="text" name="fabric" class="form-control" placeholder="Fabric" required>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Design Number</label>
                      <input type="text" name="design" class="form-control" placeholder="Design Number" required>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control" name="category">
                          <?php
                          while ($row = mysqli_fetch_array($res)){
                              $category_id = $row['category_id'];
                               $category_name = $row['category_name'];
                              echo "<option value='$category_id'> $category_name</option>";
                          }
                          ?>
                      </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" name="price" class="form-control" placeholder="Price" size="5" required>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label>Quantity</label>
                      <input type="number" name="quantity" class="form-control" placeholder="Quantity" size="5" required="">
                    </div>
                    <div class="form-group">
                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      <input type="submit" name="submit" class="btn btn-success" value="Add" /> &nbsp &nbsp
                      <a href="dash.php" name="cancle" class="btn btn-secondary">Cancle</a>

                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                </form>
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
