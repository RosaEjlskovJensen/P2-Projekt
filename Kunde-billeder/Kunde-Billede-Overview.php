<!DOCTYPE html>  
<?php 
$kunde = $_POST["email"]; 
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="burgermenujs.js"></script>
  <!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="../stylesheet.css">
 <!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
 </head>  
<body>
<center>
         <h1> billeder for <?php echo $kunde ?> </h1>
         <div class="twelve columns borderbox"><br>

         	<center><p class="six columns offset-by-three">Her har du mulighed for at udvælge de billeder du ønsker printet. Samtidig har du mulig for at vælge hvordan dine billeder skal formateres samt typen. Du skal vælge 10 billeder der skal sendes til print. Vælger du mere end de 10 prints vil der bliver tilføjet en mer pris på 98,95,- per billede</p>
         </div>
</center>
    
    
<!---Her fetches billederne fra databasen. Billederne er upleaded som binære koder og skal derfor krypteres først--->

    <div class="billeder">
     <?php
 {
  $table = $kunde;
  $query = "SELECT * FROM `$table` ORDER BY id ASC";
  $results = mysqli_query($connection, $query);
	 echo "<div class='ten columns'";
  echo "<form name='pictureform'>";
	 
	 while($row = mysqli_fetch_array($results))
  { 
   $output.= '<div class=" borderbox three columns">'. "Nummer ". $row["id"].'<center><img class="myImg u-full width" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" /> 
	   <br>
	   <table class="tg">
  <tr>
    <td>Farve</td>
    <td><input type="checkbox" id="Farve" name="farvevalg" value="Farve">farve
	  <input type="checkbox" id="sort/hvid" name="farvevalg" value="sort/hvid">sort/hvid</td>
  </tr>
  <tr>
    <td>Størelse</td>
    <td><select id="antal">
  <option value="4x9">4x9</option>
  <option value="7x13">7x13</option>
  <option value="1x1">1x1</option>
  <option value="10x9">10x9</option>
</select></td>
  </tr>
  <tr>
    <td>Antal</td>
    <td><select id="antal" >
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select></td>
  </tr>
  <tr>
    <td>Print type</td>
    <td><select id="antal" >
  <option value="Blank">Blank</option>
  <option value="Mat">Mat</option>
  <option value="på skumplade">på skumplade</option>
</select></td>
  </tr>
  <tr>
    <td>Kommentar</td>
    <td><input type"text" cols="3" rows="3"></td>
  </tr>
</table>
	  </center>
	  </div>';
	  
  }
  echo $output;
echo "</form>";
 }
    ?>
    </div>

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
<a href="">Gem</a>
<a href="">Send til print</a>
<a href="../index.php">Tilbage</a>
    
  </body>
</html>
<?php
	mysqli_close($connection);
?>