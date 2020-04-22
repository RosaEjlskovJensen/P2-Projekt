<!DOCTYPE html>  
<?php 
session_start();
$kunde = $_POST["email"]; 
$_SESSION['kunde'] = $kunde;
error_reporting(0);

//database connection
require_once '../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}

?>
<html>  
 <head>  
  <title>Portfolie baby</title>  
     <!-- ajax/jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="burgermenujs.js"></script>
  <!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="../stylesheet.css">
 <!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
       <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
 </head>  
    <style>
    /* Modal  */

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

          <li><a href="../Info/blog.php" class="button">Anmeldeser</a></li>
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
<br>
<center>
         <h1> billeder for <?php echo $kunde ?> </h1>
         <div class="twelve columns borderbox"><br>
         	<center>
         	<p class="six columns offset-by-three">Her har du mulighed for at udvælge de billeder du ønsker printet. Samtidig har du mulig for at vælge hvordan dine billeder skal formateres samt typen. Du skal vælge 10 billeder der skal sendes til print. Vælger du mere end de 10 prints vil der bliver tilføjet en mer pris på 98,95,- per billede</p></center>
         </div>
		</center>
    
    
<!---Her fetches billederne fra databasen. Billederne er upleaded som binære koder og skal derfor krypteres først--->

    <div class="billeder">
  <div class='container'>
   <div class='row'>
   <form name="contactform" method="post" action="Kunde-Billede-Overview-Mail.php" class="formkontakt twelve columns">
    
     <?php

  $table = $kunde;
  $query = "SELECT * FROM `$table` ORDER BY id ASC";
  $results = mysqli_query($connection, $query);

	 $option1=0;
	 $option3=0;
	 $option4=0;
	 $option5=0;
	 $option6=0;
	 while($row = mysqli_fetch_array($results))
  { 
	 $option1++; 
	 $option3++; 
	 $option4++; 
	 $option5++; 
	 $option6++; 
   $output.= '<div class=" borderbox four columns checkbox-container">'. $row["filename"].'<center><img class="myImg" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="100" width="100" /> 
	   <br>
	   <table class="tg">
	   
  <tr>
    <td>Farve</td>
   	<input type="radio" class="auto-save"'.  'name="option1'.$option1.'"  value="Farve">Farve
	  <input type="radio" class="auto-save"'.  'name="option1'.$option1.'"  value="sort/hvid">Sorthvid</td>
  </tr>
  
  <tr>
    <td>Størelse</td>
    <td>
  <select '.  'name="option3'.$option3.'" class="auto-save">
		  <option disabled selected value>vælg</option>
		  <option value="4x9">4x9</option>
		  <option value="7x13">7x13</option>
		  <option value="1x1">1x1</option>
		  <option value="10x9">10x9</option>
  </select>
  </td>
  </tr>
  
  <tr>
    <td>Antal</td>
    <td>
	<select '.  'name="option4'.$option4.'" class="auto-save">
		  <option disabled selected value>vælg</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
  </select>
	</td>
  </tr>
  
  <tr>
    <td>Print type</td>
    <td>
	<select '.  'name="option5'.$option5.'" class="auto-save">
	   <option disabled selected value>vælg</option>
	   <option value="Blank">Blank</option>
	   <option value="Mat">Mat</option>
	   <option value="Skumplade">Skumplade</option>
   </select>
</td>
  </tr>
  
  <tr>
    <td>Kommentar</td>
    <td><input type"text" '.  'name="option6'.$option6.'" size="12" class="auto-save"></td>
  </tr>
  
</table>
	  </center>
	  
	  </div>';
	  //først skal alle selektioner laves til variable//
	  /*$selektion1 = $_POST['option1'. $option1];
	
	  $selektion2 = $_POST['option3'. $option3];
	  $selektion2 = $_POST['option4'. $option4];
	  $selektion2 = $_POST['option5'. $option5];
	  $selektion2 = $_POST['option6'. $option6];
	  //For hver bos skal følgende ske//
	  //først skrives navnet på filen//
	  $body_message .= 'Fil: '.$row["filename"]."<br>";
	  // Så skrives de forskellige indstillinger //
	  $body_message .= 'Farve eller Sort/hvid: '.$selektion1."<br>";
	  $body_message .= 'Størrelse: '.$selektion3."<br>";
	  $body_message .= 'Antal: '.$selektion4."<br>";
	  $body_message .= 'Print Type: '.$selektion5."<br>";
	  $body_message .= 'Kommentar: '.$selektion6."<br>";
	  echo $body_message; */
  }
  echo $output;
 
	
 
    ?>
     
	</div>
    
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
    <!-------------------------->

<input class='btn btn2' type="submit"  name="Send" value="Send til print">
	</form>
	
<a href="../index.php">Tilbage</a>

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
            <a href="#" target="_blank"><i class="fab fa-instagram fa-2x"></i></a><br>
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