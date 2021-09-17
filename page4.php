<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/untitled-4.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Page 4</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Pacifico:400&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico:400&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i&display=swap"></noscript>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  

<meta name="theme-color" content="#6592e6">
<link rel="manifest" href="manifest.json">
<script src="sw-connect.js"></script>
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="%iphone5%">
<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="%iphone6,6s,7,8%">
<link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="%iphone6+,6s+,7+,8+%">
<link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="%iphoneX%">
<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="%iPad-Mini,Air%">
<link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="%iPad-Pro10%">
<link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="%iPad-Pro12%">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="Elpidio">
<link rel="apple-touch-icon" href="%apple-touch-icon%"></head>
<body>
  
  <section data-bs-version="5.1" class="content11 cid-sJigMLy3bu" id="content11-11">
    
    <?php
/*
   Aktion: Formulardaten als E-Mail versenden.
   Formular - PHP 5.4+, Zeichenkodierung: UTF-8

   Erstellt mit dem Formular Generator (17.09.2021) - 
   http://www.nof-tutorials.com/Webbausteine-Formular-Generator/formulargenerator.php

   Bitte testen Sie das Formular ausführlich und
   beachten Sie die Hinweise im Quelltext!
*/

// PHP Fehlermeldungen (1 um das Formular zu testen) anzeigen.
error_reporting(1); // (0/1)

// Weiterleitung - Nach dem absenden des Formulars,
// gelangt der Benutzer über einen Link auf folgende Seite:
$Weiterleitung = "index.php";

$name = isset($_POST["name"]) ? strip_tags(trim($_POST["name"])) : ""; // Name
$email = isset($_POST["email"]) ? strip_tags(trim($_POST["email"])) : ""; // E-Mail
$betreff = isset($_POST["betreff"]) ? strip_tags(trim($_POST["betreff"])) : ""; // Betreff
$nachricht = isset($_POST["nachricht"]) ? strip_tags(trim($_POST["nachricht"])) : ""; // Nachricht

// Benutzereingaben überprüfen
// Die Meldungen müssen hier eventuell angepasst werden.
$Fehler = ["name"=>"", "email"=>"", "betreff"=>"", "nachricht"=>""];
if (isset($_POST["submit"])) {
 $Fehler["name"] = strlen($_POST["name"]) < 1 ? " Bitte füllen Sie dieses Feld aus!" : "";
 $Fehler["email"] = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false ? " Geben Sie eine gültige E-Mail-Adresse ein!" : "";
 $Fehler["betreff"] = strlen($_POST["betreff"]) < 1 ? " Bitte füllen Sie dieses Feld aus!" : "";
 $Fehler["nachricht"] = strlen($_POST["nachricht"]) < 10 ? " Bitte füllen Sie dieses Feld aus (min. 10 Zeichen)!" : "";
}

// Formular erstellen
$Formular = "
<form action='" . $_SERVER["SCRIPT_NAME"] . "' method='post'>

<p>
 <label> Name:
<span class='pflichtfeld'>&#10034; " . $Fehler["name"] . "</span><br>
  <input type='text' name='name' value='" . $name . "' size='35'>
 </label>
</p>

<p>
 <label> E-Mail:
<span class='pflichtfeld'>&#10034; " . $Fehler["email"] . "</span><br>
  <input type='email' name='email' value='" . $email . "' size='35'>
 </label>
</p>

<p>
 <label> Betreff:
<span class='pflichtfeld'>&#10034; " . $Fehler["betreff"] . "</span><br>
  <input type='text' name='betreff' value='" . $betreff . "' size='45'>
 </label>
</p>

<p>
 <label> Nachricht:
 <span class='pflichtfeld'>&#10034; " . $Fehler["nachricht"] . "</span><br>
 <textarea name='nachricht' cols='40' rows='8'>" . $nachricht . "</textarea>
 </label>
</p>

<p>
 <br>
 <input type='submit' name='submit' value='Formular absenden'>
</p>

<p>
 <small>Bitte alle mit <span class='pflichtfeld'>&#10034;</span>
 markierten Felder ausfüllen.</small>
</p>

</form>
";

// Formular abgesendet
if (isset($_POST["submit"])) {

 // Sind keine Benutzer-Eingabefehler vorhanden
 if (implode("", $Fehler) == "") {

  // Daten als E-Mail versenden (Vorschlag) - Bitte anpassen!

  // Zeitzone und das aktuelle Datum setzen
  // http://de3.php.net/manual/de/timezones.europe.php
  date_default_timezone_set("Europe/Berlin");
  $Datum = date("d.m.Y H:i");

  // Empfänger E-Mail
  $Mailto = "name@example.com";

  // Inhalt der E-Mail setzen
  $Text = "   Gesendet am: $Datum Uhr
   Name: $name
   E-Mail: $email
   Betreff: $betreff
   Nachricht: $nachricht
  ";

  // E-Mail versenden
  mb_internal_encoding("UTF-8");
  $Betreff = mb_encode_mimeheader($betreff, "UTF-8", "Q");
  $Kopfzeile = "MIME-Version: 1.0;\nFrom: " . mb_encode_mimeheader($name, "UTF-8", "Q") .
   "<" . $email . ">" . "\nContent-Type: text/plain; Charset=UTF-8;\n";

  if (mail($Mailto, $Betreff, $Text, $Kopfzeile)) {

   echo "<p>Vielen Dank, die Nachricht wurde versendet.</p>";
  }
  else {

   // Wenn die Daten nicht versendet werden konnten,
   // wird die E-Mail-Adresse für den direkten Kontakt eingeblendet.
   echo "<p>Beim Senden der Nachricht ist ein Fehler aufgetreten!<br>" . 
   "Bitte wenden Sie sich direkt an: <a href='mailto:" . $Mailto . "'>" . $Mailto . "</a></p>";
  }

  // Weiterleitung
  echo "<p><a href='" . $Weiterleitung . "' target='_top'>Weiter</a></p>";
 }
 else {

  // Formular und Benutzer-Eingabefehler ausgeben
  echo $Formular;
 }
}
else {

 // Formular ausgeben
 echo $Formular;
}
?></section>

<section data-bs-version="5.1" class="menu menu3 cid-sIIil3bdKC" once="menu" id="menu3-z">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="assets/images/untitled-4.png" alt="" style="height: 8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="#">Beyond expectations!</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-primary display-4" href="index.html">Home</a></li><li class="nav-item"><a class="nav-link link text-primary display-4" href="services.html#top">
                            Services</a></li><li class="nav-item"><a class="nav-link link text-primary display-4" href="contact.html#top">Contacts</a>
                    </li><li class="nav-item"><a class="nav-link link text-primary display-4" href="page4.php#content11-11">About us</a></li></ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://facebook.com" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon" style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://instagram.com" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon" style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span>
                    </a>
                    
                    
                </div>
                
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="footer5 cid-sIJ4XoRX1d mbr-reveal" once="footers" id="footer5-10">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3 col-6">
                <div class="media-wrap">
                    <a href="#">
                        <img src="assets/images/untitled-8.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-9 col-6">
                <p class="mbr-text align-right links mbr-fonts-style display-7"><a href="index.html#top" class="text-primary">Home&nbsp;</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="services.html#top" class="text-primary">Services&nbsp;</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="contact.html#contacts2-r" class="text-primary">&nbsp; Contact&nbsp;</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="about.html#top" class="text-primary">About Us</a></p>
            </div>
        </div>
        <!-- <div class="media-container-row">
            <div class="col-md-12"> -->
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2021 Elite Promotions &amp; Solutions - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://instagram.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span>
                            </a>
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- </div>
            </div> -->
        </div>

    </div>
</section>


<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  

</body>
</html>