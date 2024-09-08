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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

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


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
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
                        <li><a href="rooms.php">Rooms</a></li>
                        <li class="active"><a href="about.php">About</a></li>
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

    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Detail view of room</h1>
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

    <section class="py-5 bg-light" id="next">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM `roomdetails` WHERE `r_id`=$id";
            $result= mysqli_query($con , $sql);
            while($row = mysqli_fetch_assoc($result))
            {
               $img1 = $row["r_img2"];
               $img2 =  $row["r_img2"];
               $f1 = $row["r_f1"];
               $f2 = $row["r_f2"];
               $f3 = $row["r_f3"];
              echo "<figure class='img-absolute'>
              <img src='".$img1."' alt='Free Website Template by Templateux' class='img-fluid'>
              </figure>
              <img src='".$img2."' alt='Image' class='img-fluid rounded'></div>
              <div class='col-md-12 col-lg-4 order-lg-1' data-aos='fade-up'>
              <h2 class='heading'>Welcome!</h2>
              <p class='mb-4'>Here is the room that provides you ".$f1." and ".$f2." and also provides ".$f3."</p>
              <p><a href='#' class='btn btn-primary text-white py-2 mr-3'>Learn More</a> <span class='mr-3 font-family-serif'><em>or</em></span> <a href='https://vimeo.com/channels/staffpicks/93951774'  data-fancybox class='text-uppercase letter-spacing-1'>See video</a></p>
              </div>
              
              ";
            }
            
            ?>
        </div>
      </div>
    </section>

    <div class="container section">

      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7 mb-5">
          <h2 class="heading" data-aos="fade-up">About room and owner</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="block-2">
            <div class="flipper">

            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM `roomdetails` WHERE `r_id`=$id";
                $result= mysqli_query($con , $sql);
                while($row = mysqli_fetch_assoc($result))
                {
                  $profile = $row["o_profile"];
                  $name = $row["o_name"];
                  $Address = $row["r_location"];
                  $phone = $row["o_phone1"];
                  $email = $row["o_email"];
                  $f1 = $row["r_f1"];
                  $f2 = $row["r_f2"];
                  $f3 = $row["r_f3"];
                  $f4 = $row["r_f4"];
                  $r1 = $row["r_r1"];
                  $r2 = $row["r_r2"];
                  $r3 = $row["r_r3"];
                  $r4 = $row["r_r4"];
                  echo"
                    <div class='front' style='background-image: url($profile);'>
                    <div class='box'>
                    <h2>".$name."</h2>
                    </div>
                    </div>
                    <div class='back'>
                    <blockquote>
                    <p>&ldquo;My name is ".$name." Address is ".$Address." I am very happy to provide you rooms for studies i garenties that you feel here like your home You can contact me on  ".$phone." or email me ".$email.".&rdquo;</p>
                    </blockquote>
                    <div class='author d-flex'>
                   <div class='image mr-3 align-self-center'>
                   <img src='".$profile."' alt='Owner profile'>
                   </div>
                   <div class='name align-self-center'>".$name."</div>
                   </div>
                   </div>
                   </div>
                   </div> <!-- .flip-container -->
                   </div>

                   <div class='col-md-6 col-lg-7 ml-3' data-aos='fade-up' data-aos-delay='100'>
                  <h3 class='text-center'>Room Facilities</h3>  
                  <p>".$f1."</p><hr>
                  <p>".$f2."</p><hr>
                  <p>".$f3."</p><hr>
                  <p>".$f4."</p><hr>
                  <h3 class='text-center'>Rule's of Room</h3>
                  <p>".$r1."</p><hr>
                  <p>".$r2."</p><hr>
                  <p>".$r3."</p><hr>
                  <p>".$r4."</p><hr>
                  </div>
                  ";
                }
            ?>
      </div>
    </div>
    <!-- END .block-2 -->

    <section class="section slider-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Photos</h2>
            <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
            </div>
            <!-- END slider -->
          </div>
        
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7 mb-5">
            <h2 class="heading" data-aos="fade">History</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="timeline-item" date-is='2019' data-aos="fade">
              <h3>More Branches Worldwide</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
            
            <div class="timeline-item" date-is='2011' data-aos="fade">
              <h3>Company Full Blast</h3>
              <p>
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
              </p>
            </div>
            
            <div class="timeline-item" date-is='2008' data-aos="fade">
              <h3>The Birth of the Company</h3>
              <p>
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
              </p>
            </div>
          </div>
        </div>
        

      </div>
    </div>
    <section class="section testimonial-section bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h2 class="heading" data-aos="fade-up">People Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

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
    
    
    <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
        <div class="container" >
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
            <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> 198 West 21th Street, <br> Suite 721 New York NY 10016</span></p>
            <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+1) 435 3533</span></p>
            <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> info@domain.com</span></p>
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
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