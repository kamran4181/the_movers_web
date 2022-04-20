<?php

error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=7;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include"title.php"; ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include"topbar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include"sidebar.php"; ?>
        <?php
date_default_timezone_set('Asia/Kolkata');
$today = date("D d M Y");
$edit = $_GET['edit'];

//  $resultt = mysqli_query($con,"SELECT * FROM services where id=".$edit."");
//  $roww = mysqli_fetch_array($resultt);

if(isset($_POST['publise'])){
	
    $title = $_POST['title'];
    $section_name = $_POST['sec_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
      
    $insertdata = mysqli_query($con,"UPDATE contact_ui SET title='$title',section_name='$section_name',phone_nbr='$phone',email='$email',adress='$adress',date='$today' where section_name='section-1'");
      echo "<script>alert('Posted Successfully');</script>
        <script>window.location.href = 'contactUs-ui.php'</script>";
}

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                            <h1><b>Edit ContactUs UI</b></h1>
                        </div>
                        <!-- <div class="col-sm-6">
                            <a href="view-services.php" class="btn btn-success"><i class="fa fa-eye"
                                    aria-hidden="true"></i> View Services</a>
                        </div> -->

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content --> 
            <!-- ///////////////////////section-1 //////-->
            <?php 
               $result = mysqli_query($con,"SELECT * FROM contact_ui WHERE section_name='section-1'");
               $row= mysqli_fetch_array($result);
            ?>
            <section class="content">
                <div class="row">
                <div class="col-sm-12">
                        <h1><b>Section-1</b></h1>
                    </div>
                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card card-outline card-info">

                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Enter Title</label>
                                        <input name="title" value="<?php  echo $row["title"]; ?>" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="sec_name" value="section-1">

                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input name="phone" value="<?php echo $row["phone_nbr"]; ?>" type="text"
                                            class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" value="<?php  echo $row["email"]; ?>" type="email"
                                            class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="card-body pad">
                                    <label>Adress</label>
                                    <div class="mb-3">
                                        <textarea name="adress" placeholder="Adrees" style="width: 100%;"
                                            rows="4" cols="23"><?php echo $row["adress"]; ?></textarea>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <button type="submit" name="publise"
                                                        class="btn btn-block btn-warning btn-lg">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
            <!-- ///////////////////////end section-1 //////-->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include"footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    });
    </script>
</body>

</html>