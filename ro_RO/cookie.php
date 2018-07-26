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
          <h3>Politica Cookie</h3>
          <div align="left">
            
            
            <p style="text-align:left">Aceasta politică de cookie-uri guvernează modul cum Upwaiter.com colectează, folosește, stochează și difuzează informațiile colectate de la utilizatori (fiecare "Utilizator") de pe site-ul www.upwaiter.com ("Site"). Această politică de cookie-uri se aplică Site-ului și tuturor produselor și serviciilor oferite de Upwaiter.com</p>
            
            <p style="text-align:left"><b>Ce sunt cookie-urile?</b><br>
            Cookie-urile acestea sunt mici fișiere text stocate pe calculator (sau pe dispozitive mobile). Ele sunt utilizate la scară largă pentru a face site-urile să funcționeze sau pentru a le face să funcționeze mai bine și mai eficient. Sunt capabili să facă acest lucru deoarece site-urile pot citi și scrie pe aceste fișiere, le permit să vă recunoască și să rețină informații importante care pot permite o utilizare mai convenabilă și mai ușoară a site-ului. Acordul de utilizare a acestor cookie este opțional.</p>
            
            <p style="text-align:left"><b>Cookie-uri de sesiune și funcționali</b><br>
            Acest site nu folosește cookie-uri de sesiune și funcționali.</p>
            
            <p style="text-align:left"><b>Cookie-uri terță parte</b><br>
            Acest site folosește cookie-uri de profil transmise din părți terțe.</p>
            
            <h4>Ce cookie-uri din părți terțe folosim?</h4>
            
            <p style="text-align:left"><b>Cookie-uri analitici</b><br>
            Google Analytics este un serviciu de analiză web oferit de Google Inc. (Google). Google utilizează Datele Personale colectate în scopul de a urmări și examina utilizarea acestei aplicații, comppletarea rapoartelor și partajarea acestora cu alte servicii dezvoltate de Google. Google poate utiliza datele personale pentru a contextualiza și personaliza anunțurile rețelei sale de publicitate. Pentru informații și pentru a dezactiva cookie-urile analitice terțe, accesați site-ul Web: www.youronlinechoices.com/it 
            Google inc. <a target="_blank" href = "https://policies.google.com/privacy?hl=it">Politica de confidențialitate</a></p>
            
            <p style="text-align:left"><b>Cookie-uri publicitare</b><br>
            Google AdSense este un serviciu pentru publicarea anunțurilor furnizat de Google Inc. (Google). Pentru informații și pentru a dezactiva cookie-urile publicitare terțe, accesați: www.youronlinechoices.com/ro
            Google inc. <a target="_blank" href = "https://policies.google.com/privacy?hl=it">Politica de confidențialitate</a></p>
            
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
