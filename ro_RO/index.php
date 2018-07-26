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
        
          <li><a href="/jobs.php">Anunțuri</a></li>
          
          <li><a href="#services">Restaurante</a></li>
          <li><a href="#about">Cine suntem</a></li>
          
          <li><a href="#footer">Contactează-ne</a></li>
          <li><a href="/login.php">Autentificare</a></li>
          <li><a href="/sign-up.php">Înregistrare</a></li>
          
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
                <h2>Loc de muncă instant, doar pentru ospătari</h2>
                <p>Publicați anunțuri sau găsiți un loc de muncă ca ospătar în zona dumneavoastră.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Înregistrează-te acum</a>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Platformă dedicată</h2>
                <p>De astăzi vei lucra mai ușor ca ospătar.</p> 
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Înregistrează-te acum</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Găsește-ți de muncă ca ospătar</h2>
                <p>Anunțuri clare și concise cu multe filtre disponibile.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Înregistrează-te acum</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Agajează ospătari</h2>
                 <p>Angajează ospătari cu dorința de a lucra.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Înregistrează-te acum</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Alege Upwaiter</h2>
                <p>Devino parte din upwaiter.com și găsește-ți imediat de muncă ca ospătar in zona dorită.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Înregistrează-te acum</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Următor</span>
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
          <h3>DEȚII UN RESTAURANT?</h3>
          <p>Află cum Upwaiter iți poate ajuta afacerea</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a ="">Postează anunțuri</a></h4>
            <p class="description">De azi înainte aveți disponibil un site dedicat găsirii ospătarilor.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a ="">Presetări</a></h4>
            <p class="description">Ca alegător poți vedea toate informațiile despre candidați: informații principale, zona de residență, instruirea, experiența în sector, limbi cunoscute și alte informații.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a ="">Gestionați aplicații</a></h4>
            <p class="description">Puteți gestiona aplicațiile direct pe platforma noastră prin respingerea sau revizuirea cererilor.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a ="">Platformă dedicată</a></h4>
            <p class="description">Puteți plasa anunțuri pentru poziția unui ospătar pentru a evita o aglumerare de profesii care pot crea desordine.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a ="">Căutare optimizată</a></h4>
            <p class="description">Am creat această platformă în așa fel în cât să poată facilita publicarea anunțurilor, utilizând filte speciale.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a ="">GRATIS</a></h4>
            <p class="description">Vrem să păstrăm acest serviciu gratis pentru toată lumea. Înregistrarea este și va fi GRATIS pentru totdeauna.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Alege Upwaiter</h3>
        <p>Loc de muncă instant, doar pentru ospătari.</p>
        <a class="cta-btn" href="/sign-up.php">Înregistrează-te acum</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>PLATFORMA NOASTRĂ</h3>
          <p>Am studiat amănunțit site-ul nostru pentru a maximiza rata recrutărilor</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">OPTIMIZAREA ANUNȚURILOR <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">PROCENT DE AGAJARE <i class="val">97%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CĂUTARE UȘOARĂ <i class="val">99%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">NAVIGARE UȘOARĂ <i class="val">98%</i></span>
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
          <h3>STATISTICILE NOASTRE</h3>
          <p>Alătură-te Upwaiter, înregistrează-te acum.</p>
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
            <p>Anunțuri</p>
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
            <p>Restaurante</p>
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
            <p>Cereri depuse</p>
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
            <p>Ospătari înregistrați</p>
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
          <h3>COLABORĂRI:</h3>
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
          <h3>OPINIILE UTILIZATORILOR NOȘTRI</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">

            <h3>Claudio Zuanazzi</h3>
            <h4>Patron</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              În sfârșit am găsit o platformă unde pot posta anunțuri în mod ordinat.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            
            <h3>Sara Oliboni</h3>
            <h4>Ospătar</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Îmi place foarte mult acest site deoarece anunțurile sunt clare și prezintă toate informațiile necesare.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Claudia Ceradini</h3>
            <h4>Patron</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Folosesc Upwaiter.com mai ales pentru că pot administra cererile în faza de preselecție.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Marco Veronesi</h3>
            <h4>Ospătar</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Dacă vreți să vă găsiți de muncă ca osptăr vă recomand upwaiter.com, mulțumită lor pot câștiga un ban și să-mi continui studiile în același timp.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Mirko Armani</h3>
            <h4>Organizator evenimente</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              M-am decis să colaborez cu Upwaiter pentru a găsi ospătari pentru evenimente în doar câteva zile. 
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
          <h3>CINE SUNTEM</h3>
          <p>Upwaiter a fost fondat cu intenția de a pune in evidență anunțurile cu locuri de muncă în sectorul restaurantelor și în particular căutarea ospătarilor. Suntem dedicați îmbunătățirii acestui sector și în facilitarea intrării voastre în lumea muncii.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Doar gânduri.</a></h2>
              <p>
                Upwaiter este o platformă unde puteți adăuga anunțuri ca ospătar, pentru a evita o aglomerare de profesii care pot crea dezordine.

              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Loc de muncă imediat,</a></h2>
              <p>
                Upwaiter facilitează procesul de aplicare și selecție. Creând locuri de muncă, făcând totul mult mai ușor pentru orcine vrea să intre în lumea muncii.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">doar pentru ospătari.</a></h2>
              <p>
                Am decis să ne dedicăm doar ospătarilor pentru a optimiza întregul proces de căutare și selecție. Lucrăm din greu pentru a face toate aceste lucruri posibile.
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
