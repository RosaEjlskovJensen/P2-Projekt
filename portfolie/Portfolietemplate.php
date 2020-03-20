<!DOCTYPE html>  

<html>  
 <head>  
  <title>Portfolie baby</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="burgermenujs.js"></script>
  <!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="../stylesheet2.css">
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
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
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

<!-- Det første php gode her, laver en array med de forskellige kategorier   >

<?php
$kategori = array("baby", "bryllup", "boern", "familie", "gravid", "konfirmation");
?>

<!---Connect til database---->
<?php
//database connection
require_once '../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}
?>

<body>


<center>
         <h1> billeder </h1>
</center>
    
    
<!---Her fetches billederne fra databasen. Billederne er upleaded som binære koder og skal derfor krypteres først--->
<center>
    <div class="billeder">

     <?php
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
<a href="file:///C:/Users/Casper/Documents/xampp/htdocs/test/Admin%20side/Admin.php">Tilbage</a>
    
  </body>
</html>
<?php
	mysqli_close($connection);
?>