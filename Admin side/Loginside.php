<!doctype html>
<?php
// Her starter login session, denne køre indtil der er logget ind //
	session_start();
// Her defineres hvad navn og kodeord er //
	$username = "admin";
	$password = "admin";
// Hvis login sessionen, er den samme som sessions resultat altså at de begge er true så skal der logges ind //
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
	{// Her giver vi besked på at hvis det lykkes skal vi head til sucess.php //
		header("Location: Admin.php");
	}
// her tjekkes der om der ligger noget data i formen. //
	if (isset($_POST['username']) && isset($_POST['password']))
	{// hvis det postede data i formen stemmer overens med det data der er i vores $username og $passwrod Så skal der logges ind //
		if($_POST['username'] == $username && $_POST['password'] == $password){
		$_SESSION['loggedin'] = true;
		header("Location: Admin.php");
		}else{
			echo "<h3>Forkert login</h3>";
		}
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
<title>Amalie Sandgaard | Photography | Login</title>
</head>

<body>
   <!-- Formen starter her for login felter -->
   <!-- formen poster form dataet videre til admin.php -->
   <div class="row">
		<div class="four columns offset-by-four">
			<form method="post" action="Loginside.php" class=" test1"> 
				<center>
				<img class="u-full-width" src="../Billeder/AmalieSandgaardPhotography_LOGO.png" alt="Logo" height="200">
				</center>
				<!-- Her er input feltet til bruger navn -->
				<input type="text" name="username" class="ten columns offset-by-one" placeholder="Brugernavn" autocomplete="on"><br><br>
				<!-- inputfelt for kodeord -->
				<input type="password" name="password" class="ten columns offset-by-one" placeholder="Kodeord" autocomplete="on"><br><br>
			
				<input type="submit" value="Login" class="button1 u-full-width">
			</form>
		</div>
	</div>
</body>

</html>