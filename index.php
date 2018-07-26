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
  <meta property="og:image" content="http://www.upwaiter.com/og.png">
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
        
          <li><a href="/jobs.php">Annunci</a></li>
          
          <li><a href="#services">Ristoratori</a></li>
          <li><a href="#about">Chi siamo</a></li>
          
          <li><a href="#footer">Contattaci</a></li>
          <li><a href="/login.php">Login</a></li>
          <li><a href="/sign-up.php">Registrati</a></li>
          
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
                <h2>Basta pensieri. Subito lavoro, solo camerieri.</h2>
                <p>Pubblica annunci o trova lavoro come cameriere nella tua zona.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Iscriviti Ora</a>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Piattaforma dedicata</h2>
                <p>Da oggi troverai lavoro più facilmente come cameriere.</p> 
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Iscriviti Ora</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Trova lavoro come cameriere</h2>
                <p>Annunci chiari e concisi con molti filtri a disposizione.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Iscriviti Ora</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Assumi camerieri</h2>
                 <p>Assumi con semplicità camerieri con voglia di lavorare.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Iscriviti Ora</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Scegli Upwaiter</h2>
                <p>Entra a far parte di upwaiter.com e trova subito lavoro come cameriere nella tua zona.</p>
                <a href="https://www.upwaiter.com/sign-up.php" class="btn-get-started scrollto">Iscriviti Ora</a>
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
          <h3>Sei un ristoratore?</h3>
          <p>Scopri come Upwaiter può aiutare la tua attività</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a ="">Pubblica annunci</a></h4>
            <p class="description">Da oggi hai a disposizione un sito dedicato alla ricerca di camerieri.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a ="">Preseleziona</a></h4>
            <p class="description">Come selezionatore puoi vedere tutte le informazioni dei candidati: informazioni principali, zona di residenza, formazione, esperienza nel settore, lingue conosciute e altre info.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a ="">Gestisci le candidature</a></h4>
            <p class="description">Puoi gestire le candidature direttamente sulla nostra piattaforma rifiutando o mettendo in attesa di revisione le candidature.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a ="">Piattaforma dedicata</a></h4>
            <p class="description">Può inserire gli annunci per la posizione di cameriere così da evitare un agglomerato di professioni che creano disordine.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a ="">Ottimizza la ricerca</a></h4>
            <p class="description">Abbiamo pensato la piattaforma in modo tale da agevolare la pubblicazione di annunci con opzioni mirate a facilitare la preselezione.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a ="">GRATUITAMENTE</a></h4>
            <p class="description">Vogliamo mentenere questo servizio gratuito per tutti coloro che ne usufruiscono. L'iscrizione è GRATIS e lo sarà per sempre.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Scegli Upwaiter</h3>
        <p>Basta pensieri. Subito lavoro, solo camerieri.</p>
        <a class="cta-btn" href="/sign-up.php">Iscriviti Ora</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>La nostra piattaforma</h3>
          <p>Abbiamo studiato il nostro sito per massimizare al masssimo l'assunzione</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Ottimizzazione annunci <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Percentuale di assunzione <i class="val">97%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Facilità di ricerca <i class="val">99%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Facilità di navigazione <i class="val">98%</i></span>
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
          <h3>Le nostre statistiche</h3>
          <p>Entra a far parte di Upwaiter, iscriviti ora.</p>
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
            <p>Annunci di lavoro</p>
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
            <p>Ristoratori</p>
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
            <p>Candidature inviate</p>
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
            <p>Camerieri registrati</p>
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
          <h3>Collaborazioni:</h3>
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
          <h3>Le opinioni dei nostri utenti</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">

            <h3>Claudio Zuanazzi</h3>
            <h4>Ristoratore</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Finalmente ho trovato una piattaforma dove poter inserire gli annunci in modo ordinato.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            
            <h3>Sara Oliboni</h3>
            <h4>Cameriera</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Mi sono trovato bene con questo sito perchè gli annunci sono chiari e mostrano tutte le informazioni utili.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Claudia Ceradini</h3>
            <h4>Ristoratore</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Utilizzo Upwaiter.com soprattutto perchè posso gestire le candidature in fase di preselezione.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Marco Veronesi</h3>
            <h4>Cameriere</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Se volete trovare lavoro come camerieri vi consiglio upwaiter.com, grazie a loro posso guadagnare continuando a frquentare l'università.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">

            <h3>Mirko Armani</h3>
            <h4>Event Planner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Ho deciso di collaborare con Upwaiter per trovare velocemente camerieri per eventi di pochi giorni. 
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
          <h3>Chi siamo</h3>
          <p>Upwaiter nasce con l'intento di rendere più visibili gli annunci di lavoro nel settore della ristorazione ed in particolare gli annunci per la ricerca di camerieri. Ci impegnamo con trasparenza a migliorare questo settore e facilitare l'ingresso nel mondo del lavoro di ragazzi e ragazze volenterosi.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Basta pensieri.</a></h2>
              <p>
                Upwaiter è una piattaforma dove si possono inserire annunci per la posizione di cameriere così da evitare un agglomerato di professioni che creano disordine.

              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Subito lavoro,</a></h2>
              <p>
                Upwaiter facilita il processo di candidatura e di selezione. Crea occupazione, agevolando l'ingresso nel mondo del lavoro a tutti coloro che lo vogliono. 
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">solo camerieri.</a></h2>
              <p>
                Abbiamo deciso di dedicarci solo ai camerieri per ottimizzare tutto il processo di ricerca e selezione. Ci impegnamo al massimo per rendere tutto questo possibile.
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
