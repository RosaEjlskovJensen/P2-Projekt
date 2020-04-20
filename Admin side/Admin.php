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
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<!-- Dette link er ikonet der er i ens browser tab -->
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>test</title>
</head>

<body class="wallpaper">
<div class="twelve columns">
	<div class="four columns ">
		<div class="blackbar full-height">	
			
				<h2 class="u-full-width logintext"> Generelle site<h2><hr>
				<a href="../Info/Blog-kategorier/Blog_adminside.php" class="button1 twelve columns">Blogs</a>
				<a href="Mailing_List.php" class="button1 u-full-width">Mailing Liste</a>
                <a href="Portfolieadminside.php" class="button1 u-full-width">Portfolie</a>
                <a href="PortfolieInfoadminside.php" class="button1 u-full-width">portfolie infosider</a>
                <a href="../Priser/Addprice.php" class="button1 u-full-width">Tilføj Prispakke</a>
                <a href="../Priser/Editprice.php" class="button1 u-full-width">Rediger Prispakke</a>

				<a href="../index.php" class="button2 u-full-width place-bottom">til forside</a>
			
		</div>
	</div>
	<div class="four columns">
		<div class=" blackbar full-height">	
			<h2 class="u-full-width logintext">Booking<h2><hr>	
			<a href="Booking_Admin.php" class="button1 u-full-width">kunde bookinger</a>		
			<a href="../Booking-system-Casper/Booking-Settings-Overview.php" class="button1 u-full-width">åben og luk tider for dage</a>		
		</div>
	</div>
	<div class="four columns">
		<div class=" blackbar full-height">	
			<h2 class="u-full-width logintext">Billede arkiver<h2><hr>	
				<a href="../Kunde-billeder/Nytabel.php" class="button1 u-full-width">Ny kunde</a>
				<a href="../Kunde-billeder/FindTabel.php" class="button1 u-full-width">Find kunde specifik arkiv</a>
				<a href="../Kunde-billeder/Kunde-Liste.php" class="button1 u-full-width">Liste over alle kunde arkiver</a>		
		</div>
	</div>
</div>
</body>

</html>