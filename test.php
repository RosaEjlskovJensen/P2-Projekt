<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Amalie Sandgaard | Photography</title>
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Burgermenu -->
  <link rel="stylesheet" type="text/css" href="burgermenu.css">
  <!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Skeleton -->
  <!-- Linker til Stylesheet -->
  <link rel="stylesheet" href="stylesheet2.css">
  <style>
    html {
      overflow: scroll;
      overflow-x: hidden;
    }
    ::-webkit-scrollbar {
      width: 0px;  /* Remove scrollbar space */
      background: transparent;  /* Optional: just make scrollbar invisible */
    }

    .navbar{
      position: fixed;
      z-index: 99;
      opacity: 0.98;
      top: 0;
    }

    .img_logo{
      max-width: 20%;
      height: auto; }

      @media (max-width: 750px) {
      .navbar { display: none; }}

      @media (min-width: 750px) {
      .burgermenu { visibility: hidden; }}

    </style>

    <!-- Linker til normalize der styre font størelser på små skærme -->
    <link rel="stylesheet" href="normalize.css">
  </head>
  <body>

    <!-- Navigations Sektion -->

<!-- bugermenu -->
<div class="burgermenu">
<div class="menu-wrap">
  <input type="checkbox" name="checkbox" class="toggler">
  <div class="hamburger"><div></div></div>
  <div class="menu">
    <div>
      <div>
        <ul>
        <li><a href="My_Pictures.php" class="button">Portfolie</a></li> 
        <li><a href="Om_Mig.php" class="button">Om Mig</a></li>
        <li><a href="nyhedsbrev.php" class="button">Priser</a></li>
        <li><a href="Blog_Page.php" class="button">Nyheder</a></li>
        <li><a href="Booking-system-Casper/index.php" class="button">Booking</a></li>
        <li><a href="send_form_email.php" class="button">Kontakt</a></li>
        <li><a href="Admin side/Loginside.php" class="button">Login</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

    <!--Navigation burger start-

    <div id="burger" class="burger">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <!--Navigation burger slut -->

    <nav class="u-full-width navbar">
      <div class="two.columns">
        <a href="index.php"><img class="img_logo" src="billeder/AmalieSandgaardPhotography_LOGO.png"></a>
        <li><a href="Admin side/Loginside.php" class="button">Login</a></li>
        <li><a href="send_form_email.php" class="button">Kontakt</a></li>
        <li><a href="Booking-system-Casper/index.php" class="button">Booking</a></li>
        <li><a href="Blog_Page.php" class="button">Nyheder</a></li>
        <li><a href="nyhedsbrev.php" class="button">Priser</a></li>
        <li><a href="Om_Mig.php" class="button">Om Mig</a></li>
        <li><a href="My_Pictures.php" class="button">Portfolie</a></li>
      </div>
    </nav>

        <!--Navigation punkter ^ (udskift når siderne er oprettet)
            
            Logo:      <li><a href="index.php" class="logo"><imgsrc="billeder/asp.png"></a></li>
            Portfolie: <li><a href="Portfolie.php" class="button">Portfolie</a></li>
            Om Mig:    <li><a href="Om_Mig.php" class="button">Om Mig</a></li>
            Priser:    <li><a href="Priser.php" class="button">Priser</a></li>
            Blog:      <li><a href="Blog_Page.php" class="button">Blog</a></li>
            Booking:   <li><a href="Booking.php" class="button">Booking</a></li>
            Kontakt:   <li><a href="Kontakt.php" class="button">Kontakt</a></li>
          -->

        </body>
        </html>