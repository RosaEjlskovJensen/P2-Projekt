<!DOCTYPE html>
<?php
$kategori = array("baby", "bryllup", "cv", "familie", "gravid", "konfirmation");
$item = $_GET['item'];
$kategorioverskrift = array("Babyer og Børnbilleder", "Bryllupsbilleder", "CV billeder", "Familiebilleder", "Graviditetsbilleder", "Konfirmationsbilleder");

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
	margin-left: 1%;
	margin-right: 1%;
	margin-bottom: 1%;
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
	margin-top: 5%;
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
  font-size: 150px;
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
    margin-left: 25%;
    margin-right: 25%;
}
</style>

 </head>  

<body>

<!-- Navigation bar -->
 <?php include_once('../header.php'); ?>
<br>
<br>
<br>
<center><br>

         <h3 align="center"><?php echo($kategorioverskrift[$item])?></h3>
         	
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
   $output.= '<img class="myImg" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="300" />'; 
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
 <?php include_once('../footer.php'); ?>
    
  </body>
</html>
<?php
	mysqli_close($connection);
?>