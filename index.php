<div?php
include("db_connect.php");
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Room booking System</title>
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="rooms.php">Rooms</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="scholership.php">Scholership</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="owner_form.php">owner</a></li>
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

  <section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)"
    data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade-up">
          <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome in your <span
              class="fa fa-star text-primary"></span> RoomMate</span>
          <h1 class="heading">A Best Place To live</h1>
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

  <section class="section bg-light pb-0">
    <div class="container">

      <div class="row check-availabilty" id="next">
        <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

          <form action="#">
            <div class="row">
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkin_date" class="font-weight-bold text-black">Joining Date</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkin_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="Time period" class="font-weight-bold text-black">Time period(In months)</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="number" id="Time period" class="form-control">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                <div class="row">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="adults" class="font-weight-bold text-black">Gender</label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="adults" class="form-control">
                        <option value="">Male</option>
                        <option value="">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="children" class="font-weight-bold text-black">Range of Rent</label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="children" class="form-control">
                        <option value="">500 - 1000</option>
                        <option value="">1000 - 2000</option>
                        <option value=""> 3000 - 4000</option>
                        <option value="">4000+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 align-self-end">
                <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
              </div>
            </div>
          </form>
        </div>


      </div>
    </div>
  </section>

  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
          <figure class="img-absolute">
            <img src="images/food-1.jpg" alt="Image" class="img-fluid">
          </figure>
          <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
          <h2 class="heading">Welcome!</h2>
          <p class="mb-4">Finding the perfect space just got easier! Whether you're searching for a quite study nook , a
            group meeting room , or a place to crash between classes , RoomMate is here to help. Designed specifically
            for students , our platform offers a seamless way to discover , book and manage rooms on campus.</p>
          <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span
              class="mr-3 font-family-serif"><em>or</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774"
              data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
        </div>

      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Rooms </h2>
          <p data-aos="fade-up" data-aos-delay="100">Finding the perfect space just got easier! Whether you're searching
            for a quite study nook , a group meeting room , or a place to crash between classes , RoomMate is here to
            help. Designed specifically for students , our platform offers a seamless way to discover , book and manage
            rooms on campus.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Single Room</h2>
              <span class="text-uppercase letter-spacing-1">1000 / per month</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Room kitchen</h2>
              <span class="text-uppercase letter-spacing-1">1200 / per Month</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>One BHK</h2>
              <span class="text-uppercase letter-spacing-1">2000 / per Month</span>
            </div>
          </a>
        </div>


      </div>
    </div>
  </section>


  <section class="section slider-section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Photos</h2>
          <p data-aos="fade-up" data-aos-delay="100">"Your Campus, Your Space-Find the Perfect Room Where Comfort Meets
            Convenience, Just Like Home."</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="slider-item">
              <a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img
                  src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img
                  src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img
                  src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img
                  src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img
                  src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img
                  src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img
                  src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a>
            </div>
          </div>
          <!-- END slider -->
        </div>

      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="section "
    data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Select your location</h2>
        </div>
      </div>  
      <div class="row">
        <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed" style="border:0;width:100vw;
        height:100vh;padding:0% ; margin: 0%;" ; allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- END section -->
  <section class="section testimonial-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">People Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

            <!-- <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div> -->

            <?php
          $sql = "SELECT * FROM `feedback`";
          $result = mysqli_query($con, $sql);
          while($row=mysqli_fetch_array($result)){
            $user= $row["f_user"];
            $desc = $row["f_desc"];
            echo " <div class='testimonial text-center slider-item'>
              <div class='author-image mb-3'>
                <img src='images/person_3.jpg' alt='Image placeholder' class='rounded-circle mx-auto'>
              </div>
              <blockquote>

                <p>".$desc."</p>
              </blockquote>
              <p><em>&mdash;".$user."</em></p>
            </div> ";
          }
        ?>
           

          </div>
            <!-- END slider -->
        </div>

      </div>
    </section>


  <section class="section blog-post-entry bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Scolarships</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

          <div class="media media-custom d-block mb-4 h-100">
            <a href="#" class="mb-4 d-block"><img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
            <div class="media-body">
              <span class="meta-post">Fulbright Scollership</span>
              <h2 class="mt-0 mb-3"><a href="#">For graduate students,youung profecionals and artists</a></h2>
              <p>The fullbright scholership is a prestigious international exchange program offering opportunities for students , scollers and professionals to study , teach or conduct research.</p>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
          <div class="media media-custom d-block mb-4 h-100">
            <a href="#" class="mb-4 d-block"><img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
            <div class="media-body">
              <span class="meta-post">National Scholership Portal(NSP)</span>
              <h2 class="mt-0 mb-3"><a href="#">Students from different categories such as SC,ST,EWS</a></h2>
              <p>The NSP is government initiative that offers various scholerships for students accross the India.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
          <div class="media media-custom d-block mb-4 h-100">
            <a href="#" class="mb-4 d-block"><img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
            <div class="media-body">
              <span class="meta-post">Pragati Scolerships for Girls</span>
              <h2 class="mt-0 mb-3"><a href="#">Girl students enroll in AICTE-Approved institutions</a></h2>
              <p>This Scolership is specifically for girl students pursuing technical education it provides financial asistence that can be used to cover tuition an other expencess.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
          <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
        </div>
        <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
          <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
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
          <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> 198
              West 21th Street, <br> Suite 721 New York NY 10016</span></p>
          <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+1)
              435 3533</span></p>
          <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span>
              info@domain.com</span></p>
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
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
            class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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