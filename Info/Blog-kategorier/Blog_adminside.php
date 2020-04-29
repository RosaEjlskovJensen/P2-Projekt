<!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="../../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">

<title>test</title>
</head>

    <body>
        
    
		<div class="six columns">	
			
				<h2> Vælg Kategori <h2>
				
				<a href="Main-Blog-Side/EditKategoritemplate_Main.php" class="btn3 btn-success u-full-width">FORSIDE</a><br>
				<a href="EditKategoritemplate.php?item=0" class="btn3 btn-primary u-full-width">FOTOGRAFERING</a><br>
				<a href="EditKategoritemplate.php?item=1" class="btn3 btn-primary u-full-width">BILLEDE OPHÆNG</a><br>
				<a href="EditKategoritemplate.php?item=2" class="btn3 btn-primary u-full-width">KUNDERS BLOGINDLÆG</a><br>
                <a href="EditKategoritemplate.php?item=3" class="btn3 btn-primary u-full-width">PRODUKTER</a><br>
                <a href="EditKategoritemplate.php?item=4" class="btn3 btn-primary u-full-width">SÅDAN TAGER DU BEDRE BILLEDER</a><br>
                <a href="EditKategoritemplate.php?item=5" class="btn3 btn-primary u-full-width">TIPS OG TRICKS</a><br>
                <a href="../../Admin side/Admin.php" class="btn3 btn-warning u-full-width">TILBAGE</a>
					
			
		</div>
	
  </body>
    
</html>