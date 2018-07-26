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
        
          <li><a href="https://www.upwaiter.com/jobs.php">Annunci</a></li>
          
          
          
          <li><a href="#footer">Contattaci</a></li>
          <li><a href="https://www.upwaiter.com/login.php">Login</a></li>
          <li><a href="https://www.upwaiter.com/sign-up.php">Registrati</a></li>
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
          <h3>Privacy Policy</h3>
          <div align="left">
            
            
            <p style="text-align:left">Questa Politica sulla Privacy governa il modo in cui Upwaiter.com raccoglie, utilizza, conserva e divulga le informazioni raccolte dagli utenti (ciascuno, un 'Utente') del sito web www.Upwaiter.com ('Sito'). Questa politica sulla privacy si applica al Sito e tutti i prodotti e servizi offerti da Upwaiter.com
</p>
            
            <p style="text-align:left"><b>Che tipo di dati raccogliamo?</b><br>
            evidenza sociale. Noi raccogliamo informazioni di identificazione personale dagli utenti solo qualora volontariamente presentate. Gli utenti possono sempre rifiutarsi di fornire informazioni personali di identificazione, con la differenza che può impedire loro di impegnarsi in attività del sito determinate.</p>
            
            <p style="text-align:left"><b>I cookie del browser Web</b><br>
            <b>RISTORATORE</b><br>
            Nome incaricato<br>
Nome ristorante<br>
Email<br>
Tipo di locale<br>
Breve descrizione del locale<br>
Password<br>
Regione di residenza<br>
Provincia di residenza<br>
Comune di residenza<br>
Via<br>
Logo Ristorante<br>
<br>
<b>CAMERIERE</b><br>
Nome<br>
Cognome<br>
Email<br>
Numero di telefono<br>
Data di nascita<br>
Foto per CV<br>
Regione di residenza<br>
Provincia di residenza<br>
Comune di residenza<br>
Password<br>
Anni di esperienza nel settore Ristorazione<br>
Titolo di studio<br>
Lingua madre<br>
Seconda lingua<br>
Terza lingua<br>
Breve descrizione perosnale<br>
ARCHIVIAMO SUI NOSTRI SERVER IL CV CHE VIENE CREATO IN FASE DI ISCRIZIONE<br>

</p></p>

<p style="text-align:left"><b>Chi ha accesso a questi dati?</b><br>
            Esclusivamente l'intestatario del sito internet nessun collaboratore ha accesso a tali dati</p>
            
            <p style="text-align:left"><b>Informazioni di identificazione personale</b><br>
            Possiamo raccogliere informazioni di identificazione personale da Utenti in una varietà di modi, tra cui, ma non solo, quando gli utenti visitano il nostro sito, registrarsi sul sito, effettuare un ordine, iscriviti alla newsletter, compilare un modulo, e in connessione con altre attività, servizi, caratteristiche o le risorse che mettiamo a disposizione sul nostro sito. Gli utenti possono essere richiesti, se del caso, di inserire nome, cognome, indirizzo email, indirizzo postale, numero di telefono, informazioni sulla carta di credito, numero di previdenza sociale. Noi raccogliamo informazioni di identificazione personale dagli utenti solo qualora volontariamente presentate. Gli utenti possono sempre rifiutarsi di fornire informazioni personali di identificazione, con la differenza che può impedire loro di impegnarsi in attività del sito determinate.</p>
            
            <p style="text-align:left"><b>Informazioni di identificazione non-personali</b><br>
            Potremo raccogliere informazioni non personali di identificazione sugli utenti ogni volta che interagiscono con il nostro sito. Le informazioni non personali di identificazione possono includere il nome del browser, il tipo di computer e informazioni tecniche sugli utenti dei mezzi di collegamento al nostro sito, come il sistema operativo dei fornitori di servizi Internet utilizzati e altre informazioni simili.</p>
            
            <p style="text-align:left"><b>I cookie del browser Web</b><br>
            Il nostro sito può utilizzare 'cookies' per migliorare l'esperienza utente. Il Browser web per l'utente posiziona dei cookie sul proprio disco rigido per scopi di registrazione e talvolta tenere traccia delle informazioni su di loro. L'utente può scegliere di impostare il proprio browser web di rifiutare i cookies, o per avvisare l'utente quando i cookies vengono inviati. In tal caso, notare che alcune parti del sito potrebbero non funzionare correttamente. Vai alla pagina dedicata ai Cookie Cookie Privacy
</p>
            
            <p style="text-align:left"><b>Come utilizzare le informazioni raccolte</b><br>
            Upwaiter.com può raccogliere e utilizzare informazioni personali degli utenti per le seguenti finalità:
- Per migliorare il servizio dei clienti, le informazioni fornite ci aiutano a rispondere alle tue richieste di assistenza e le esigenze di supporto in modo più efficiente.<br>
- Al fine di personalizzare l'esperienza degli utenti Potremmo utilizzare le informazioni in forma aggregata per capire come i nostri utenti utilizzano i servizi e le risorse presenti sul nostro sito.<br>
- Per migliorare il nostro sito Possiamo utilizzare il feedback forniti dall'utente a migliorare i nostri prodotti e servizi.<br>
- Per condividere le vostre informazioni con terze parti, possiamo condividere o vendere informazioni con terzi per la commercializzazione o per altri scopi.<br>
- Per eseguire una promozione, contest, sondaggi o altre funzioni del sito per inviare le informazioni che gli utenti hanno acconsentito a condividere sugli argomenti che pensiamo sarà di loro interesse.<br>
- Per inviare e-mail periodiche. Possiamo usare l'indirizzo email per inviare informazioni all’utente ed aggiornamenti relativi al loro ordine.<br>
Può anche essere utilizzato per rispondere alle loro richieste, domande, e / o altre richieste. Se l'utente decide di aderire alla nostra mailing list, riceverà una mail che può includere le news aziendali, aggiornamenti, informazioni relative al prodotto o servizio, ecc. Se in qualsiasi momento l'utente non desidera più ricevere email, includiamo dettagliate istruzioni di cancellazione alla mailing o l’utente può contattarci tramite il nostro sito.</p>
            
            <p style="text-align:left"><b>Come proteggere le informazioni</b><br>
            Adottiamo appropriate raccolte, stoccaggio e trattamento dei dati e misure di sicurezza per la protezione contro l'accesso non autorizzato, alterazione, divulgazione o la distruzione dei tuoi dati personali, username, password, informazioni sulle transazioni ei dati memorizzati sul nostro sito. Lo scambio di dati sensibili tra il sito ei suoi utenti avviene su un canale di comunicazione sicuro SSL ed è crittografato e protetto con le firme digitali. Il nostro sito è anche in conformità con gli standard PCI vulnerabilità al fine di creare il più sicuro di un ambiente il più possibile per gli utenti.</p>
            
            <p style="text-align:left"><b>Condividere i tuoi dati personali</b><br>
            Possiamo utilizzare i servizi erogati da terzi per aiutarci a gestire il nostro business e il sito o amministrare le attività per nostro conto, come l'invio di newsletter e sondaggi. Possiamo condividere le tue informazioni con queste terze parti per le finalità indicate, a condizione che ci hai dato il tuo permesso.</p>
            
            <p style="text-align:left"><b>Siti web di terzi</b><br>
            Gli utenti possono trovare pubblicità o altri contenuti sul nostro sito che puntano ai siti e ai servizi dei nostri partner, fornitori, inserzionisti, sponsor, licenziatari e altre terze parti. Noi non controlliamo il contenuto o link che compaiono su questi siti e non siamo responsabili per le pratiche utilizzate da siti web collegati o dal nostro sito. Inoltre, questi siti o servizi, compresi i loro contenuti e link, possono essere in continua evoluzione. Questi siti e servizi possono avere proprie politiche sulla privacy e le politiche di servizio al cliente. Navigazione e l'interazione su qualsiasi altro sito web, compresi i siti Internet che hanno un link al nostro sito, sono soggetti ai termini propri del sito web.</p>
            
            <p style="text-align:left"><b>Pubblicità</b><br>
            Gli annunci che compaiono sul nostro sito possono essere consegnati agli utenti da parte dei partner pubblicitari, che possono impostare cookie. I cookie consentono al server della pubblicità di riconoscere il computer ogni volta che si invia un annuncio on-line per la compilazione di informazioni di identificazione personale su di te o altri che utilizzano il computer. Questa informazione consente alle reti pubblicitarie, tra le altre cose, di inviare gli annunci che ritengono essere di maggior interesse per voi. Questa politica di privacy non copre l'uso dei cookie da parte degli inserzionisti.</p>
            
            <p style="text-align:left"><b>Google Adsense</b><br>
            Alcuni degli annunci possono essere serviti da Google. L'uso di Google del cookie DART consente di pubblicare annunci per gli utenti in base alla loro visita al nostro sito e altri siti su Internet. DART usa 'non dati personali' e non tiene traccia delle informazioni personali su di te, come il tuo nome, indirizzo email, indirizzo fisico, ecc. Si può scegliere di non utilizzare il cookie DART consultando l'annuncio di Google e della rete dei contenuti della politica sulla privacy a http://www.google.com/privacy_ads.html</p>
            
            <p style="text-align:left"><b>Il rispetto di legge sulla protezione dei bambini online privacy</b><br>
            Proteggere la privacy dei più giovani è particolarmente importante. Per questo motivo, non abbiamo mai raccogliere o conservare informazioni sul nostro sito da quelle che sappiamo meno di 13 anni, e nessuna parte del nostro sito è strutturato in modo da attrarre chiunque sotto i 13.</p>
            
             <p style="text-align:left"><b>Modifiche alla presente informativa sulla privacy</b><br>
            Upwaiter.com ha la facoltà di aggiornare la propria politica sulla privacy in qualsiasi momento. Quando lo facciamo, verrà modificata la data di aggiornamento in fondo a questa pagina, verranno avvisati sia i camerieri che i ristoratori della modifica, tramite l'email fornita in fase di iscrizione. L'utente prende atto ed accetta che è responsabilità di rivedere questa politica sulla privacy periodicamente e diventare consapevoli delle modifiche.</p>
            
             <p style="text-align:left"><b>L'accettazione di questi termini</b><br>
            Utilizzando questo sito, comporta l'accettazione di questa politica. Se non siete d'accordo con questa politica, si prega di non utilizzare il nostro sito.</p>
            
            <p style="text-align:left"><b>Come posso cancellare i dati?</b><br>
            <b>Ristoratore</b><br>
            Per eliminare l'account bisogna seguire questi passaggi: Dashboard > Impostazioni > Disattiva il mio account (assicurati di aver spuntato la casella "Voglio disattivare il mio account")<br>
            <b>Cameriere</b><br>
            Per eliminare l'account bisogna seguire questi passaggi: Dashboard > Impostazioni > Disattiva il mio account (assicurati di aver spuntato la casella "Voglio disattivare il mio account")
            
           </p>
            
            
             <p style="text-align:left"><b>Per contattarci</b><br>
            Se avete domande sulla presente informativa sulla privacy, le pratiche di questo sito, o sui rapporti con questo sito, contattaci all'indirizzo:<br>
            www.Upwaiter.com<br>
            info@Upwaiter.com</p>
            
            <p style="text-align:left">
          Questo documento è stato aggiornato il 23 Maggio 2018</p>
            
            
            <!-- <p style="text-align:left"><b>t</b><br>
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
