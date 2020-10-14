        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>OGS | Add Category</title>

            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
            <!-- icheck bootstrap -->
            <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
                                <h1>Add Category</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                    <li class="breadcrumb-item active">Add Category</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <center>
        <div class="col-sm-6">
        <div class="category-box">

            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body category-card-body">

                    <center>
                    <form action="category_insert.php" method="post" name="category" AUTOCOMPLETE="on">
                        <div class="category-logo">
                            <h3 style="margin: 0px;">Category</h3>
                        </div>
                        <hr>
                        <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name" required>
                            <div class="input-group-append">

                            </div>
                        </div>
                        </div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary btn-block" name="submit">Add</button>
                            </div>
                            <!-- /.col -->
                    </form>
                    </center>



                </div>
                <!-- /.login-card-body -->
            </div>

        </div>
        </div>
                </center>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="js/adminlte.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

        </body>
        </html>
