<?php

error_reporting(0);
include 'conn.php';
include 'auth.php';
$a=3;
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
	
    $title1 = $_POST['title'];
    $title2 = str_replace("'","\'", $title1);
    $title = str_replace("&","\and", $title2);
    $section_name = $_POST['sec_name'];
    // $short1 = $_POST['short'];
    // $short = str_replace("'","\'", $short1);
    $descrip1 = $_POST['descrip'];
    $descrip = str_replace("'","\'", $descrip1);
    $lis_img =$_POST['icone_img'];
    if($_FILES['lis_img']['name']!=''){
     $lis_img =$_FILES['lis_img']['name'];
     // }
     // else{
     //   $lis_img = $roww["img"];
     // }

     $tempname = $_FILES['lis_img']['tmp_name'];

     $folder = "../images/home-img/".$lis_img;
   
      move_uploaded_file($tempname, $folder);
    }
      $insertdata = mysqli_query($con,"UPDATE home_ui SET title='$title',section_name='$section_name',descrip='$descrip',img='$lis_img' where id=".$edit."");
      echo "<script>alert('Updated Successfully');</script>
        <script>window.location.href = 'home-ui.php'</script>"; 
    
}

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><b>Update</b></h1>
                        </div>
                            <div class="col-sm-6 text-center">
                               <a href="home-ui.php" class="btn btn-success"><-- Back Home Page</a>
                            </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <?php 
               $result = mysqli_query($con,"SELECT * FROM home_ui WHERE id='$edit'");
               $row= mysqli_fetch_array($result);
            ?>
            <section class="content">
                <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card card-outline card-info">


                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Enter Title</label>
                                        <input name="title" value="<?php echo $row["title"]; ?>" type="text"
                                            class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <input type="hidden" name="sec_name" value="section-3">
                                <input type="hidden" name="icone_img"  value="<?php echo $row["img"]; ?>">

                                <!-- <div class="card-body pad">
                                    <label>Description</label>
                                    <div class="mb-3">
                                        <textarea name="descrip" placeholder="Short Description" style="width: 100%;"
                                            rows="5" cols="23"><?php echo $row["descrip"]; ?></textarea>
                                    </div>
                                </div> -->

                                <div class="card-body pad">
                                    <label>Description</label>
                                    <div class="mb-3">
                                        <textarea name="descrip" class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $row["descrip"]; ?></textarea>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Select Img<span style="color:red;">(only
                                                compresed)</span></label><br>
                                        <!-- <p style="color:red;">img size 800px x 500px</p> -->
                                        <input name="lis_img" type="file">
                                        
                                    </div>
                                    <p><img style="width:70px;" src="../images/home-img/<?php echo $row["img"]; ?>"></p>
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