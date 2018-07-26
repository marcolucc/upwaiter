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
          <h3>Termini e condizioni</h3>
          <div align="left">
            
            
            <p style="text-align:left">Benvenuti su Upwaiter.com, la piattaforma per l'impiego nel settore della ristorazione completamente GRATUITA. I seguenti termini e condizioni ('Termini d'Uso') riguardano l'iscrizione e l'uso di Upwaiter.com (il 'Sito'), e tutti i relativi messaggi di posta elettronica, messaggi e servizi. Facendo clic su 'Registrati' durante il processo di registrazione si conclude un accordo giuridicamente vincolante con il proprietario e gestore di Upwaiter.com. È necessario leggere e accettare le presenti Condizioni d'Uso prima della registrazione e l'utilizzo del sito web. L'uso continuato del sito web significa che si accetta di eventuali future modifiche. L'utilizzo delle app e sito web sono soggetti ai seguenti termini e condizioni, che si ritiene di accettare ogni volta che si utilizza l'applicazione e sito web. 'Noi' significa Upwaiter.com, e 'nostro' vanno interpretati di conseguenza. 'Tu', la persona o ditta/organizzazione che utilizza l'applicazione Upwaiter.com, e 'tuo' va interpretato di conseguenza.</p>
            <p style="text-align:left"><b>Punti principali:</b><br>
1. Devi avere almeno 18 anni per utilizzare questo sito.<br>
2. È necessario leggere queste Condizioni d'uso e fare riferimento a questa pagina per le modifiche future.<br>
3. Il sito deve essere usato in conformità con le leggi che governano il paese o la zona.<br>
4. Siete personalmente responsabili per la sicurezza e l'approvazione di tutti i materiali e le informazioni che si inserisce sul sito.<br>
5. Non si deve mai pubblicare contenuti offensivi o proibiti nel sito.<br>
6. Lei non deve indurre in errore, perseguitare o discriminare altri utenti.<br>
7. Questo sito non dovrebbe mai essere utilizzato per i mezzi commerciali o per pubblicizzare e vendere qualunque cosa.<br>
8. Devi accettare di rispettare la nostra Privacy Policy.<br></p>

<p style="text-align:left"><b>Età</b><br>
Devi avere almeno 18 anni per registrarti su Upwaiter.com. L'adesione al servizio è proibita laddove la legge nega l’adesione. Utilizzando il Sito, l'utente dichiara e garantisce di avere il diritto, l'autorità e la capacità di entrare nei termini di utilizzo e di rispettare tutti i termini e le condizioni di questa politica.</p>

<p style="text-align:left"><b>Condizioni</b><br>
Le Condizioni d'Uso rimarranno in vigore a tutti gli effetti mentre si utilizza il Sito e / o mentre sei un membro del Social Network. Si può sospendere l'iscrizione in qualsiasi momento, per qualsiasi motivo, al momento del ricevimento della vostra comunicazione scritta di recesso. L’iscrizione a Upwaiter.com può terminare per qualsiasi motivo specificato, con effetto dopo l'invio di un avviso al tuo indirizzo di posta elettronica indicato per la registrazione, qualsiasi altro indirizzo di posta elettronica da Lei forniti al personale di Upwaiter.com. Se la tua iscrizione a Upwaiter.com è stata interrotta a causa della violazione dei termini di utilizzo, o su vostra richiesta, non avrà diritto a ricevere alcun rimborso sui crediti non utilizzati o le tasse pagate per l'utilizzo di servizi aggiuntivi. Nonostante il fatto che la tua iscrizione venga denunciata, le presenti Condizioni d'Uso rimarranno in pieno vigore.</p>

<p style="text-align:left"><b>Contenuto</b><br>
Upwaiter.com è un Social Network vibrante che viene utilizzato per reclutare e trovare nuovi potenziali datori di lavoro e dipendenti. Siete personalmente responsabili per la sicurezza, la privacy, e l'approvazione di tutti i materiali e le informazioni che si posta sul sito. Per garantire che questo sito web rimanga un ambiente sicuro e amichevole non devi inviare nessun messaggio, foto o profili (collettivamente 'Contenuto Utente') che contiene dati offensivi o proibiti. Di seguito è riportato un elenco parziale del tipo di contenuto e il comportamento che è illegale o proibito nel sito:
- Contenuto che è palesemente offensivo per la comunità online, come quella che promuove il razzismo, fanatismo, odio o minaccia fisica di qualsiasi tipo contro qualsiasi gruppo o individuo.<br>
- Contenuto che molesti o inciti alla molestia verso un'altra persona.
- La trasmissione di posta indesiderata, lettere a catena, o di mass mailing non richieste o 'spamming'.<br>
- Distacco di informazioni che si sa essere false, fuorvianti o che promuovono attività illegali o comportamenti che sono abusivi, minacciosi, osceni, diffamatori o calunniosi.<br>
- Promozione di una copia illegale o non autorizzata di opere protette da copyright di un'altra persona, come la fornitura di programmi informatici piratati o i relativi collegamenti, offrendo informazioni relative alla copia installati dai produttori dei dispositivi di protezione, o la fornitura di musica piratata o collegamenti a file musicali pirata.
- Visualizzazione di materiale pornografico o sessualmente esplicito di qualsiasi tipo.<br>
- Materiale che sfrutta le persone di età inferiore ai 18 in un modo sessuale o violento, o richiedano informazioni personali da minori di 18 anni.<br>
- Istruzioni su attività illegali come la realizzazione o acquisto di armi illegali, violazione della privacy di qualcuno, ovvero la creazione di virus informatici.<br>
- Richiesta di password o informazioni di identificazione personale per scopi commerciali o illegali da altri utenti.<br>
- Impegno in attività commerciali e / o di vendita senza il preventivo consenso scritto di Upwaiter.com come concorsi, lotterie, baratti, pubblicità e schemi piramidali.<br>
- E' possibile non includere nel tuo profilo utente qualsiasi indirizzo, numeri di telefono, URL.<br>
Upwaiter.com si riserva il diritto di indagare e di intraprendere le opportune azioni legali a sua unica discrezione contro chiunque violi tali disposizioni inclusi, senza limitazione, la rimozione delle comunicazioni offensive dal sito web e l'annullamento dell'iscrizione di tali contravventori. Tutti i Contenuti utente pubblicati devono essere vostri e non devono violare i diritti di proprietà intellettuale altrui. Pubblicando i Contenuti dell'utente a tutte le aree pubbliche di Upwaiter.com si concede automaticamente, e l'utente dichiara e garantisce di avere il diritto di concessione, una licenza irrevocabile, perpetua, non esclusiva, interamente versato, licenza mondiale di Upwaiter.com Questa licenza può essere utilizzata per copiare, eseguire, visualizzare e distribuire tali informazioni e contenuti e preparare lavori derivati di, o incorporare in altre opere, informazioni e contenuti, e concedere ed autorizzare le sublicenze del precedente. Upwaiter.com si riserva il diritto di disattivare ed eliminare qualsiasi profilo utente in qualsiasi momento. Ciò può accadere per una serie di motivi, tra cui una richiesta da parte del membro, l'inattività di un membro, o la scoperta di attività fraudolente. Non si restituiscono crediti o pagamenti e la vostra comunicazione con un membro è tagliata corta a causa di disattivazione o la cancellazione del proprio profilo. Il contenuto del sito non può essere utilizzato per contattare, pubblicizzare, sollecitare, o vendere a qualsiasi membro senza il loro previo consenso esplicito. Come con altri siti di social network, non si possono trasmettere lettere a catena o posta indesiderata ad altri membri. Anche se Upwaiter.com non può monitorare la condotta dei suoi membri, si tratta di una violazione di queste regole di utilizzare le informazioni ottenute dal sito web al fine di molestare, abusare o danneggiare un'altra persona.<br>
</p>

<p style="text-align:left"><b>Sicurezza e Password</b><br>
Per registrarsi su questa applicazione e sito e firmare sarà necessario utilizzare un nome utente e password. Tu sei l'unico responsabile per l'uso corretto della sicurezza e della tua password, che dovrebbero essere riservate in ogni momento e non devono essere comunicati a qualsiasi altra persona. È necessario avvisarci immediatamente se si ritiene che la password è nota a qualcun altro o se può essere utilizzata in modo non autorizzato. Non ci assumiamo alcuna responsabilità per qualsiasi utilizzo non autorizzato o improprio o la divulgazione di qualsiasi password.</p>

<p style="text-align:left"><b>Copyright Policy</b><br>
A parte il contenuto degli utenti che viene postato sul sito, tutto il testo, la grafica, interfacce utente, marchi, loghi, suoni e opere d'arte sul sito web sono posseduti, controllati o concessi in licenza da Upwaiter.com Essi sono protetti dalle leggi sul copyright, brevetti e marchi, e vari altri diritti di proprietà intellettuale. Tu non puoi inviare, distribuire o riprodurre in qualsiasi modo materiale protetto da copyright, marchi, o altre informazioni proprietarie, senza previo consenso scritto del proprietario di tali diritti. Senza limitare quanto sopra, se credete che il vostro lavoro sia stato copiato e pubblicato sul Servizio in un modo che costituisce violazione del copyright, si prega di fornire a Upwaiter.com le seguenti informazioni:
- Una firma elettronica o fisica della persona autorizzata ad agire per conto del proprietario del copyright.<br>
- Una descrizione del lavoro protetto da copyright che si ritiene sia stato violato.<br>
- Una descrizione di dove il materiale che, si sostiene violi la legge, si trova sul sito web.<br>
- Il tuo indirizzo, numero di telefono e indirizzo email.<br>
- Una dichiarazione scritta da voi che avete una buona ragione per credere che l'uso contestato non sia autorizzato dal proprietario del copyright, dal suo agente o dalla legge.<br>
Una dichiarazione, fatta sotto pena di spergiuro, che le suddette informazioni nella notifica sono accurate e che tu sei il proprietario del copyright o autorizzato ad agire per conto del proprietario del copyright. Permettiamo di scaricare e archiviare temporaneamente le pagine del sito allo scopo di social networking e la visualizzazione del sito sul proprio computer.
</p>

<p style="text-align:left"><b>Uso non commerciale da parte degli utenti</b><br>
Il Sito è destinato all'uso personale dei singoli membri e non può essere utilizzato in relazione a scopi commerciali. Organizzazioni, aziende e / o le imprese non possono diventare membri e non hanno diritto di utilizzare il Servizio o il sito Web per qualsiasi scopo. Utilizzazione illecita e / o non autorizzato del sito, inclusi nomi utente che raccolgono e / o gli indirizzi email degli utenti con mezzi elettronici o di altro tipo per l'invio di email non richieste e di individuazione non autorizzata o collegamento al Sito, saranno oggetto di indagine. Un'adeguata azione legale sarà intrapresa, senza limitazione, civile, penale e ingiuntiva.</p>

<p style="text-align:left"><b>Diritti proprietari sul contenuto di Upwaiter.com</b><br>
Upwaiter.com possiede e conserva tutti i diritti proprietari del sito Web e il servizio. Il sito Web contiene materiale protetto da copyright, marchi e altre informazioni di proprietà di Upwaiter.com e dei suoi licenziatari. Fatta eccezione per quelle informazioni che sono di pubblico dominio o per i quali vi è stata data autorizzazione scritta, è vietato copiare, modificare, pubblicare, trasmettere, distribuire, eseguire, visualizzare o vendere qualsiasi informazione riservata.</p>

<p style="text-align:left"><b>Limitazione di responsabilità</b><br>
Fatta eccezione per giurisdizioni in cui tali disposizioni sono limitate, in nessun caso Upwaiter.com può essere ritenuto responsabile da voi o da terzi per danni indiretti, consequenziali, esemplari, incidentali, speciali o punitivi, tra cui la perdita di profitti derivante dall'uso del sito web, anche se Upwaiter.com è stato avvisato della possibilità di tali danni. Nonostante qualunque disposizione contraria contenuta nel presente documento, la responsabilità di Upwaiter.com per qualsiasi causa, e indipendentemente dalla forma di azione, può essere limitata alla somma pagata da voi a Upwaiter.com per il servizio durante il periodo di adesione.</p>

<p style="text-align:left"><b>Fornitori di terze parti</b><br>
Al fine di fornire contenuti rilevanti per alcuni siti di social networking e di fornire alcune funzioni, Upwaiter.com acquista una serie di servizi da terzi (collettivamente 'Fornitori'). Questi fornitori sono contraenti indipendenti e non sono agenti o dipendenti di Upwaiter.com. Upwaiter.com non è responsabile per gli atti intenzionali o negligenti e / o omissioni di qualsiasi Fornitore o dei suoi dipendenti, agenti, dipendenti o rappresentanti. Questo include, senza limitazioni la loro consegna parziale o inadeguata di servizi.</p>

<p style="text-align:left"><b>Indennità</b><br>
L'utente accetta di manlevare e tenere indenne Upwaiter.com le sue filiali, affiliate, funzionari, agenti e altri partner e dipendenti, da qualsiasi perdita, responsabilità, reclamo, o richiesta, incluse le ragionevoli spese legali, fatte da terzi a causa o derivante dall'uso del sito in violazione dei Termini d'uso e / o derivanti da una violazione delle Condizioni d'uso e / o di qualsiasi violazione delle dichiarazioni e garanzie presentate in questo documento.</p>

<p style="text-align:left"><b>Disclaimers</b><br>
- Upwaiter.com non ha alcuna responsabilità per, o il controllo sull'accuratezza e la validità dei materiali inviati dagli utenti su questo sito. Il sito e il suo contenuto sono pertanto forniti senza garanzie, condizioni o garanzie che il contenuto sarà accurato.
- Upwaiter.com non si assume alcuna responsabilità per qualsiasi errore, omissione, interruzione, eliminazione, difetto, ritardo nel funzionamento o nella trasmissione, guasti delle linee di comunicazione, furto o distruzione o accesso non autorizzato o alterazione di, comunicazioni dell'utente o membri.<br>
- Upwaiter.com non è responsabile per qualsiasi problema o malfunzionamento tecnico di reti o linee telefoniche, sistemi informatici online, server o provider, apparecchiature informatiche, software, mancanza di e-mail a causa di problemi tecnici o congestione del traffico su Internet o in qualsiasi sito web o della stessa combinazione. Questo include lesioni o danni agli utenti e / o Membri o al computer di qualsiasi altra persona connessi o derivanti dalla partecipazione o il download di materiali in connessione con il Web e / o in connessione con il Servizio.<br>
- Upwaiter.com non è responsabile per la condotta, sia online che offline, di qualsiasi utente del Sito web o membro del Social Network. In nessun caso Upwaiter.com sarà ritenuto responsabile per qualsiasi perdita o danno, compresi le lesioni personali o morte, derivanti dall'uso di chiunque del Sito o del Social Network, qualsiasi contenuto pubblicato sul sito o trasmessi dagli utenti, o qualsiasi interazione tra gli utenti di il Sito, sia online che offline. Questo è il caso anche se la perdita o il danno era prevedibile.<br>
- Upwaiter.com non è responsabile per danni recati o causati dai lavoratori e / o datori di lavoro. Upwaiter.com è solamente uno strumento di comunicazione tra due parti. Upwaiter.com non può essere mantenuto responsabile per eventuali danni o mancanze delle due entità. La responsabilità di Upwaiter.com termina quando le due parti (datori di lavoro e dipendenti) vengono messi in comunicazione.<br>
- Eventuali reclami o danni causati da una delle due parti devono essere risolte tra le parti e Upwaiter.com declina ogni responsabilità offline.<br>
- I siti Upwaiter costituiscono, tra le altre cose, un punto di incontro tra i datori di lavoro che pubblicano opportunità di impiego e ricercano e valutano potenziali candidati e i candidati che pubblicano CV e Profili e ricercano e valutano opportunità di lavoro. Upwaiter.com non monitora né censura le varie voci pubblicate, ivi inclusi i Profili offerti. Upwaiter.com non è coinvolta nell'eventuale trattativa che dovesse aver luogo tra i datori di lavoro e i candidati. Di conseguenza, Upwaiter.com non è responsabile dei Contenuti Utente, della qualità, della sicurezza o della legalità delle offerte di lavoro o dei CV pubblicati, della veridicità o della precisione delle voci pubblicate, della capacità dei datori di lavoro di offrire opportunità di impiego a potenziali candidati o della capacità dei candidati di ricoprire le posizioni lavorative scoperte. Upwaiter.com non garantisce le opportunità di lavoro offerte, i CV o i Contenuti Utente presenti sui Siti Upwaiter.com. Pur riservandosi Upwaiter.com il diritto di rimuovere periodicamente ed a sua esclusiva discrezione i Contenuti Utente, gli annunci di lavoro, i CV o altri materiali dai Siti Upwaiter.com, Upwaiter.com non si assume alcun obbligo di effettuare tale operazione e, nella massima misura in cui è consentito dalla legge, respinge qualsiasi responsabilità derivante dal non aver intrapreso azioni di questo tipo.
</p>

<p style="text-align:left"><b>Upwaiter come aggregatore</b><br>
Una parte dei contenuti e i link ai siti risultanti dalle ricerche effettuate su Upwaiter.com sono stati creati da soggetti terzi sui quali Upwaiter.com non ha alcun controllo. Tali indici sono costituiti da informazioni che sono state identificate ed estrapolate da terze parti e alle quali non è stata apportata nessuna modifica. Upwaiter.com non è in grado e non filtra il contenuto dei propri indici. Pertanto, è possibile che una ricerca eseguita utilizzando Upwaiter possa proporre siti che presentino un contenuto opinabile, inadatto o offensivo. Upwaiter non è in grado di garantire che i risultati delle ricerche effettuate con i suoi servizi non contengano tale materiale e declina ogni responsabilità per i contenuti visualizzati con le ricerche o tramite i Servizi di ricerca di Upwaiter.</p>

<p style="text-align:left"><b>Aggiornamenti</b><br>
Upwaiter.com si riserva il diritto di cambiare, modificare, aggiungere o rimuovere parti di queste Condizioni d'Uso in qualsiasi momento. E' vostra responsabilità di controllare queste condizioni d'uso periodicamente. </p>

<!--<p style="text-align:left"><b>Testo grassettto</b><br>
testo</p>-->

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
