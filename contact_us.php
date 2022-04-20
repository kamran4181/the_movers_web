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

    <div class="section form" style="background-color:#a7cfe9; height: 70vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right" style="margin-top: 100px;">
                    <img src="images/Group1.png" class="baner img-fluid">
                </div>
            </div>
        </div>
    </div>
    <?php 
        $result = mysqli_query($con,"SELECT * FROM contact_ui WHERE section_name='section-1'");
        $row= mysqli_fetch_array($result);
     ?>
    <div class="section">
        <div class="container form-container" style="margin-top: -240px;">
            <div class="row shadow rounded bg-white form-width">
                <div class="col-md-12 mt-4 text-center">
                    <p style="display: inline;border-bottom: 3px solid black;"><b><?php echo $row["title"];?></b></p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                        <div class="row s-form">
                            <p class="pb-0 mt-2"><b>Leave us a message</b></p>
                            <div class="col-md-12 mb-4">
                                <input type="text" id="inputPassword5" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-12 my-3">
                                <input type="email" id="inputPassword5" class="form-control"
                                    placeholder="Email Address">
                            </div>
                            <div class="col-md-12 my-4">
                                <textarea class="form-control" id="Textarea" placeholder="Your Message"
                                    rows="3"></textarea>
                            </div>
                            <div class="col-md-12 my-3 text-center">
                                <button type="submit" class="btn btn-prim text-white w-100">Send</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-6">
                        <div class="row mt-4">
                            <div class="col-md-12 mt-4">
                                <p class="mt-2"><?php echo $row["adress"];?></p>
                            </div>
                            <div class="col-md-12">
                                <p><b><?php echo $row["phone_nbr"];?></b></p>
                            </div>
                            <div class="col-md-12">
                                <p><b><?php echo $row["email"];?></b></p>
                            </div>
                            <div class="col-md-12">
                                <!-- <img src="images/icons/socialm.png"> -->
                                <a href="https://www.youtube.com/channel/UCGg1sH2Mp_QgLrmRc6j8ThQ" target="_blanck"><img src="images/icons/youtube2.png" class="mx-2 social-icone"></a>
                                <a href="https://www.instagram.com/themoverscab" target="_blanck"><img src="images/icons/instagram1.png" class="mx-2 social-icone"></a>
                                <a href="https://www.facebook.com/themoverscab" target="_blanck"><img src="images/icons/facebook3.png" class="mx-2 social-icone"></a>
                            </div>
                            <div class="col-md-12 my-2">
                                <!-- <img src="/images/map.png" class="img-fluid"> -->
                                <p class="img-fluid"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.482207178646!2d74.36396711744385!3d31.4559189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391907691f68e4a1%3A0x4e4949714c8bc121!2sNaeem%20Surgical%20Hospital!5e0!3m2!1sen!2s!4v1648473429909!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: -45px;">
                <img src="images/Group1.png" class="baner img-fluid">
            </div>
        </div>
    </div>

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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
</body>

</html>