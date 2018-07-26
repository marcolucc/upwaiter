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
        <a href="https://www.upwaiter.com/"><img src="/uploads/logo/logonavb2.png" width="183" height="31" border="10" alt="Upwaiter"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        
          <li><a href="https://www.upwaiter.com/jobs.php">Advertisements</a></li>
          
          
          
          <li><a href="#footer">Contact us</a></li>
          <li><a href="https://www.upwaiter.com/login.php">Login</a></li>
          <li><a href="https://www.upwaiter.com/sign-up.php">Register</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  
    
     <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Cookie Policy</h3>
          <div align="left">
            
            
            <p style="text-align:left">This Cookie Policy governs how Upwaiter.com collects, uses, maintains and discloses information collected from users (each, one 'User') of the www.upwaiter.com website ('Site'). This Cookie Policy applies to this Site and to all products and services offered by Upwaiter.com</p>
            
            <p style="text-align:left"><b>What are cookies?</b><br>
            Cookies are small text files that are stored on your computer (or mobile device). They are widely used to make sites work or make them work better and more efficiently. They are able to do this because websites can read and write on these files, enable them to recognize you and remember important information that can allow a more convenient and easy use of the Site. The consent of the use of these cookies is optional.</p>
            
            <p style="text-align:left"><b>Session and functional cookies</b><br>
            This Site does not use session and functional cookies.</p>
            
            <p style="text-align:left"><b>Third-party cookies</b><br>
            This site uses profiling cookies transmitted by third parties.</p>
            
            <h4>Which third-party cookies are we using?</h4>
            
            <p style="text-align:left"><b>Analytical cookies</b><br>
            Google Analytics is a web analytics service provided by Google Inc. (Google). Google uses the Personal Data collected for the purpose of tracking and examining the use of this Application, compiling reports and sharing them with other services developed by Google. Google may use the Personal Data to contextualise and personalize the advertisements of its advertising network. For information and to disable third-party analytical cookies go to the website: www.youronlinechoices.com/en
            Google inc. <a target="_blank" href = "https://policies.google.com/privacy?hl=it">Privacy Policy</a></p>
            
            <p style="text-align:left"><b>Advertising cookies</b><br>
            Google AdSense is an ad serving service provided by Google Inc. (Google). For information and to disable third-party advertising cookies go to: www.youronlinechoices.com/en 
            Google inc. <a target="_blank" href = "https://policies.google.com/privacy?hl=it">Privacy Policy</a></p>
            
            <!--<p style="text-align:left"><b>t</b><br>
            e</p>-->
          </div>
        </header>

       

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
