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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Blogs</title>
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
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
          $result = mysqli_query($con,"SELECT * FROM blog");
        ?>
        <div class="section my-4">
            <div class="container">
            <!-- <time class="timeago" datetime="2021-12-17"></time> -->
                <!-- //////////bloges number 1///////////////////-->
                <?php 
                   while ($row = mysqli_fetch_array($result)) { 
                       if($row['id'] % 2 == 0){ ?>
                        <div class="row d-flex align-items-center my-4">
                        <div class="col-md-5">
                        <img src="images/blog-img/<?php echo $row["img"]; ?>" width="420" alt="">
                        </div>
                        <div class="col-md-7">
                            <span>Front-end . <time class="timeago" datetime="<?php echo $row["date"]; ?>"></time></span>
                            <h3><b><?php echo $row["title"]; ?></b></h3>
                            <p><?php echo $row["descrip"]; ?></p>
                            <p class="text-right"><a href="#" style="text-decoration:none;"><b>Read Full</b><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <?php }else{ ?>

                    <div class="row d-flex align-items-center my-4">
                     <div class="col-md-7">
                        <span>Front-end . <time class="timeago" datetime="<?php echo $row["date"]; ?>"></time></span>
                        <h3><b><?php echo $row["title"]; ?></b></h3>
                        <p><?php echo $row["descrip"]; ?></p>
                        <p class="text-right"><a href="#" style="text-decoration:none;"><b>Read Full</b><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                     </div>
                    <div class="col-md-5">
                    <img src="images/blog-img/<?php echo $row["img"]; ?>" width="420" alt="">
                    </div>
                </div>
                    
                <?php } }?>
                
                <!-- //////////bloges 2 ///////////////////-->

                <!-- <div class="row d-flex align-items-center my-4">
                    <div class="col-md-7">
                        <span>Front-end . 1 Hour Ago</span>
                        <h3><b>Optimizing CSS for faster page loads </b></h3>
                        <p>Not long ago I decided to improve the loading times of my website. It already loads pretty fast, but I knew there was still room for improvement and one of them was CSS loading. I will walk you through the process and show you how you can improve your load times as well.

                        To see how CSS affects the load time of a webpage we first have to know how the browser converts an HTML document into a functional webpage..
                        Not long ago I decided to improve the loading times of my website. It already loads pretty fast, but I knew there was still room for improvement and one of them was CSS loading. I will walk you through the process and show you how you can improve your load times as well.

                        To see how CSS affects the load time of a webpage we first have to know how the browser converts an HTML document into a functional webpage...</p>
                        <p class="text-right"><a href="#" style="text-decoration:none;"><b>Read Full</b><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                    </div>
                    <div class="col-md-5">
                    <img src="images/blog-img/blog-1.png" width="420" alt="">
                    </div>
                </div> -->
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
 <!-- slider -->
 <script>
    let counter = 1
    setInterval(()=>{
    
        document.querySelector('.img.show').classList.remove('show')
        const img = document.querySelector(`.img-${counter}`)
        img.classList.add('show')
        counter++
    
        if(counter >4){
            counter = 1
        }
    
    },2000)
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/jquery.timeago.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $("time.timeago").timeago();
        });  
   </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
</body>

</html>