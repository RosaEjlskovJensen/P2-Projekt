<!DOCTYPE html>
<?php
$kategori = array("baby", "bryllup", "boern", "familie", "gravid", "konfirmation");
$item = $_GET['item'];
$kategorioverskrift = array("Baby billeder", "Bryllups billeder", "Børne billeder", "Familie billeder", "Graviditets billeder", "Konfirmations billeder");

//database connection
require_once '../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}
?>
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
	<link rel="stylesheet" type="text/css" href="../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">

     
     <style>
.myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}


/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
  z-index: +1;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
         
.billeder{
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: 50px;
        margin-right: 50px;
}
</style>

 </head>  

<body>

<!-- Navigation bar -->
  <nav class="nav">
    <a href="../index.php"><img class="img_logo" src="../billeder/AmalieSandgaardPhotography_LOGO.png"></a>
    <input type="checkbox" id="menu_btn" class="menu_btn" />
    <label class="menu_icon" for="menu_btn"><span class="nav_icon"></span></label>
    <ul class="menu">
      <div class="nav_dropdown">
        <button class="btn_dropdown">Portfolio <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="Portfolietemplate.php?item=0" class="button">Baby</a></li>
          <li><a href="Portfolietemplate.php?item=1" class="button">Bryllup</a></li>
          <li><a href="Portfolietemplate.php?item=2" class="button">Børn</a></li>
          <li><a href="Portfolietemplate.php?item=3" class="button">Familie</a></li>
          <li><a href="Portfolietemplate.php?item=4" class="button">Gravid</a></li>
          <li><a href="Portfolietemplate.php?item=5" class="button">Konfirmation</a></li>
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
<center>
         <h5 align="center"><?php echo($kategorioverskrift[$item])?></h5>
</center>
    
    
<!---Her fetches billederne fra databasen. Billederne er upleaded som binære koder og skal derfor krypteres først--->
<center>
    <div class="billeder">

 <?php
		error_reporting(0);
 {
  $item = $_GET['item'];
  $query = "SELECT * FROM $kategori[$item] ORDER BY id DESC";
  $result = mysqli_query($connection, $query);
  
  while($row = mysqli_fetch_array($result))
  {
   $output.= '<img class="myImg" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" />'; 
  }
  echo $output;
 }
    ?>
    </div>
</center>
    <!-------------------------->

<!-- Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
</div>
    

<script>
// Javascriptet her henter modalen og bruger informationerne ovenover til at hente billederne individuelt.

var modal = document.getElementById("myModal");
var i;

var img = document.getElementsByClassName("myImg");
var modalImg = document.getElementById("img01");

//Den skal have alle billederne med, så derfor er vi nødt til at lave et loop.

 for(i=0;i< img.length;i++)
   {    
    img[i].onclick = function(){

    modal.style.display = "block";
       modalImg.src = this.src;

 }
}
//funktionen der lukker modalen igen. Altså krydset i højre hjørne.
var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
   modal.style.display = "none";
}
</script>
    
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
              <form action="../Booking-system-Casper/index.php"><button type="submit" class="btn btn2">Se Datoer</button></form> 
            </div>
            <div class="two columns">
              <form action="../Priser/priser.php"><button type="submit" class="btn btn2">Se Priser</button></form> 
            </div>
          </center>   
        </div>
        <div class="row">
          <div class="u-full-width">
            <center><p style="font-size: 15px"><i>Har du nogle spørgsmål så kan du udfylde <a style="color: #8b752e" href="../Kontakt/Kontakt.php">kontaktformularen</a> eller send en mig en <a style="color: #8b752e" href="../Kontakt/Kontakt.php">mail</a>.</i></p></center>
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
            <a style="font-size: 15px" href="../Kontakt/Privateterms.php" >Privatlivspolitik</a><br>
            <a style="font-size: 15px" href="../Kontakt/Terms_conditions.php">Vilkår & Betingelser</a>
            </center>
          </div>
          <div class="two columns">
            <center>
            <p style="font-size: 16px">FØLG MIG PÅ</p>
            <a href="https://www.facebook.com/amaliesandgaardphotography/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a><br>
            <a href="https://www.instagram.com/amalie_sandgaard_photography/?hl=da" target="_blank"><i class="fab fa-instagram fa-2x"></i></a><br>
            <a href="#" target="_blank"></a><br>
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
<?php
	mysqli_close($connection);
?>