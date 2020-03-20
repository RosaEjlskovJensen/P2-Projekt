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

<body>
	<div class="row">
		<div class="eight columns">	
			<div class="">
				<h2> Du er logget ind <h2>
				<a href="Nytabel.php" class="button">Ny kunde</a>
				<a href="FindTabel.php" class="button">Eksisterende kunde</a>
				<a href="Mailing_List.php" class="button">Kunde liste (Virker ikke endnu)</a>
				<a href="../Admin side/Admin.php" class="button-primary">Tilbage</a>
			</div>
		</div>
	</div>
</body>

</html>