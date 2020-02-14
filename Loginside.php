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
	if ($_POST['username'] == $username && $_POST['password'] == $password)
		$_SESSION['loggedin'] = true;
		header("Location: Admin.php");	
	}
?>

<html>
<head>
<meta charset="utf-8">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="stylesheet.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="normalize.css">
<!-- Dette link er ikonet der er i ens browser tab -->
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Untitled Document</title>
</head>

<body>
   <!-- Formen starter her for login felter -->
   <!-- formen poster form dataet videre til admin.php -->
	<form method="post" action="Loginside.php">
	<!-- Her er input feltet til bruger navn -->
	Brugernavn: <input type="text" name="username">

	<!-- inputfelt for kodeord -->
	Kode: <input type="password" name="password"> 
	<input type="submit" value="Login">
	</form>
		   

</body>
</html>