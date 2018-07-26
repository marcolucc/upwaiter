<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
   
//if(isset($_POST['SubmitButton'])){ //check if form was submitted
 // $input = $_POST['inputText']; //get input text
 // $message = "Ti invieremo subito gli annunci inseriti sul nostro sito! ".$input;
//}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Upwaiter</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href="#intro"><img src="/uploads/logo/logonavb2.png" width="183" height="31" border="10" alt="Null"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        
          <li><a href="/jobs.php">Advertisements</a></li>
          
          <li><a href="#services">Restaurateurs</a></li>
          <li><a href="#about">Who are we?</a></li>
          
          <li><a href="#footer">Contact us</a></li>
          <li><a href="/login.php">Login</a></li>
          <li><a href="/sign-up.php">Register</a></li>
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Instant work, only for waiters.</h2>
                <p>Post announcements or find a job as a waiter in your area.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Signup Now</a>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Dedicated platform</h2>
                <p>From today you will work more easly as waiter.</p> 
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Signup Now</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Find a Job as a waiter</h2>
                <p>Clear and concise advertisements with many filters available.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Signup Now</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Hire waiters</h2>
                 <p>Hire waiters with a desire to work.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Signup Now</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Choose Upwaiter</h2>
                <p>Become a part of upwaiter.com and immediately find a job as a waiter in your area.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Signup Now</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    

   
    

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>ARE YOU A RESTAURATEUR?</h3>
          <p>Find out how Upwaiter can help your business</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a ="">Post announcements</a></h4>
            <p class="description">From today you have a dedicated site specially for finding waiters.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a ="">Presets</a></h4>
            <p class="description">As a selector you can see all the informations of the candidates: main information, area of residence, training, experience in the sector, known languages and other info.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a ="">Manage applications</a></h4>
            <p class="description">You can manage applications directly on our platform by rejecting or pending the reviews of applications.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a ="">Dedicated platform</a></h4>
            <p class="description">You can place advertisements for the position of a waiter so as to avoid a conglomeration of professions that creates disorder.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a ="">Optimize the search</a></h4>
            <p class="description">We built our platform in such a way to facilitate the publication of ads with diferent filters to facilitate pre-selection.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a ="">FOR FREE</a></h4>
            <p class="description">We want to keep this free service for everyone who uses it. Registration is and will be FREE forever.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Choose Upwaiter</h3>
        <p>Just thoughts. Immediately work, only waiters.</p>
        <a class="cta-btn" href="/sign-up.php">Signup Now</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>OUR PLATFORM</h3>
          <p>We have studied our site to maximize maximum recruitment</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">AD OPTIMIZATION <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">PERCENTAGE OF EMPLOYMENT <i class="val">97%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">EASE OF RESEARCH <i class="val">99%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">EASE OF NAVIGATION <i class="val">98%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>OUR STATISTICS</h3>
          <p>Join Upwaiter, Signup now.</p>
        </header>

        <div class="row counters">
          
  				<div class="col-lg-3 col-6 text-center">
  				   <?php
                      $sql = "SELECT * FROM job_post";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
            <span data-toggle="counter-up"><?php echo $totalno; ?></span>
            <p>Job ads</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <?php
                      $sql = "SELECT * FROM company WHERE active='1'";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
            <span data-toggle="counter-up"><?php echo $totalno; ?></span>
            <p>Restaurateurs</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
             <?php
                      $sql = "SELECT * FROM apply_job_post ";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
            <span data-toggle="counter-up"><?php echo $totalno; ?></span>
            <p>Applications submitted</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <?php
                      $sql = "SELECT * FROM users WHERE active='1'";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $totalno = $result->num_rows;
                      } else {
                        $totalno = 0;
                      }
                    ?>
            <span data-toggle="counter-up"><?php echo $totalno; ?></span>
            <p>Waiters registered</p>
  				</div>

  			</div>

        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->

   
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>COLLABORATIONS:</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/vinitaly.png" alt="">
          <img src="img/clients/fiere.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>VARIOUS OPINIONS OF OUR USERS</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">

            <h3>Claudio Zuanazzi</h3>
            <h4>Restaurateur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Finally I found a platform where to place ads in an orderly manner.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            
            <h3>Sara Oliboni</h3>
            <h4>Waitress</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              I like this site very much becouse the ads are clear and show all the useful information.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Claudia Ceradini</h3>
            <h4>Restaurateur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              I use Upwaiter.com mainly because I can manage applications in the pre-selection phase.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Marco Veronesi</h3>
            <h4>Waiter</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              If you want to find a job as a waiter I recommend upwaiter.com! Thanks to them I can continue my studies and still earn money.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Mirko Armani</h3>
            <h4>Event Planner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              I decided to work with Upwaiter to quickly find waiters for events in just a few days. 
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->
    
     <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>WHO WE ARE</h3>
          <p>Upwaiter was founded with the intention of making more visible job advertisements in the restaurant sector and particularly in the search for waiters. We are committed to transparency in improving this sector and facilitating your entry into the world of work.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Just thoughts.</a></h2>
              <p>
                Upwaiter is a platform where you can place ads for the position of a waiter so as to avoid an agglomeration of professions that creates disorder.

              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Immediately work,</a></h2>
              <p>
                Upwaiter facilitates the application and the selection process. Create jobs, making it easier for everyone who wants to enter the world of work.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Only waiters.</a></h2>
              <p>
                We decided to dedicate ourselves only to waiters to optimize the whole search and selection process. We work hard to make all this possible.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

   

  </main>

 <?php
      include("footer.php");
  ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
