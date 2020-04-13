<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography</title>
	<!-- ajax/jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Fontawsome -->
  <script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">
</head>
<body>

 <!-- Navigation bar -->
  <nav class="nav">
    <a href="index.php"><img class="img_logo" src="billeder/AmalieSandgaardPhotography_LOGO.png"></a>
    <input type="checkbox" id="menu_btn" class="menu_btn" />
    <label class="menu_icon" for="menu_btn"><span class="nav_icon"></span></label>
    <ul class="menu">
      <div class="nav_dropdown">
        <button class="btn_dropdown">Portfolio <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="portfolie/Portfolietemplate.php?item=0" class="button">Baby</a></li>
          <li><a href="portfolie/Portfolietemplate.php?item=1" class="button">Børn</a></li>
          <li><a href="portfolie/Portfolietemplate.php?item=2" class="button">Familie</a></li>
          <li><a href="portfolie/Portfolietemplate.php?item=3" class="button">Konfirmation</a></li>
          <li><a href="portfolie/Portfolietemplate.php?item=4" class="button">Bryllup</a></li>
          <li><a href="portfolie/Portfolietemplate.php?item=5" class="button">Gravid</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Info <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="Info/ommig.php" class="button">Om Mig</a></li>
          <li><a href="Info/blog.php" class="button">Blog</a></li>
          <li><a href="Info/blog.php" class="button">Nyheder</a></li>
          <li><a href="Info/andmeldelser.php" class="button">Anmeldelser</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Priser <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="Priser/Priser.php" class="button">Pakker</a></li>
          <li><a href="Kunde-billeder/FindTabel-kunde.php" class="button">Digital Print</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Booking <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="Booking-system-Casper/index.php" class="button">Kalender</a></li>
          <li><a href="Admin side/Loginside.php" class="button">Login</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Kontakt <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="Kontakt/Kontakt.php" class="button">Kontakt</a></li>
          <li><a href="Kontakt/FAQ.php" class="button">FAQ</a></li>
          <li><a href="Kontakt/Privateterms.php" class="button">Privatlivspolitik</a></li>
          <li><a href="Kontakt/Terms_conditions.php" class="button">Vilkår & Betingelser</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown"></button>
          <div class="dropdown-content">
          </div>
      </div>
    </ul>
  </nav>

 <!-- Showcase -->
  <section class="section_showcase">
    <div class="container u-full-width">
      <img class="showcase_picture" src="billeder/FTB1.jpg">
    </div>
  </section>

 <!-- Seneste nyhed -->
  <section class="section_nyhed">
    <div class="container u-full-width">
      <div class="row">
        <div class="u-full-width">
          <center><h5>Seneste nyt</h5></center>
        </div>
      </div>
      <div class="row">
        <div class="one-third column offset-by-one-third column">
          <div class="container1">
            <center><img class="image1 link_picture" src="billeder/FBBBB1.jpg"></center>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="two columns offset-by-five columns">
          <form action="Info/blog.php"><button type="submit" class="btn btn2">Læs Mere</button></form> 
        </div>
      </div>
      <div class="row">
        <div class="u-full-width">
          <center><p style="font-size: 15px"><i>Tilmelde dig mit <a style="color: #8b752e" href="Info/blog.php">nyhedsbrev</a> idag og gå aldrig glip af events, specialtilbud, etc.</i></p></center>
        </div>
      </div>
    </div>
  </section>

 <!--Galleri -->
  <section class="section_galleri">
  	<div class="container u-full-width">
      <div class="row">
        <div class="u-full-width">
          <center><h5>Hvem fotografer jeg?</h5><p style="font-size: 15px">Klik og læs mere om de forskellige fotograferings typer jeg tilbyder.</p></center>
        </div>
      </div>
 		<div class="row">
 			<div class="one-third column">
 				<div class="container1">
 					<a href="portfolie/PortfolioInfotemplate.php?item=0"><img src="billeder/FBBBB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">BABY</div></a>
 					</div>
 				</div>
 			</div>
 			<div class="one-third column">
 				<div class="container1">
 					<a href="portfolie/PortfolioInfotemplate.php?item=1"><img src="billeder/FBBB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">BRYLLUP</div></a>
 					</div>
 				</div>
 			</div>
 			<div class="one-third column">
 				<div class="container1">
 					<a href="portfolie/PortfolioInfotemplate.php?item=2"><img src="billeder/FFB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">BØRN</div></a>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="row">
 			<div class="one-third column">
 				<div class="container1">
 					<a href="portfolie/PortfolioInfotemplate.php?item=3"><img src="billeder/FKB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">FAMILIE</div></a>
 					</div>
 				</div>
 			</div>
 			<div class="one-third column">
 				<div class="container1">
 					<a href="portfolie/PortfolioInfotemplate.php?item=4"><img src="billeder/FBB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">GRAVID</div></a>
 					</div>
 				</div>
 			</div>
 			<div class="one-third column">
 				<div class="container1">
 					<a href="portfolie/PortfolioInfotemplate.php?item=5"><img src="billeder/FBB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">KONFIRMATION</div></a>
 					</div>
 				</div>
 			</div>
 		</div>
  	<div class="row">
      <div class="u-full-width">
        <center><p style="font-size: 15px"><i>Besøg mit <a style="color: #8b752e" href="My_Pictures.php">portfolio</a> og se billeder fra tidliger fotosessioner.</i></p></center>
        </div>
      </div>
    </div>  
  </section>

 <!-- Booking -->
 <section class="section_booking">
   <div class="u-full-width">
     <div class="container">
      <center>
        <div class="row">
          <div class="u-full-width">
           <h5>Mangler du en fotograf?</h5>
           <p style="font-size: 17px">Investigatam diutissime quaestionem, quantum nostrae mentis igniculum lux diuina dignata est, formatam rationibus litterisque mandatam offerendam uobis communicandamque curaui tam uestri cupidus iudicii quam nostri studiosus inuenti. Qua in re quid mihi sit animi quotiens stilo cogitata commendo, tum ex ipsa materiae difficultate tum ex eo quod raris id est uobis tantum conloquor, intellegi potest. Neque enim famae iactatione et inanibus uulgi clamoribus excitamur; sed si quis est fructus exterior, hic non potest aliam nisi materiae similem sperare sententiam.
           </p>
           <div class="row">
            <div class="two columns offset-by-one-third">
              <form action="#"><button type="submit" class="btn btn2">Se Datoer</button></form> 
            </div>
            <div class="two columns">
              <form action="#"><button type="submit" class="btn btn2">Se Priser</button></form> 
            </div>
          </center>   
        </div>
        <div class="row">
          <div class="u-full-width">
            <center><p style="font-size: 15px"><i>Har du nogle spørgsmål så kan du udfylde <a style="color: #8b752e" href="#">kontaktformularen</a> eller send en mig en <a style="color: #8b752e" href="#">mail</a>.</i></p></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

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
            <a style="font-size: 15px" href="Kontakt/Privateterms.html" >Privatlivspolitik</a><br>
            <a style="font-size: 15px" href="Kontakt/Terms_conditions.html">Vilkår & Betingelser</a>
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
