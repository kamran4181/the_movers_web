<?php 
  include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>The Movers</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- /////////LOgo///////// -->
            <a class="navbar-brand logo d-flex" href="#">
                <img src="images/logo.png" alt="" class="d-inline-block align-text-top">
                <p class="brand_nm mb-0"> The Movers</p>
            </a>
            <!-- ///////// END LOgo///////// -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-4">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="ride_ui.php"><b>Rider</b></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="about_us.php"><b>About Us</b></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="contact_us.php"><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="blog.php"><b>Blogs</b></a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link btn-lg btn-primary text-white rounded" aria-current="page"
                       href="#">Become Captain</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- ////End NAV/// -->

    <?php 
        $result = mysqli_query($con,"SELECT * FROM ride_ui WHERE section_name='section-1'");
        $row= mysqli_fetch_array($result);
     ?>
    <div class="section-baner d-flex align-items-center">
        <div class="container">
            <div class="row  text-center-ride">
                <div class="col text-white heading">
                    <h1 class="mt-4 py-4 "><?php echo $row["title"]; ?></h1>
                    <p class="mb-4" style="font-size: 28px;"><?php echo $row["descrip"]; ?></p>
                    <a href="https://play.google.com/store/apps/details?id=com.execut.exactmoverdriver" target="_blank"
                        class="btn btn-prim text-white rounded-pill mt-3 py-lg-3 px-lg-4">Become Captain</a>
                    <a href="https://play.google.com/store/apps/details?id=com.executiv.extacttravel" target="_blank"
                        class="btn sinup-btn text-white rounded-pill mt-3 mx-3 py-lg-3 px-lg-4">SignUp to
                        ride</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ///////////////////////// -->

    <div class="section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mt-4">
                    <h1 class="text-4">How rider app works</h1>
                </div>
                <div class="col-md-12 mb-lg-4">
                    <p class="text-20">Download the Movers app from palystore.</p>
                </div>
            </div>
            <div class="row bg-circule bg-w">
                <div class="col-md-4 mt-4">
                    <div class="row text-right text-20">
                        <div class="col-md-4 pb-lg-4"></div>
                        <?php 
                            $res1 = mysqli_query($con,"SELECT * FROM ride_ui WHERE identy='section-2-h1'");
                            $data1= mysqli_fetch_array($res1);
                        ?>
                        <div class="col-md-8 bg-white ride-card" style="margin-top: 100px">
                            <span class="px-3 py-2 border rounded text-white btn-prim">1</span>
                            <p class="mt-2 mb-0"><b><?php echo $data1["title"]; ?></b></p>
                            <p><?php echo $data1["descrip"]; ?></p>
                        </div>
                        <div class="col-md-4"></div>
                        <?php 
                            $res2 = mysqli_query($con,"SELECT * FROM ride_ui WHERE identy='section-2-h3'");
                            $data2= mysqli_fetch_array($res2);
                        ?>
                        <div class="col-md-8 ride-card" style="margin-top: 190px">
                            <span class="px-3 py-2 border rounded bg-light">3</span>
                            <p class="mt-2 mb-0 bg-white"><b><?php echo $data2["title"]; ?></b></p>
                            <p><?php echo $data2["descrip"]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ml-2 pl-40">
                    <img src="images/ride-img/ride-1.png" alt="" class="img img-1 slide-imgs shows">
                    <img src="images/ride-img/ride-2.png" alt="" class="img img-2 slide-imgs">
                    <img src="images/ride-img/ride-3.png" alt="" class="img img-3 slide-imgs">
                    <img src="images/ride-img/ride-4.png" alt="" class="img img-4 slide-imgs">
                </div>

                <div class="col-md-4 text-20 slide2-text">
                    <div class="row text-left">
                        <?php 
                            $res3 = mysqli_query($con,"SELECT * FROM ride_ui WHERE identy='section-2-h2'");
                            $data3= mysqli_fetch_array($res3);
                        ?>
                        <div class="col-md-8 bg-white ride-card" style="margin-top: 100px">
                            <span class="px-3 py-2 border rounded bg-light">2</span>
                            <p class="mt-2 mb-0"><b><?php echo $data3["title"]; ?></b></p>
                            <p><?php echo $data3["descrip"]; ?></p>
                        </div>
                        <div class="col-md-4 pb-4"></div>
                        <?php 
                            $res4 = mysqli_query($con,"SELECT * FROM ride_ui WHERE identy='section-2-h4'");
                            $data4= mysqli_fetch_array($res4);
                        ?>
                        <div class="col-md-8 ride-card" style="margin-top: 190px">
                            <span class="px-3 py-2 border rounded bg-light">4</span>
                            <p class="mt-2 mb-0 bg-white"><b><?php echo $data4["title"]; ?></b></p>
                            <p><?php echo $data4["descrip"]; ?></p>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section mt-4 pb-4 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mt-4">
                    <h1 class="text-4">Our Serivices</h1>
                </div>
                <div class="col-md-12 mb-4">
                    <p>We’ve got options to get you where you’re going. Choose a vehicle ride that suits your mood and
                        budget.
                    </p>
                </div>
            </div>
            <?php 
               $resultt = mysqli_query($con,"SELECT * FROM ride_ui WHERE section_name='section-3'");      
            ?>
            <div class="row">
                <?php  
			      while ($roww = mysqli_fetch_array($resultt)) { 	
			    ?>
                <div class="box-items col-md-4 mb-4">
                    <div class="flip-box">
                        <div class="flip-box-front border-0 py-4 shadow rounded text-center bg-white">
                            <h5 class="card-title mb-3"><b><?php echo $roww["title"]; ?></b></h5>
                            <div class="card-body">
                                <img src="images/ride-img/<?php echo $roww["img"]; ?>" height="150">
                            </div>
                        </div>
                        <div class="flip-box-back border-0 py-4 shadow rounded text-center">
                            <div class="card-body">
                                <p><?php echo $roww["descrip"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <!-- .////////////////////////....... -->

     <?php 
        $res = mysqli_query($con,"SELECT * FROM ride_ui WHERE section_name='section-4'");
        $data= mysqli_fetch_array($res);
     ?>
    <div class="section slider" style="background-color:#CDDCE6;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="mt-4 py-4" style="font-size: 40px;"><b><?php echo $data["title"];?></b></h1>
                    <p class="mb-4 text-30"><?php echo $data["descrip"];?></p>
                    <a href="https://play.google.com/store/apps/details?id=com.execut.exactmoverdriver"
                        target="_blank"><img src="images/icons/play-store.png" width="150"
                            class="my-4 pt-4 ride-card"></a>
                </div>
                <div class="col-md-6 text-right">
                    <img src="images/ride-img/<?php echo $data["img"];?>" class=" baner img-fluid">
                </div>
            </div>
        </div>
    </div>
<!-- /////////////////////////////// -->
    <div class="section baner" style="overflow-x: hidden;">
        <div class="row">
            <div class="col-md-6">
                <img src="images/frame-2.png">
            </div>
            <div class="col-md-6 text-right">
                <img src="images/frame-1.png">
            </div>
        </div>
    </div>


    <!-- ///////////////////START FOOTER////////////// -->
    <div class="section" style="background-color:#044E82; margin-top:-1px;">
        <div class="container text-white pt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 text-center">
                            <a class="navbar-brand" href="#">
                                <img src="images/logo.png" alt="">
                                <p class="text-white"><b>The Movers</b></p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <p class="foter-h"><b>Quick Links</b></p>
                            <ul class="pl-0 mt-2">
                                <li class="nav-item">
                                    <a class="nav-link active text-white px-0 pb-2" aria-current="page" href="#">Sign
                                        Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-0 py-2" aria-current="page" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-0 py-2" aria-current="page" href="#">About Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class=" col-sm-6 col-lg-4">
                            <p class="foter-h"><b>Others</b></p>
                            <ul class="pl-0 mt-2">
                                <li class="nav-item">
                                    <a class="nav-link active text-white px-0 py-1" aria-current="page" href="#">User
                                        FAQs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-0 py-1" aria-current="page" href="#">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-0 py-1" aria-current="page" href="#">Legal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-0 py-1" aria-current="page" href="#">Privacy
                                        Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-0 py-1" aria-current="page" href="#">Terms and
                                        Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-2">
                            <p class="foter-h"><b>Products</b></p>
                            <ul class="pl-0 mt-2">
                                <li class="nav-item">
                                    <a class="nav-link active text-white px-0 pb-2" aria-current="page"
                                        href="#">Send</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-0 py-2" aria-current="page" href="#">Receive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-0 py-2" aria-current="page" href="#">Buy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-10 p-4">
                            <p>Subscribe to our newsletter and be the first to know about our updates</p>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-light bg-white text-dark" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" style="background-color:#044E82; margin-top:-1px;">
        <div style="border-top: 2px solid white;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pt-2">
                        <p class="text-white m-2">Copyright © 2020. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-right pt-2">
                        <a href="https://www.youtube.com/channel/UCGg1sH2Mp_QgLrmRc6j8ThQ" target="_blanck"><img src="images/icons/Youtube.png" class="m-3 social-icone"></a>
                        <a href="https://www.instagram.com/themoverscab" target="_blanck"><img src="images/icons/Instagram.png" class="m-3 social-icone"></a>
                        <a href="https://www.facebook.com/themoverscab" target="_blanck"><img src="images/icons/Facebook.png" class="m-3 social-icone"></a>
                        <a href="#"><img src="images/icons/Twitter.png" class="m-3 social-icone"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- slide -->
     <script>
        let counter = 1
        setInterval(()=>{
        
            document.querySelector('.img.shows').classList.remove('shows')
            const img = document.querySelector(`.img-${counter}`)
            img.classList.add('shows')
            counter++
        
            if(counter >4){
                counter = 1
            }
        
        },3000)
        </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
</body>

</html>