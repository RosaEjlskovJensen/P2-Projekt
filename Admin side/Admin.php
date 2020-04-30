<!doctype html>
<?php
session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
	{
		header("Location: Loginside.php");
		
	}
		
?>
		
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography</title>
	<!-- ajax/jquery -->
 
	<!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Fontawsome -->
  
  <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">

<title>test</title>
</head>

<body>
<center>
<div class="twelve columns">
	<div class="offset-by-one column three columns ">
		<div class="full-height">	
			
				<h2 class="u-full-width">Hjemmeside<h2><hr>
				<a href="../index.php" target="_blank" class="btn3 btn-warning u-full-width">Amalie-Sandgaard-photography.dk</a>
				<a href="../Info/Blog-kategorier/Blog_adminside.php" class="btn3 btn-primary u-full-width">Blogs</a>
				<a href="Mailing_List.php" class="btn3 btn-primary u-full-width">Mailing Liste</a>
                <a href="Portfolieadminside.php" class="btn3 btn-primary u-full-width">Portfolie</a>
                <a href="PortfolieInfoadminside.php" class="btn3 btn-primary u-full-width">portfolie infosider</a>
                <a href="../Priser/Priser_adminside.php" class="btn3 btn-primary u-full-width">Pris pakker</a>
                <a href="../Info/ommigadmin.php" class="btn3 btn-primary u-full-width">Rediger Om mig</a>

				
			
		</div>
	</div>
	
	<div class="offset-by-one column three columns">
	
			<h2 class="u-full-width">Kalender/Booking<h2><hr>	
			<a href="Booking_Admin.php" class="btn3 btn-primary u-full-width">kunde bookinger</a>		
			<a href="../Booking-system-Casper/Booking-Settings-Overview.php" class="btn3 btn-primary u-full-width">åben og luk tider for dage</a>		
		
	</div>
	<div class="offset-by-one column three columns">
	
			<h2 class="u-full-width">Kunde Arkiver<h2><hr>	
				<a href="../Kunde-billeder/Nytabel.php" class="btn3 btn-primary u-full-width">Ny kunde</a>
				<a href="../Kunde-billeder/Kunde-Liste.php" class="btn3 btn-primary u-full-width">Liste over alle kunde arkiver</a>		
	
	</div>
<br>
<br>
<br>

	
	

</div>
</center>
</body>

</html>