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
          <li><a href="https://www.upwaiter.com/sign-up.php">Înregistrează-te</a></li>
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
          <h3>Politica de confidentialitate</h3>
          <div align="left">
            
            
            <p style="text-align:left">Această Politică de confidențialitate reglementează modul în care Upwaiter.com colectează, folosește, întreține și dezvăluie informațiile colectate de la utilizatori (fiecare "Utilizator") de pe site-ul www.Upwaiter.com ("Site"). Această politică de confidențialitate se aplică Site-ului și tuturor produselor și serviciilor oferite de Upwaiter.com.
</p>
            
            <p style="text-align:left"><b>Ce fel de date colectăm?</b><br>
            Evidență socială. Colectăm informații de identificare personală de la utilizatori numai dacă acestea sunt oferite în mod voluntar. Utilizatorii pot refuza întotdeauna să furnizeze informații cu privire la identificarea personală, dar acest lucru poate influența anumite activități ale site-ului.</p>
            
            <p style="text-align:left"><b>Cookie-urile browser-ului Web</b><br>
            <b>PATRON RESTAURANT</b><br>
            Numele responsabilului<br>
Numele restaurantului<br>
E-mail<br>
Tipul de local<br>
Scurtă descriere a localului<br>
Parola<br>
Regiunea de reședință<br>
Provincia de reședință<br>
Comuna de reședință<br>
Strada<br>
Logo Restaurant<br>
<br>
<b>OSPĂTAR</b><br>
Prenume<br>
Nume<br>
E-mail<br>
Numărul de telefon<br>
Data de naștere<br>
Fotografia pentru CV<br>
Regiunea de reședință<br>
Provincia de reședință<br>
Comuna de reședință<br>
Parolă<br>
Ani de experiență în sectorul catering<br>
Titlul de studiu<br>
Limba nativă<br>
Limba secundară<br>
A treia limbă<br>
Scurtă descriere personală<br>
ARHIVĂM PE SERVERUL NOSTRU CV-UL CARE ESTE CREAT IN FAZA DE INREGISTRARE<br>

</p></p>

<p style="text-align:left"><b>Cine are acces la aceste date?</b><br>
            Exclusiv doar proprietarilor site-ului. Niciun angajat nu are acces la astfel de date.</p>
            
            <p style="text-align:left"><b>Informații personale de identificare</b><br>
            Putem colecta informații de identificare personală de la Utilizatori într-o varietate de moduri, inclusiv, și nu numai, atunci când utilizatorii vizitează site-ul nostru, se înregistrează, accesează ,se abonează, completează un formular și alte activități, servici, funcții și resurse pe care le punem la dispoziție pe site-ul nostru. Utilizatorii pot fi rugați, dacă este cazul, să includă numele, prenumele, adresa de e-mail, adresa poștală, numărul de telefon, informațiile privind cartea de credit sau numărul de securitate socială. Colectăm informații de identificare personală de la utilizatori numai dacă acestea sunt oferite în mod voluntar. Utilizatorii pot refuza întotdeauna să furnizeze informații cu privire la identificarea personală, dar acest lucru poate influența anumite activități ale site-ului.</p>
            
            <p style="text-align:left"><b>Informații non-personale de identificare</b><br>
            Putem colecta informații de identificare non-personale despre utilizatori ori de câte ori interacționează cu site-ul nostru. Informațiile de identificare non-personale pot include numele browser-ului, tipul de calculator și informațiile tehnice despre utilizatori, cum ar fi sistemul de operare sau serviciile de Internet al furnizorului și alte informații similare.</p>
            
            <p style="text-align:left"><b>Cookie-urile browser-ului Web</b><br>
            Site-ul nostru poate utiliza "module cookie" pentru a îmbunătăți experiența utilizatorului. Browser-ul web pentru utilizator plasează cookie-urile pe hard disk-ul său pentru înregistrare și uneori ține evidența informațiilor despre ele. Utilizatorul poate opta pentru setarea propriului browser web pentru a refuza cookie-urile sau pentru a avertiza utilizatorul atunci când sunt trimise cookie-urile. În acest caz, rețineți că anumite părți ale site-ului pot să nu funcționeze corect. Accesați pagina dedicată confidențialității Cookie. Confidențialitatea Cookie-urilor
</p>
            
            <p style="text-align:left"><b>Cum se utilizează informațiile colectate</b><br>
            Upwaiter.com poate colecta și utiliza informații personale de la utilizatori în următoarele scopuri:<br>
- Pentru a îmbunătăți serviciul clienți, informațiile furnizate ne ajută să răspundem mai eficient solicitărilor dvs. și nevoilor de asistență.<br>
- Pentru a personaliza experiența utilizatorului, putem folosi informațiile în formă agregată pentru a înțelege modul în care utilizatorii noștri utilizează serviciile și resursele de pe site-ul nostru.<br>
- Pentru a îmbunătăți site-ul nostru, putem folosi feedback-ul oferit de utilizator pentru a îmbunătăți produsele și serviciile noastre.<br>
- Pentru a vă împărtăși informațiile dvs. unor părți terțe, este posibil să împărtășim sau să vindem informații cu părți terțe pentru comercializare sau în alte scopuri.<br>
- Pentru a desfășura o promoție, un concurs, sondaje sau alte funcții ale site-ului cu scopul de a trimite informații, pentru care utilizatorii și-au dat consimțământul, și să le împărtășească cu subiectele pe care le consideră interesante.<br>
- Pentru a trimite e-mailuri periodice. Putem folosi adresa de e-mail pentru a trimite informații utilizatorului și actualizări legate de comanda lor.<br>
Poate fi folosit și pentru a răspunde solicitărilor, întrebărilor și / sau altor solicitări. Dacă utilizatorul decide să se alăture listei noastre de discuții, el va primi un e-mail care poate include știri despre companii, actualizări, informații referitoare la produs sau serviciu etc. Dacă în orice moment utilizatorul nu mai dorește să primească e-mailuri, vom include instrucțiuni detaliate de anulare.</p>
            
            <p style="text-align:left"><b>Cum se protejează informațiile</b><br>
            Adoptăm colectarea, stocarea și prelucrarea corespunzătoare a datelor și a măsurilor de securitate pentru a proteja împotriva accesului, modificării, dezvăluirii sau distrugerii neautorizate a datelor dvs. personale, cum ar fi numele de utilizator, parola, informațiile despre tranzacții și datele stocate pe site-ul nostru. Schimbul de date sensibile între site și utilizatori are loc pe un canal de comunicații SSL securizat, criptat și protejat cu semnături digitale. Site-ul nostru este, de asemenea, în conformitate cu standardele de vulnerabilitate PCI, pentru a crea cât mai mult posibil mediul cel mai sigur pentru utilizatori.</p>
            
            <p style="text-align:left"><b>Distribuirea informațiilor dvs. personale</b><br>
            Putem folosi serviciile furnizate de părți terțe pentru a ne ajuta să ne gestionăm afacerea și site-ul sau să administrăm activitățile în numele nostru, cum ar fi trimiterea buletinelor informative și a sondajelor. Putem să distribuim informațiile acestor părți terțe cu scopurile indicate mai sus, doar cu permisiunea dvs.</p>
            
            <p style="text-align:left"><b>Site-uri părți terțe</b><br>
            Utilizatorii pot găsi pe site-ul nostru reclame sau alte tipuri de conținut aparținând site-urilor și serviciilor partenerilor, furnizorilor, agenților de publicitate, sponsorilor, licențiatorilor și altor părți terțe. Nu controlăm conținutul sau link-urile care apar pe aceste site-uri și nu suntem responsabili pentru practicile utilizate de aceste site-urile web. Aceste site-uri sau servicii, inclusiv conținutul și legăturile acestora, pot fi în continuă evoluție. Aceste site-uri și servicii pot avea propriile politici de confidențialitate. Navigarea și interacțiunea cu orice alt site web, inclusiv cu site-urile legate de site-ul nostru, se supun termenilor site-ului.</p>
            
            <p style="text-align:left"><b>Publicitate</b><br>
            Anunțurile care apar pe site-ul nostru pot fi difuzate utilizatorilor de către partenerii publici, care pot seta cookie-uri. Cookie-urile permit serverului de publicitate să recunoască calculatorul de fiecare dată când trimiteți anunțuri cu datele dvs. personale. Aceste informații permit rețelelor publicitare, să trimită anunțurile pe care le consideră cele mai interesante pentru dvs. Această politică de confidențialitate nu acoperă utilizarea cookie-urilor de către agențiilor de publicitate.</p>
            
            <p style="text-align:left"><b>Google Adsense</b><br>
            Anumite anunțuri pot fi difuzate de Google. Utilizarea fișierului cookie DART de către Google permit publicarea anunțurilor utilizatorilor pe baza unei singure vizite pe site-ul nostru și pe alte site-uri de pe Internet. DART nu utilizează "date personale" și nu urmărește informații personale despre dvs., cum ar fi numele dvs., adresa de e-mail, adresa fizică etc. Puteți alege să nu utilizați modulul cookie DART consultând anunțul Google și rețeaua de conținut a politicii de confidențialitate la adresa http://www.google.com/privacy_ads.html</p>
            
            <p style="text-align:left"><b>Respectarea legii privind protecția datelor private a copiilor</b><br>
            Protecția datelor private a tinerilor este deosebit de importantă. Din acest motiv, niciodată nu colectăm și nu stocăm informații pe site-ul nostru persoanelor sub 13 ani și nicio parte a site-ului nostru nu este structurată pentru a atrage persoane sub vârsta de 13 ani.</p>
            
             <p style="text-align:left"><b>Modificările acestei politici de confidențialitate</b><br>
            Upwaiter.com are dreptul să își actualizeze politica de confidențialitate în orice moment. Când vom face acest lucru, data de actualizare va fi modificată în partea de jos a acestei pagini. Atât chelnerii, cât și proprietarii de restaurante vor fi anunțați despre schimbare prin e-mailul furnizat în timpul înregistrării. Utilizatorul poate accepta sau nu revizuirea acestei politici de confidențialitate și conștientizarea modificărilor.</p>
            
             <p style="text-align:left"><b>Acceptarea acestor termeni</b><br>
            Prin utilizarea acestui site, acceptați această politică. Dacă nu sunteți de acord cu această politică, vă rugăm să nu utilizați site-ul nostru.</p>
            
            <p style="text-align:left"><b>Cum pot șterge aceste date?</b><br>
            <b>Patron restaurant</b><br>
            Pentru a elimina acest cont urmați acești pași: Dashboard > Setări > Dezactivează acest cont (asigurați-vă că ați bifat caseta "Vreau să-mi dezactivez contul ")<br>
            <b>Ospătar</b><br>
            Pentru a elimina acest cont urmați acești pași: Dashboard > Setări > Dezactivează acest cont (asigurați-vă că ați bifat caseta "Vreau să-mi dezactivez contul ")
            
           </p>
            
            
             <p style="text-align:left"><b>Pentru a ne contacta</b><br>
            Dacă aveți întrebări despre această politică de confidențialitate, despre practicile acestui site sau despre relația cu acest site, ne puteți contacta la:<br>
            www.Upwaiter.com<br>
            info@Upwaiter.com</p>
            
            <p style="text-align:left">
          Acest document a fost actualizat pe data de 23 Mai 2018</p>
            
            
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
