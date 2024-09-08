<?php
 include("db_connect.php");
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sogo Hotel by Colorlib.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="site-header js-site-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.html">RoomMate</a></div>
                <div class="col-6 col-lg-8">


                    <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- END menu-toggle -->

                    <div class="site-navbar js-site-navbar">
                        <nav role="navigation">
                            <div class="container">
                                <div class="row full-height align-items-center">
                                    <div class="col-md-6 mx-auto">
                                        <ul class="list-unstyled menu">
                                            <li><a href="index.php">Home</a></li>
                                            <li class="active"><a href="rooms.php">Rooms</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="scholership.php">Scholership</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END head -->

    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="heading mb-3">Rooms</h1>
                    <ul class="custom-breadcrumbs mb-4">
                        <li><a href="index.html">Home</a></li>
                        <li>&bullet;</li>
                        <li>Rooms</li>
                    </ul>
                </div>
            </div>
        </div>

        <a class="mouse smoothscroll" href="#next">
            <div class="mouse-icon">
                <span class="mouse-wheel"></span>
            </div>
        </a>
    </section>
    <!-- END section -->

    <section class="section pb-4">
        <div class="container">

            <div class="row check-availabilty" id="next">
                <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

                    <form action="rooms.php" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                <label for="room_type" class="font-weight-bold text-black">Room type</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                    <input type="text" id="room_type" name="room_type" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                                <label for="Time period" class="font-weight-bold text-black">Time period(In
                                    months)</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"><span class="icon-calendar"></span></div>
                                    <input type="text" id="Time period" name="time_period" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="adults" class="font-weight-bold text-black">Gender</label>
                                        <div class="field-icon-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="gender" id="adults" class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="children" class="font-weight-bold text-black">Rent Range</label>
                                        <div class="field-icon-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="rent" id="children" class="form-control">
                                                <option value="1000">500-1000</option>
                                                <option value="2000">1000-2000</option>
                                                <option value="4000">2000-5000</option>
                                                <option value="5000">5000+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 align-self-end">
                                <button class="btn btn-primary btn-block text-white" name="check">Check
                                    Availabilty</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <!--Filter-->
            <?php
            if(isset($_POST["check"]))
            {
                $type = $_POST["room_type"];
                $time = $_POST["time_period"];
                $gender = $_POST["gender"];
                $rent = $_POST["rent"];

                $sql = "SELECT * FROM `roomdetails` WHERE `r_available` >= '1' AND `time`>= '$time' AND `r_rent`<= '$rent' OR `r_type` ='$type' AND `gender` ='$gender'";
                $result = mysqli_query($con, $sql);
                echo "<div class = 'row'>";
                while($row=mysqli_fetch_array($result)){
                    $id = $row["r_id"];
                    $type = $row["r_type"];
                    $price = $row["r_rent"];
                    echo "
                    <div class='col-md-6 col-lg-4 mb-5' data-aos='fade-up'>
                        <a href='#' class='room'>
                        <figure class='img-wrap'>
                            <img src='images/img_1.jpg' alt='Free website template' class='img-fluid mb-3'>
                        </figure>
                        <div class='p-3 text-center room-info'>
                            <h2><a href='room_details.php?id=$id'>".$type."</a></h2>
                            <span class='text-uppercase letter-spacing-1'>".$price."/ per month</span>
                        </div>
                        </a>
                    </div>
                    ";
                }
                echo "<div>";
            }

 //    <!--if Filter not set-->       
            else
            {
                $sql = "SELECT * FROM `roomdetails`";
                $result = mysqli_query($con, $sql);
                echo "<div class = 'row'>";
                while($row=mysqli_fetch_array($result)){
                  $id = $row["r_id"];
                  $type = $row["r_type"];
                  $price = $row["r_rent"];
                  echo "
                    <div class='col-md-6 col-lg-4 mb-5' data-aos='fade-up'>
                      <a href='#' class='room'>
                        <figure class='img-wrap'>
                          <img src='images/img_1.jpg' alt='Free website template' class='img-fluid mb-3'>
                        </figure>
                        <div class='p-3 text-center room-info'>
                          <h2><a href='room_details.php?id=$id'>".$type."</a></h2>
                          <span class='text-uppercase letter-spacing-1'>".$price."/ per month</span>
                        </div>
                      </a>
                    </div>
                  ";
                }
                echo "<div>";
            }
            ?>
    </section>

    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h2 class="heading" data-aos="fade">Great Offers</h2>
                    <p data-aos="fade">"Unlock affordable confert with our special student discount! We belive that
                        every one deserve a cozy space to study and rest , we're offering budget friendly rates for
                        students with limited financial resources. Your perfect room is just a click away!"</p>
                </div>
            </div>
            <?php
          $sql = "SELECT * FROM `roomdetails`";
          $result = mysqli_query($con, $sql);
          $id = 1;
          while($row=mysqli_fetch_array($result)){
            $type = $row["r_type"];
            $price = $row["r_rent"];
            $info = $row["r_f1"];
            if($price < 1000)
            {
              if($id %2 == 0)
              {
                echo"
                <div class='site-block-half d-block d-lg-flex bg-white' data-aos='fade' data-aos-delay='100'>
                <a href='#' class='image d-block bg-image-2'><img src='images/img_1.jpg' alt='Free website template' class='img-fluid mb-3'></a>
                <div class='text'>
                    <span class='d-block mb-4'><span class='display-4 text-primary'>".$price." </span> <span
                            class='text-uppercase letter-spacing-2'>/ per month</span> </span>
                    <h2 class='mb-4'>".$type."</h2>
                    <p>'".$info."'
                    </p>
                    <p><a href='#' class='btn btn-primary text-white'>Book Now</a></p>
                </div>
            </div>
              ";
              $id++;
              }
              else{
                  echo"
                  <div class='site-block-half d-block d-lg-flex bg-white' data-aos='fade' data-aos-delay='100'>
                  <a href='#' class='image d-block bg-image-2 order-2'><img src='images/img_1.jpg' alt='Free website template' class='img-fluid mb-3'></a>
                  <div class='text'>
                      <span class='d-block mb-4'><span class='display-4 text-primary'>".$price." </span> <span
                              class='text-uppercase letter-spacing-2'>/ per month</span> </span>
                      <h2 class='mb-4'>".$type." </h2>
                      <p>'".$info." '
                      </p>
                      <p><a href='#' class='btn btn-primary text-white'>Book Now</a></p>
                  </div>
              </div>
                ";
                $id++;
              }
             
            }
          }
        ?>

            <!-- <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
                <a href="#" class="image d-block bg-image-2" style="background-image: url('images/img_1.jpg');"></a>
                <div class="text">
                    <span class="d-block mb-4"><span class="display-4 text-primary">₹ 800 </span> <span
                            class="text-uppercase letter-spacing-2">/ per month</span> </span>
                    <h2 class="mb-4">Shared Room</h2>
                    <p>"Save more by sharing! Book a shared room today and enjoy discounted rates design for
                        budget-conscious students.Experience comfort and community, all at price that fits your budget."
                    </p>
                    <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
                </div>
            </div>
            <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
                <a href="#" class="image d-block bg-image-2 "
                    style="background-image: url('images/img_2.jpg');"></a>
                <div class="text order-1">
                    <span class="d-block mb-4"><span class="display-4 text-primary">₹ 1500</span> <span
                            class="text-uppercase letter-spacing-2">/ per month</span> </span>
                    <h2 class="mb-4">1BHK </h2>
                    <p>"Enjoy the privacy of 1BHK at a student friendly rate! Perfect for focused study and personal
                        space, Our special student offer makes independant living more affordable than ever. Secure your
                        own place today!"</p>
                    <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
                </div>
            </div> -->

        </div>
    </section>

    <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                    <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
                </div>
                <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                    <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve
                        Now</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="section footer-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Rooms</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link">
                        <li><a href="#">The Rooms &amp; Suites</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Restaurant</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5 pr-md-5 contact-info">
                    <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
                    <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span>
                        <span> 198 West 21th Street, <br> Suite 721 New York NY 10016</span>
                    </p>
                    <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span>
                        <span> (+1) 435 3533</span>
                    </p>
                    <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span>
                        <span> info@domain.com</span>
                    </p>
                </div>
                <div class="col-md-3 mb-5">
                    <p>Sign up for our newsletter</p>
                    <form action="#" class="footer-newsletter">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email...">
                            <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5">
                <p class="col-md-6 text-left">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>

                <p class="col-md-6 text-right social">
                    <a href="#"><span class="fa fa-tripadvisor"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-vimeo"></span></a>
                </p>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>


    <script src="js/aos.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>



    <script src="js/main.js"></script>
</body>

</html>