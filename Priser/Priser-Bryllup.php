<?php
 require_once '../Connection.php';
$query = "SELECT * FROM `prices-bryllup` ASE";
$results = mysqli_query($connection,$query);
if(!$results){
   die("could not query the database" .mysqli_error());
}
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography | Priser</title>
	<!-- ajax/jquery -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- -->
  <script src="mySlides.js"></script>
	<!-- Dette link er ikonet der er i ens browser tab -->
  	<link rel="icon" type="image/png" href="../Billeder/asp.png">
  	<!-- Linker til Skeleton -->
  	<!-- Linker til Fontawsome -->
  	<script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>

<!-- Navigation bar -->
  <?php include_once('../header.php') ?>
<br>
<br>
<br>
  <!-- Heading -->
	<div class="container u-full-width">
		<h4><center>Bryllupspakker</center>	</h4>
    	<center><p>Info eneklte prints priser og størelser kan findes <a href="Priser.php" class="text1">her</a></p>
	</div>
	<?php include_once('Pakke_opstiller.php')?>

 <!-- Top part of the footer-->
 <?php include_once('../footer.php') ?><br>
<br>

</body>
</html>