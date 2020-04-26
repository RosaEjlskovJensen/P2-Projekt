<!DOCTYPE html>
<?php
$kategori2 = array("FOTOGRAFERING", "BILLEDE OPHÆNG", "KUNDERS BLOGINDLÆG", "PRODUKTER", "SÅDAN TAGER DU BEDRE BILLEDER", "TIPS OG TRICKS");
$kategori = array("fotografering", "billedeophæng", "kundersblog", "produkter", "bedrebilleder", "tot");
$item = $_GET['item'];


//database connection
require_once '../../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}
$query = "SELECT * FROM $kategori[$item]";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}

?>
<html>
<head>		
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography | Blog</title>
  <!-- ajax/jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="../../billeder/asp.png">
  <!-- Linker til Fontawsome -->
  <script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="../../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../../normalize.css">
</head>
<style>

    .box1 img{
        width: 200px !important;
        height: 200px !important;
}
    
    <style>
    
    .u-pull-left {
        margin-left: 20px;
    }
    
    .box {
        margin-bottom: 20px;
}
    .para {
        padding-top:20px;
}
</style>
<body>
	
<!-- Navigation bar -->
  <nav class="nav">
    <a href="../../index.php"><img class="img_logo" src="../../Billeder/AmalieSandgaardPhotography_LOGO.png"></a>

    <input type="checkbox" id="menu_btn" class="menu_btn" />
    <label class="menu_icon" for="menu_btn"><span class="nav_icon"></span></label>
    <ul class="menu">
      <div class="nav_dropdown">
        <button class="btn_dropdown">Portfolio <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
         <li><a href="../portfolie/Portfolietemplate.php?item=0" class="button">Baby</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=1" class="button">Bryllup</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=2" class="button">Børn</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=3" class="button">Familie</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=4" class="button">Gravid</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=5" class="button">Konfirmation</a></li>
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
          <li><a href="../../Priser/Priser.php" class="button">Pakker</a></li>
          <li><a href="../../Kunde-billeder/FindTabel-kunde.php" class="button">Digital Print</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Booking <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../../Booking-system-Casper/index.php" class="button">Kalender</a></li>
          <li><a href="../../Admin side/Loginside.php" class="button">Login</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Kontakt <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../../Kontakt/Kontakt.php" class="button">Kontakt</a></li>
          <li><a href="../../Kontakt/FAQ.php" class="button">FAQ</a></li>
          <li><a href="../../Kontakt/Privateterms.php" class="button">Privatlivspolitik</a></li>
          <li><a href="../../Kontakt/Terms_conditions.php" class="button">Vilkår & Betingelser</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown"></button>
          <div class="dropdown-content">
          </div>
      </div>
    </ul>
  </nav>

	
<!--
Lav en table med disse rækker:

id
img
title
description
body
*published (kun måske - hvis der er brug for, at det kun er dem, der er published, som kan ses på websitet)

-->
	
<!-- About blog -->
	<section class="blog">
    	<div class="container">
      		<div class="row">
         		<div>
            		<center><h5><?php echo $kategori2[$item] ?></h5></center>
				</div>
      		</div>
		</div>
	</section>
		
<!-- View of blogposts -->
    
   
    
   <section class="priser"> 
<div class=' offset-by-three columns six columns'>
    
          <?php 
while($row = mysqli_fetch_assoc($results)){

	?>  
          
            <div class='row box'>
				<div class='u-full-width'>
	 <center>
                
               <div class="box1">                                                       
			     <?php echo $row['Text']?>
                  </div></div></div>
     </center>
				
			
	

     
 <?php } ?>
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
            <a style="font-size: 15px" href="../../Kontakt/Privateterms.php" >Privatlivspolitik</a><br>
            <a style="font-size: 15px" href="../../Kontakt/Terms_conditions.php">Vilkår & Betingelser</a>
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
	<?php mysqli_close($connection); ?>

