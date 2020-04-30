 <?php
 require_once '../Connection.php';

$query = "SELECT id, name, description FROM ommig";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography | Om Mig</title>
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
</head>
<body>

	
 <!-- Navigation bar -->
  <?php include_once('../header.php'); ?>
    
 <?php 
while($row = mysqli_fetch_assoc($results)){

	?>  
	<!-- Kode -->
	<section class="om_mig">
    	<div class="container">
			<div class="box">
      			<div class="row padding5side">
        			<div class="one-half column">
         				<div class="container1">
            				<center><img class="image_amalie eleven columns" src="../Billeder/amalie.jpg"></center><br>
							   
          				</div>
					</div>
			
					<div class="one-half column">
					<br>				
					<h5>Om mig</h5>
					<div class="twelve columns">
					<p style="text-align: justify; font-size: 17px; padding-right: 15px"><?php echo $row['name']?></p>

					<p style="text-align: justify; font-size: 17px; padding-right: 15px"><?php echo $row['description']?> </p>

					<p style="text-align: justify; font-size: 17px; padding-right: 15px">Kh Amalie Sandgaard Photography</p>
					</div>
       		</div>
        		</div>
      		</div>
		</div>
         <?php } ?> 
<br>
		<div class="row">
          <div class="u-full-width">    
            <center><p style="font-size: 15px"><i>Har du nogle spørgsmål, kan du eventuelt finde svar under <a style="color: #8b752e" href="../Kontakt/FAQ.php">FAQ</a>. Har du spørgsmål til priser, <a style="color: #8b752e" href="../Priser/Priser.php">se prisliste.</a> <br> Benyt venligst mit <a style="color: #8b752e" href="../Booking-system-Casper/index.php">online bookingsystem</a> for booking af fotografering.</i></p></center>
          </div>
        </div>
	</section>

    <br>
<!-- Top part of the footer-->
<?php include_once('../footer.php'); ?>
</body>
</html>	