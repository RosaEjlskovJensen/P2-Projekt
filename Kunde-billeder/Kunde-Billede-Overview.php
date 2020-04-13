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
         	<center>
         	<p class="six columns offset-by-three">Her har du mulighed for at udvælge de billeder du ønsker printet. Samtidig har du mulig for at vælge hvordan dine billeder skal formateres samt typen. Du skal vælge 10 billeder der skal sendes til print. Vælger du mere end de 10 prints vil der bliver tilføjet en mer pris på 98,95,- per billede</p>
         </div>
		</center>
    
    
<!---Her fetches billederne fra databasen. Billederne er upleaded som binære koder og skal derfor krypteres først--->

    <div class="billeder">
  
   
    
     <?php

  $table = $kunde;
  $query = "SELECT * FROM `$table` ORDER BY id ASC";
  $results = mysqli_query($connection, $query);
	 echo "<div class='container'";
	 echo "<div class='row'";
  echo  '<form id="myform">';
	 $box=1;
	 $box1=1;
	 while($row = mysqli_fetch_array($results))
  { 
	 $box++; 
	 $box1++; 
	 $box2++; 
	 $box3++; 
	 $box4++; 
	 $box5++; 
   $output.= '<div class=" borderbox three columns checkbox-container">'. "Nummer ". $row["id"].'<center><img class="myImg u-full width" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" /> 
	   <br>
	   <table class="tg">
  <tr>
    <td>Farve</td>
   	<input type="checkbox" class="auto-save"'.  'id="box'. $box. '" name="farvevalg" value="Farve">Farve
	  <input type="checkbox" class="auto-save"'.  'id="box1'. $box1. '" name="farvevalg" value="sort/hvid">Sorthvid</td>
  </tr>
  <tr>
    <td>Størelse</td>
    <td><select '.  'id="box2'. $box2. '" class="auto-save">
  <option value="4x9">4x9</option>
  <option value="7x13">7x13</option>
  <option value="1x1">1x1</option>
  <option value="10x9">10x9</option>
</select></td>
  </tr>
  <tr>
    <td>Antal</td>
    <td><select '.  'id="box3'. $box3. '" class="auto-save" >
  <option value="Antal">Antal</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select></td>
  </tr>
  <tr>
    <td>Print type</td>
    <td><select '.  'id="box4'. $box4. '" class="auto-save">
  <option value="Type">Type</option>
  <option value="Blank">Blank</option>
  <option value="Mat">Mat</option>
  <option value="Skumplade">Skumplade</option>
</select></td>
  </tr>
  <tr>
    <td>Kommentar</td>
    <td><input type"text" '.  'id="box5'. $box5. '" size="12" class="auto-save"></td>
  </tr>
</table>
	  </center>
	  
	  </div>';
	  
  }
  echo $output;
echo "</form>";
	
 
    ?>
     
	</div>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<script type="text/javascript" src="savy.js"></script>
<script type="text/javascript">

//$('.auto-save').savy('load') --> can be used without callback
$('.auto-save').savy('load',function(){
  console.log("All data from savy are loaded");
});

function dstry(){
  //$('.auto-save').savy('destroy') --> can be used without callback
  $('.auto-save').savy('destroy',function(){
    console.log("All data from savy are Destroyed");
    window.location.reload();
  });
}
</script>

 
 <a href="">Send til print</a>
<a href="../index.php">Tilbage</a>
  </body>
</html>
<?php
	mysqli_close($connection);
?>