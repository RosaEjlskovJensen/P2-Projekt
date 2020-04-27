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
<meta charset="utf-8">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="../stylesheet.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<!-- Dette link er ikonet der er i ens browser tab -->
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>test</title>
</head>

<body>
<center>
<div class="twelve columns">
	<div class="offset-by-one column three columns ">
		<div class="full-height">	
			
				<h2 class="u-full-width">Hjemmeside<h2><hr>
				<a href="../Info/Blog-kategorier/Blog_adminside.php" class="btn btn-primary u-full-width">Blogs</a>
				<a href="Mailing_List.php" class="btn btn-primary u-full-width">Mailing Liste</a>
                <a href="Portfolieadminside.php" class="btn btn-primary u-full-width">Portfolie</a>
                <a href="PortfolieInfoadminside.php" class="btn btn-primary u-full-width">portfolie infosider</a>
                <a href="../Priser/Addprice.php" class="btn btn-primary u-full-width">Tilføj Prispakke</a>
                <a href="../Priser/Editprice.php" class="btn btn-primary u-full-width">Rediger Prispakke</a>
                <a href="../Info/ommigadmin.php" class="btn btn-primary u-full-width">Rediger Om mig</a>

				<a href="../index.php" class="button2 u-full-width place-bottom">til forside</a>
			
		</div>
	</div>
	
	<div class="offset-by-one column three columns">
	
			<h2 class="u-full-width">Kalender/Booking<h2><hr>	
			<a href="Booking_Admin.php" class="btn btn-primary u-full-width">kunde bookinger</a>		
			<a href="../Booking-system-Casper/Booking-Settings-Overview.php" class="btn btn-primary u-full-width">åben og luk tider for dage</a>		
		
	</div>
	<div class="offset-by-one column three columns">
	
			<h2 class="u-full-width">Kunde Arkiver<h2><hr>	
				<a href="../Kunde-billeder/Nytabel.php" class="btn btn-primary u-full-width">Ny kunde</a>
				<a href="../Kunde-billeder/FindTabel.php" class="btn btn-primary u-full-width">Find kunde specifik arkiv</a>
				<a href="../Kunde-billeder/Kunde-Liste.php" class="btn btn-primary u-full-width">Liste over alle kunde arkiver</a>		
	
	</div>
</div>
</center>
</body>

</html>