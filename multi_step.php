<?php
        include("db_connect.php");
        if($_SERVER['REQUEST_METHOD']=='POST')
          {
            $owner = $_POST["o_name"];
            $email = $_POST["o_email"];
            $address = $_POST["o_address"];
            $pin = $_POST["o_pin"];
            $phone1 = $_POST["o_phone1"];
            $phone2 = $_POST["o_phone2"];

            $r_type = $_POST["r_type"];
            $r_location = $_POST["r_location"];
            $r_rent = $_POST["r_rent"];
            $r_available = $_POST["r_available"];
            $gender = $_POST["gender"];
            $img1 = $_POST["r_img1"];
            $img2 = $_POST["r_img2"];
            $img3 = $_POST["r_img3"];
            $img4 = $_POST["r_img4"];
            $f1 = $_POST["f1"];
            $f2 = $_POST["f2"];
            $f3 = $_POST["f3"];
            $f4 = $_POST["f4"];

            $r1 = $_POST["r1"];
            $r2 = $_POST["r2"];
            $r3 = $_POST["r3"];
            $r4 = $_POST["r4"];

            $method = $_POST["p_method"];
            $billing = $_POST["p_address"];
            $p_phone = $_POST["p_phoneNo"];
            $o_profile = $_POST["o_profile"];

            $sql ="INSERT INTO `roomdetails` (`o_name`, `o_email`, `o_pin`, `o_phone1`, `o_phone2`, `r_type`, `r_location`, `r_rent`, `r_available`, `r_img1`, `r_img2`, `r_img3`, `r_img4`, `r_f1`, `r_f2`, `r_f3`, `r_f4`, `r_r1`, `r_r2`, `r_r3`, `r_r4`, `r_payment`, `r_billing`, `r_payment_no`, `time`,`gender`) VALUES ( '$owner', '$email', '$pin', '$phone1', '$phone2', '$r_type ', '$r_location', '$r_rent', ' $r_available', '$img1', '$img2', '$img3', '$img4', '$f1', '$f2', '$f3', '$f4', '$r1', '$r2', '$r3', '$r4', '$method', '$billing', '$p_phone','$gender', current_timestamp());";

            $result = mysqli_query($con,$sql);
            if($result){
                echo"Done";
            }
        }
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
    <style>
    .step {
        display: none;
    }
    </style>

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
                                            <li><a href="rooms.php">Rooms</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="registration.php">Register</a></li>
                                            <li class="active"><a href="login.php">Login</a></li>
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
                    <h1 class="heading mb-3">Room details</h1>
                    <ul class="custom-breadcrumbs mb-4">
                        <li><a href="index.html">Home</a></li>
                        <li>&bullet;</li>
                        <li>Login</li>
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

    <section class="section contact-section" id="next">
        <div class="container">
            <div class="row">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

                    <!--FORM-->
                    <form id="multiStepForm" method="post">
                        <!-- Step 1 -->
                        <div class="step">
                            <h3>Owner Information</h3>
                            <div class="form-group">
                                <label for="ownerName">Owner Name</label>
                                <input type="text" class="form-control" id="ownerName" name = "o_name" required>
                            </div>
                            <div class="form-group">
                                <label for="ownerEmail">Email</label>
                                <input type="email" class="form-control" id="ownerEmail" name = "o_email" required>
                            </div>
                            <div class="form-group">
                                <label for="ownerAdd">Owner Address</label>
                                <input type="text" class="form-control" id="ownerAdd" name = "o_address" required>
                            </div>
                            <div class="form-group">
                                <label for="ownerPin">Pin code</label>
                                <input type="text" class="form-control" id="ownerPin" name = "o_pin" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="ownerNo1">Phone No 1</label>
                                    <input type="text" class="form-control" id="ownerNo1" name = "o_phone1" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="ownerNo2">Phone No 2</label>
                                    <input type="text" class="form-control" id="ownerNo2" name = "o_phone2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-black font-weight-bold" for="profile">Enter your profile photo</label>
                                <input type="file" accept="image/*" id="profile" name="o_profile" class="form-control "
                                        required>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                        </div>

                        <!-- Step 2 -->
                        <div class="step">
                            <h3>Room Details</h3>
                            <div class="form-group">
                                <label for="roomType">Room Type</label>
                                <select class="form-control" id="roomType" name = "r_type">
                                    <option>Single</option>
                                    <option>Double</option>
                                    <option>Suite</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="roomLocation">Location</label>
                                <input type="text" class="form-control" id="roomLocation" name = "r_location" required>
                            </div>
                            <div class="form-group">
                                    <label for="roomPrice">Room Rent /Month</label>
                                    <input type="number" class="form-control" id="roomPrice" name = "r_rent" required>
                                </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                        <label for="room_period">Rooms available for Months</label>
                                        <input type="number" class="form-control" id="room_period" name = "room_period" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="roomAvl">Available Rooms</label>
                                    <input type="number" class="form-control" id="roomAvl" name = "r_available" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender">Room For Girl/Boy</label>
                                <input type="text" class="form-control" id="gender" name = "gender" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="text-black font-weight-bold" for="img1">Room Image 1</label>
                                    <input type="file" accept="image/*" id="img1" name="r_img1" class="form-control "
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="text-black font-weight-bold" for="img2">Room Image 2</label>
                                    <input type="file" accept="image/*" id="img2" name="r_img2" class="form-control "
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="text-black font-weight-bold" for="img3">Room Image 3</label>
                                    <input type="file" accept="image/*" id="img3" name="r_img3" class="form-control "
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="text-black font-weight-bold" for="img4">Room Image 4</label>
                                    <input type="file" accept="image/*" id="img4" name="r_img4" class="form-control "
                                        required>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="previousStep()">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                        </div>

                        <!-- Step 3 -->
                        <div class="step">
                            <h3>Rules and regulations</h3>
                            <h4 class="text-center">Features</h4>
                            <div class="form-group">
                                <label for="feature1 ">Feature 1</label>
                                <input type="text" class="form-control" id="feature1" name = "f1" required>
                            </div>

                            <div class="form-group">
                                <label for="feature2">Feature 2</label>
                                <input type="text" class="form-control" id="feature2" name = "f2" required>
                            </div>
                            <div class="form-group">
                                <label for="feature3">Feature 3</label>
                                <input type="text" class="form-control" id="feature3" name = "f3" required>
                            </div>
                            <div class="form-group">
                                <label for="feature4">Feature 4</label>
                                <input type="text" class="form-control" id="feature4" name = "f4" required>
                            </div>


                            <h4 class="text-center">Rules</h4>

                            <div class="form-group">
                                <label for="rule1">Rule 1</label>
                                <input type="text" class="form-control" id="rule1" name = "r1" required>
                            </div>

                            <div class="form-group">
                                <label for="rule2">rule 2</label>
                                <input type="text" class="form-control" id="rule2" name = "r2" required>
                            </div>
                            <div class="form-group">
                                <label for="rule3">rule 3</label>
                                <input type="text" class="form-control" id="rule3" name = "r3" required>
                            </div>
                            <div class="form-group">
                                <label for="rule4">rule4</label>
                                <input type="text" class="form-control" id="rule1" name = "r4" required>
                            </div>
                 
                            <button type="button" class="btn btn-secondary" onclick="previousStep()">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                        </div>

                         <!-- Step 4 -->
                         <div class="step">
                            <h3>Payment details</h3>
                            <div class="form-group">
                                <label for="paymentMethod">Method</label>
                                <input type="text" class="form-control" id="paymentMethod" name="p_method" required>
                            </div>
                            <div class="form-group">
                                <label for="paymentBiling">Billing Address</label>
                                <input type="text" class="form-control" id="paymentBiling" name = "p_address" required>
                            </div>
                            <div class="form-group">
                                <label for="paymentPhone">Phone no</label>
                                <input type="text" class="form-control" id="paymentPhone" name = "p_phoneNo" required>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="previousStep()">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                        </div>

                        <!-- Step 5 -->
                        <div class="step">
                            <h3>Review and Submit</h3>
                            <p>Review your information before submission.</p>
                            <button type="button" class="btn btn-secondary" onclick="previousStep()">Previous</button>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-md-10 ml-auto contact-info">
                            <p><span class="text-black"> Wel- Come</span></p>
                            <p><span class="d-block">TO RooMate</span> </p>
                            <p><span class="d-block">Are you a new usser ? then register first<a
                                        href="registration.php"> REGISTER HERE</a></span></p>
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
    <script>
    var currentStep = 0;
    showStep(currentStep);

    function showStep(n) {
        var steps = document.getElementsByClassName("step");
        steps[n].style.display = "block";
    }

    function nextStep() {
        var steps = document.getElementsByClassName("step");
        steps[currentStep].style.display = "none";
        currentStep++;
        if (currentStep >= steps.length) {
            currentStep = steps.length - 1;
        }
        showStep(currentStep);
    }

    function previousStep() {
        var steps = document.getElementsByClassName("step");
        steps[currentStep].style.display = "none";
        currentStep--;
        if (currentStep < 0) {
            currentStep = 0;
        }
        showStep(currentStep);
    }
    </script>
</body>

</html>