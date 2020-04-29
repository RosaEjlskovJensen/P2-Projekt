    <?php
 require_once '../Connection.php';

$query = "SELECT * FROM prices-bryllup ASE";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}


?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography | Priser</title>
	<!-- ajax/jquery -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- -->
  <script src="mySlides.js"></script>
	<!-- Dette link er ikonet der er i ens browser tab -->
  	<link rel="icon" type="image/png" href="../Billeder/asp.png">
  	<!-- Linker til Skeleton -->
  	<!-- Linker til Fontawsome -->
  	<script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<style>
    
    .u-pull-left {
        margin-left: 20px;
    }
    
   
    .para {
        padding:20px;
}
</style>

<body>

<!-- Navigation bar -->
  <nav class="nav">
    <a href="../index.php"><img class="img_logo" src="../Billeder/AmalieSandgaardPhotography_LOGO.png"></a>
    <input type="checkbox" id="menu_btn" class="menu_btn" />
    <label class="menu_icon" for="menu_btn"><span class="nav_icon"></span></label>
    <ul class="menu">
      <div class="nav_dropdown">
        <button class="btn_dropdown">Portfolio <i class=""></i></button>
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
        <button class="btn_dropdown">Info <i class=""></i></button>
          <div class="dropdown-content">
          <li><a href="../Info/ommig.php" class="button">Om Mig</a></li>
          <li><a href="../Info/blog.php" class="button">Blog</a></li>
          
          <li><a href="../Infoforside.php" class="button">Fotograferins info</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Priser <i class=""></i></button>
          <div class="dropdown-content">
          <li><a href="../Priser/Priser.php" class="button">Pakker</a></li>
          <li><a href="../Kunde-billeder/FindTabel-kunde.php" class="button">Digital Print</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Booking <i class=""></i></button>
          <div class="dropdown-content">
          <li><a href="../Booking-system-Casper/index.php" class="button">Kalender</a></li>
          <li><a href="../Admin side/Loginside.php" class="button">Login</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Kontakt <i class=""></i></button>
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


  <!-- Heading -->

	<div class="container u-full-width">
		<h4><center>Bryllupspakker</center>	</h4>
    	<center><p>Info eneklte prints priser og størelser kan findes <a href="Priser.php" class="text1">her</a></p>
     	
      
	</div>



  <?php 
while($row = mysqli_fetch_assoc($results)){

	?>  
    <!-- View of priser -->
	
		<div class=' offset-by-three columns six columns box2'>
				
				<div class="one-third column">
					<div class="row">
						<img class="u-full-width"  src="<?php echo $row['link']?>">
					</div>
				</div>
			
				
				<div class="two-thirds column greywall">
					<div class="row">
								<br>
						<center><p class="prispakkebillede" style="font-size: 45px"><?php echo $row['name']?> </p></center>
						<center><p class="para" style="font-size: 20px"><?php echo $row['description']?></p> </center>  
						<?php if(empty($row['pris']))
							{
								echo "<center><p class='padding5side' style='font-size: 10px'>". $row['kommentar']. "</p></center> ";
							}else{ 
					echo "<center><p class='u-pull-right padding5side' style='font-size: 20px'>". $row['pris']. ",-</p></center> ";
	
							echo "<center><p class=' padding5side' style='font-size: 12px'>". $row['kommentar']. "</p></center> ";} ?>
						  
					
					</div>
				</div>
      		
		</div>
	
	

<br>


 <?php } ?>   

    




 

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
            <a style="font-size: 15px" href="../Kontakt/Privateterms.php" >Privatlivspolitik</a><br>
            <a style="font-size: 15px" href="../Kontakt/Terms_conditions.php">Vilkår & Betingelser</a>
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