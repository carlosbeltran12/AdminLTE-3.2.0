<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'layauts/head.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php require 'layauts/preloader.php'; ?>
    <?php require 'layauts/navbar.php'; ?>
    <?php require 'layauts/sidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="form_usuario.php" method="POST" class="p-4" >
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label"><i class="fas fa-user"></i> Nombre:</label>
                                        <input type="text" name="nombre" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="apellido" class="form-label"><i class="fas fa-user-tag"></i> Apellido:</label>
                                        <input type="text" name="apellido" class="form-control" required>
                                    </div>
                                    <button type="submit"> Registrar</button>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require 'layauts/footer.php'; ?>
    <?php require 'layauts/sidebar-dark.php'; ?>
</div>
<!-- ./wrapper -->
<?php require 'layauts/script.php'; ?>
</body>
</html>