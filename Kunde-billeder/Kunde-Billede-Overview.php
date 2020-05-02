<!DOCTYPE html>  
<?php 
session_start();
$kunde = $_POST["pass"]; 
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
<!--<link rel="stylesheet" href="../stylesheet.css">
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
  max-width: 1200px;
	margin-top: 10%;
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
  font-size: 140px;
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
  <?php include_once('../header.php'); ?>
<br>
<br>
<br>
<br>
<center>
         
         <h1> Billede Bestilling </h1>
         <div class="twelve columns borderbox"><br>
         	<center>
         	<p class="six columns offset-by-three">Info om priser og pakker kan findes her:<br>
			 <a href="../Priser/Priser.php" class="text1">Enkelt print</a><br>
				<a href="../Priser/Priser-Generel.php" class="text1">Generelle pakker</a><br>
					<a href="../Priser/Priser-Bryllup.php" class="text1">Bryllups pakker</a><br>
						<a href="../Priser/Priser-Konfirmation.php" class="text1">Konfirmations pakker</a></p></center>
         </div>
		</center>
    
    
<!---Her fetches billederne fra databasen. Billederne er upleaded som binære koder og skal derfor krypteres først--->

    <div class="billeder">
   
   <form name="contactform" method="post" action="Kunde-Billede-Overview-Mail.php" class="formkontakt u-full-width">
    
     <?php

  $table = $kunde;
  $query = "SELECT * FROM `customer_archive` WHERE pass='$kunde'";
	   $results = mysqli_query($connection, $query);
	   $row = mysqli_fetch_array($results);
	    
	  if($row['frys'] == "lukket")
	  {
		  echo "Dit arkiv er blevet lukket, skriv eventuelt til Amalie";
	  }
	   else
	   {
		  
	 $query = "SELECT * FROM `$table` ORDER BY id ASC";
  $results = mysqli_query($connection, $query);

	 $option1=0;
	 $option2=0;
	 $option3=0;
	 $option4=0;
	 $option5=0;
	 $option6=0;
	echo "<div class='row'>";
	 while($row = mysqli_fetch_array($results))
  { 
	 $option1++; 
	 $option2++; 
	 $option3++; 
	 $option4++; 
	 $option5++; 
	 $option6++; 
   $output.= '<div class=" borderbox one-fourth column height615 checkbox-container">'. $row["filename"].'<center><img class="myImg" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="300" /> 
	   <br>
	   <table class="tg">
	
	  
	  <div>
    <div>
    Digital fil
	 <input type="radio" name="'. 'option2'. $option2.'" id="digital" value="Digital Fil">
	 <div class="reveal-if-active">
        <label for="which-dog">Modtaget!</label>
      </div>
    </div>
      
    
    PRINT
	 <input type="radio" name="'. 'option2'. $option2.'" id="print" value="PRINT">
	 <div class="reveal-if-active">
	 
        
<input type="radio" class=""'.  'name="option1'.$option1.'"  value="Farve">Farve
	  <input type="radio" class=""'.  'name="option1'.$option1.'"  value="sort/hvid">Sorthvid
		
		<label for="Type">Tryk type</lable>
		<select '.  'name="option5'.$option5.'" class="">
	   <option disabled selected value>vælg</option>
	   <option value="Blank">Blank</option>
	   <option value="Mat">Mat</option>
	   <option value="Skumplade">Skumplade</option>
   </select>
		
				<label for="Antal">Antal</lable>
  <select '.  'name="option4'.$option4.'" class="">
		  <option disabled selected value>vælg</option>
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
  </select>
		
		<label for="stoerelse">Størelse</lable>
		<select '.  'name="option3'.$option3.'" class="">
		  <option disabled selected value>vælg</option>
		  <option value="4x9">4x9</option>
		  <option value="7x13">7x13</option>
		  <option value="1x1">1x1</option>
		  <option value="10x9">10x9</option>
  </select>
  
  
		
		
   
   		<label for="Kommentar">Kommentar</lable>
		<input type"text" '.  'name="option6'.$option6.'" size="12" class="">
		
		
      </div>
    </div>
 


	  
</div>


 
  
</table>
	  </center>
	  
	  </div>';
  }
  echo $output;
 echo "</div>";
	}  
 
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
   <script>var FormStuff = {
  
  init: function() {
    this.applyConditionalRequired();
    this.bindUIActions();
  },
  
  bindUIActions: function() {
    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);
  },
  
  applyConditionalRequired: function() {
    
    $(".require-if-active").each(function() {
      var el = $(this);
      if ($(el.data("require-pair")).is(":checked")) {
        el.prop("required", true);
      } else {
        el.prop("required", false);
      }
    });
    
  }
  
};

FormStuff.init();</script>
    <!-------------------------->

<div class="row">
<div class="twelve columns offset-by-four column">
<input class='btn btn2 four columns' type="submit"  name="Send" value="Send til print">


	</form>
	
</div></div>

 <!-- Top part of the footer-->
 <?php include_once('../footer.php'); ?>
  </body>
</html>
<?php
	mysqli_close($connection);
?>