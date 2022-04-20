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
      $lis_img = $_POST['old_img'];
      if($_FILES['lis_img']['name']!=''){
       $lis_img =$_FILES['lis_img']['name'];

      $tempname = $_FILES['lis_img']['tmp_name'];

      $folder = "../images/home-img/".$lis_img;
    

      move_uploaded_file($tempname, $folder);
    }
    $insertdata = mysqli_query($con,"UPDATE home_ui SET title='$title',section_name='$section_name',descrip='$descrip',img='$lis_img',date='$today' where section_name='$section_name'");
    echo "<script>alert('Updated Successfully');</script>
      <script>window.location.href = 'home-ui.php'</script>";
    //   $insertdata = mysqli_query($con,"INSERT INTO home_ui(title,section_name,descrip,img)VALUES('$title','$section_name','$descrip','$lis_img')");
    //   echo "<script>alert('Posted Successfully');</script>
    //     <script>window.location.href = 'home-ui.php'</script>";
}

?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                            <h1><b>Edit Home UI</b></h1>
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
               $result = mysqli_query($con,"SELECT * FROM home_ui WHERE section_name='section-1'");
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
                                        <label>Heading</label>
                                        <input name="title" value="<?php echo $row["title"]; ?>" type="text"
                                            class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <input type="hidden" name="old_img" value="<?php echo $row['img'];?>">
                                <input type="hidden" name="sec_name" value="section-1">

                                <div class="card-body pad">
                                    <label>Description</label>
                                    <div class="mb-3">
                                        <textarea name="descrip" placeholder="Short Description" style="width: 100%;"
                                            rows="5" cols="23"><?php echo $row["descrip"]; ?></textarea>
                                    </div>
                                </div>

                                <!-- <div class="card-body pad">
                                    <label>Description</label>
                                    <div class="mb-3">
                                        <textarea name="descrip" class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["descrip"]; ?></textarea>
                                    </div>
                                </div> -->
                                <div class="card-header">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Select Img<span style="color:red;">(only
                                                compresed)</span></label>
                                        <p><img style="width:150px;" src="../images/home-img/Mobile.png"></p>
                                        <!-- <p style="color:red;">img size 800px x 500px</p> -->
                                        <input name="lis_img" type="file">
                                        <!-- <?php //echo $roww["img"]; ?> -->
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
            <!-- ///////////////////////section-1 End////////////-->

            <!-- ///////////////////////section-2 //////-->
            <?php 
               $resultt = mysqli_query($con,"SELECT * FROM home_ui WHERE section_name='section-2'");
           
            ?>
            <section class="content mt-4">
                <div class="row mt-4">
                    <div class="col-sm-12 text-center">
                        <h1><b>Section-2</b></h1>
                    </div>
                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Img</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
			                       while ($roww = mysqli_fetch_array($resultt)) { 	
			                         ?>
                                    <tr>
                                        <td><img style="width:50px;" src="../images/home-img/<?php echo $roww["img"]; ?>">
                                        </td>
                                        <td><?php echo $roww["title"]; ?></td>
                                        <td><?php $dec = $roww['descrip'];
                                        $removetag = strip_tags($dec);
                                        $trim = $string = substr($removetag,0,600);
                                        echo $trim ; ?></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="update-home-sec-2.php?edit=<?php echo $roww["id"]; ?>" class="btn btn-info"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="return confirm('Are you sure?')"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
            <!-- ///////////////////////section-2 End////////////-->

            <!-- ///////////////////////section-3 //////-->
            <hr>
            <?php 
               $resultt = mysqli_query($con,"SELECT * FROM home_ui WHERE section_name='section-3'");
           
            ?>
            <section class="content mt-4">
                <div class="row mt-4">
                    <div class="col-sm-12 text-center">
                        <h1><b>Section-3</b></h1>
                    </div>
                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Img</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
			                       while ($roww = mysqli_fetch_array($resultt)) { 	
			                         ?>
                                    <tr>
                                        <td><img style="width:50px;" src="../images/home-img/<?php echo $roww["img"]; ?>">
                                        </td>
                                        <td><?php echo $roww["title"]; ?></td>
                                        <td><?php $dec = $roww['descrip'];
                                        $removetag = strip_tags($dec);
                                        $trim = $string = substr($removetag,0,600);
                                        echo $trim ; ?></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="update-home-sec-3.php?edit=<?php echo $roww["id"]; ?>" class="btn btn-info"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" onclick="return confirm('Are you sure?')"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
            <!-- ///////////////////////section-3 End////////////-->

            <!-- ///////////////////////section-4 //////-->
            <hr>
            <?php 
               $result = mysqli_query($con,"SELECT * FROM home_ui WHERE section_name='section-4'");
               $row= mysqli_fetch_array($result);
            ?>
            <section class="content mt-4 bg-light">
                <div class="row mt-4">
                    <div class="col-sm-12 text-center">
                        <h1><b>Section-4</b></h1>
                    </div>
                    <div class="col-md-12  bg-light">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card card-outline card-info">


                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input name="title" value="<?php echo $row["title"]; ?>" type="text"
                                            class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <!-- <input type="hidden" name="sec_name" value="section-4"> -->

                                <div class="card-body pad">
                                    <label>Description</label>
                                    <div class="mb-3">
                                        <textarea name="descrip" placeholder="Short Description" style="width: 100%;"
                                            rows="5" cols="23"><?php echo $row["descrip"]; ?></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="old_img" value="<?php echo $row['img'];?>">
                                <input type="hidden" name="sec_name" value="section-4">

                                <!-- <div class="card-body pad">
                                    <label>Description</label>
                                    <div class="mb-3">
                                        <textarea name="descrip" class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["descrip"]; ?></textarea>
                                    </div>
                                </div> -->
                                <div class="card-header">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Select Img<span style="color:red;">(only
                                                compresed)</span></label>
                                        <p class="text-center"><img style="width:250px;"
                                                src="../images/home-img/<?php echo $row["img"]; ?>"></p>
                                        <!-- <p style="color:red;">img size 800px x 500px</p> -->
                                        <input name="lis_img" type="file">
                                        <!-- <?php //echo $roww["img"]; ?> -->
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
            <!-- ///////////////////////section-4 End////////////-->


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