<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Amalie Sandgaard | Photography | Digital Print</title>
	<!-- ajax/jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Fontawsome -->
  <script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">
</head>

<body>
    
    <!-- Navigation bar -->
  <nav class="nav">
    <a href="../index.php"><img class="img_logo" src="../Billeder/AmalieSandgaardPhotography_LOGO.png"></a>
    <input type="checkbox" id="menu_btn" class="menu_btn" />
    <label class="menu_icon" for="menu_btn"><span class="nav_icon"></span></label>
    <ul class="menu">
      <div class="nav_dropdown">
        <button class="btn_dropdown">Portfolio <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../portfolie/Portfolietemplate.php?item=0" class="button">Baby</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=1" class="button">Børn</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=2" class="button">Familie</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=3" class="button">Konfirmation</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=4" class="button">Bryllup</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=5" class="button">Gravid</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Info <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../Info/ommig.php" class="button">Om Mig</a></li>
          <li><a href="../Info/blog.php" class="button">Blog</a></li>
          <li><a href="../Info/blog.php" class="button">Nyheder</a></li>
          <li><a href="../Info/andmeldelser.php" class="button">Anmeldelser</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Priser <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../Priser/Priser.php" class="button">Pakker</a></li>
          <li><a href="../Kunde-billeder/FindTabel-kunde.php" class="button">Digital Print</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Booking <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../Booking-system-Casper/index.php" class="button">Kalender</a></li>
          <li><a href="../Admin side/Loginside.php" class="button">Login</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Kontakt <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../Kontakt/Kontakt.php" class="button">Kontakt</a></li>
          <li><a href="../Kontakt/FAQ.php" class="button">FAQ</a></li>
          <li><a href="../Kontakt/Privateterms.php" class="button">Privatlivspolitik</a></li>
          <li><a href="../Kontakt/Terms_conditions.php" class="button">Vilkår & Betingelser</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown"></button>
          <div class="dropdown-content">
          </div>
      </div>
    </ul>
  </nav>
    
    <br>
    <br>
    <br>
<center> <h5>skriv din email her for at se dine billeder</h5>
<form action="Kunde-Billede-Overview.php" method="post">
<input type="email" name="email" id="email" placeholder="Kundens Email">
<input type="submit" name="submit" id="submit" value="Se billeder">	
	
</form>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


   
     <!-- Top part of the footer-->
  <section class="section_topfooter">
    <div class="container">
      <div class="u-full-width">
        <div class="row">
          <div class="six columns">
            <center>
            <p style="font-size: 16px">KONTAKTOPLYSNINGER</p>
            <p style="font-size: 15px">Amalie Sandgaard<br>CVR: 38 02 70 34<br>+45 31 51 45 55<br>amaliesandgaardphotography@hotmail.com</p>
            </center>
          </div>
          <div class="two columns">
            <center>
            <p style="font-size: 16px">NYTTIGE LINKS</p>
            <a style="font-size: 15px" href="#" >Privatlivspolitik</a><br>
            <a style="font-size: 15px" href="#">Vilkår & Betingelser</a>
            </center>
          </div>
          <div class="two columns">
            <center>
            <p style="font-size: 16px">FØLG MIG PÅ</p>
            <a href="https://www.facebook.com/amaliesandgaardphotography/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a><br>
            <a href="https://www.instagram.com/amalie_sandgaard_photography/?hl=da" target="_blank"><i class="fab fa-instagram fa-2x"></i></a><br>
            </center>
          </div>
        </div>
      </div>
    </div>
  </section> 
 <!--Bottom part of the footer -->
  <section class="section_bottomfooter">
    <div>
      <center>
        <p style="font-size: 15px" class="footer"> &copy; Copyright <?php echo date("Y"); ?> | Amalie Sandgaard Photography | All Rights Reserved</p>
      </center>
    </div>
  </section>
</body>
</html>
