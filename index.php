<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography</title>
	<!-- ajax/jquery -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Dette link er ikonet der er i ens browser tab -->
  	<link rel="icon" type="image/png" href="billeder/asp.png">
  	<!-- Linker til Skeleton -->
  	<!-- Linker til Fontawsome -->
  	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

 <!-- Navigation bar -->
  <nav class="nav">
    <a href="index.php"><img class="img_logo" src="billeder/AmalieSandgaardPhotography_LOGO.png"></a>
    <input type="checkbox" id="menu_btn" class="menu_btn" />
    <label class="menu_icon" for="menu_btn"><span class="nav_icon"></span></label>
    <ul class="menu">
      <li><a href="My_Pictures.php" class="button">Portfolie</a></li> 
      <li><a href="Om_Mig.php" class="button">Om Mig</a></li>
      <li><a href="nyhedsbrev.php" class="button">Priser</a></li>
      <li><a href="Blog_Page.php" class="button">Nyheder</a></li>
      <li><a href="Booking-system-Casper/index.php" class="button">Booking</a></li>
      <li><a href="send_form_email.php" class="button">Kontakt</a></li>
      <li><a href="Admin side/Loginside.php" class="button">Login</a></li>
    </ul>
  </nav>
  <br>

 <!-- Showcase -->
  <section class="section_showcase">
    <div class="u-full-width">
      <img class="showcase_picture" src="billeder/FTB1.jpg">
    </div>
  </section>
  <br>

 <!--Testimonials -->
 <section class="section_testimonials">
 
 </section>


 <!--Galleri -->
  <section class="section_galleri">
  	<div class="container u-full-width">
 		<div class="row">
 			<div class="one-third column">
 				<div class="container1">
 					<a href="index.php"><img src="billeder/FBBBB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">BABY</div></a>
 					</div>
 				</div>
 			</div>
 			<div class="one-third column">
 				<div class="container1">
 					<a href="index.php"><img src="billeder/FBBB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">BØRN</div></a>
 					</div>
 				</div>
 			</div>
 			<div class="one-third column">
 				<div class="container1">
 					<a href="index.php"><img src="billeder/FFB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">FAMILIE</div></a>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="row">
 			<div class="one-third column">
 				<div class="container1">
 					<a href="index.php"><img src="billeder/FKB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">KONFIRMATION</div></a>
 					</div>
 				</div>
 			</div>
 			<div class="one-third column">
 				<div class="container1">
 					<a href="index.php"><img src="billeder/FBB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">BRYLLUP</div></a>
 					</div>
 				</div>
 			</div>
 			<div class="one-third column">
 				<div class="container1">
 					<a href="index.php"><img src="billeder/FBB1.jpg" class="image1 link_picture">
 						<div class="middle1"><div class="text1">GRAVID</div></a>
 					</div>
 				</div>
 			</div>
 		</div>
  	</div>  
  </section>
  <br>

 <!-- Ínformation -->
  <section class="section_maps">
    <div class="container">
      <div class="u-full-width">
        <div class="row">
          <div class="four columns">
            <center>
            <h6 style="color: #8b752e">NYTTIGE LINKS</h6>
            <a href="#" >Privatlivspolitik</a><br>
            <a href="#">Vilkår & Betingelser</a>
            <p></p>
            <h6 style="color: #8b752e">FØLG MIG PÅ</h6>
            <a href="https://www.facebook.com/amaliesandgaardphotography/" target="_blank">Facebook</a><br>
            <a href="#" target="_blank">Instagram</a><br>
            </center>
          </div>
          <div class="seven columns">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.129099026749!2d9.917400615981306!3d57.049329380919936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4649328c9bc379a3%3A0x97ceb14dd16f56d2!2sBispensgade%2013%2C%209000%20Aalborg!5e0!3m2!1sda!2sdk!4v1582824343072!5m2!1sda!2sdk" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <br>

 <!--Footer -->
  <section class="section_footer">
    <div>
      <center>
        <p class="footer"> &copy; <?php echo date("Y"); ?> | Amalie Sandgaard Photography | CVR: 38 02 70 34  </p>
      </center>
    </div>
  </section>
</body>
</html>