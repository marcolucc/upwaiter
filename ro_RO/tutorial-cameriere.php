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
        
          <li><a href="https://www.upwaiter.com/jobs.php">Anunțuri</a></li>
          <li><a href="#footer">Contactează-ne</a></li>
          <li><a href="https://www.upwaiter.com/login.php">Autentificare</a></li>
          <li><a href="https://www.upwaiter.com/sign-up.php">Înregistrare</a></li>
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
          <h3>Cum funcționează Upwaiter?</h3>
          <div align="left">
            
          <ol>  
            <li><a href="#Rispondere a un annuncio"><font size="5">Răspundeți la un anunț</font></a></li>
            <li><a href="#Modificare il profilo"><font size="5">Modificați profilul</font></a></li>
            <li><a href="#Come funziona l'opzione Stipendio"><font size="5">Cum funcționează secțiunea Salariu</font></a></li>
            <li><a href="#Gestire le candidature"><font size="5">Elimină profilul</font></a></li>
            <!--<li><a href="#"><font size="5">Registrati</font></a></li>-->
            
          </ol>  
          
          
          <h3></h3>
            
            <section id="Rispondere a un annuncio">
            <h4>Răspundeți la un anunț</h4>
            <p style="text-align:left">Puteți răspunde la orice anunț din secțiunea "Anunțuri", sus în dreapta în meniu.</p>
            </section>
            
            <section id="Modificare il profilo">
            <h4>Modificați profilul</h4>
            <p style="text-align:left">Pentru a modifica profilul accesați DashBoard-ul și urmați procedura ilustrată.</p>
            </section>
            
            <section id="Come funziona l'opzione Stipendio">
            <h4>Cum funcționează secțiunea Salariu</h4>
            <p style="text-align:left">Secțiunea Salariu exprimată în Euro/Oră este o infromație pe care restaurantele o pot introduce în anunț, deci atunci când salariul, în anumite anunțuri, nu este nominat, înseamnă că patronul restaurantului vrea să discute problema salariului printr-un simplu interviu.</p>
            </section>
            
            
            
            
            
            <!--
            
            <section id="Modificare il profilo">
            <h4>Modificare il profilo</h4>
            <p style="text-align:left">in lin</p>
            </section>
            
            -->
            
            
            
            
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
