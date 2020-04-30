<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Amalie Sandgaard | Photography | Digital Print</title>
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
  <?php include_once('../header.php') ?>
    
    <br>
    <br>
    <br>
<center> <h5>skriv din kode her for at se dine billeder</h5>
<form action="Kunde-Billede-Overview.php" method="post">
<input type="password" name="pass" id="pass" placeholder="Skriv din 8cif kode her" minlength="8" maxlength="8" required>
<input type="submit" name="submit" id="submit" value="Se billeder">	
	
</form>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


   
     <!-- Top part of the footer-->
  <?php include_once('../footer.php') ?>
</body>
</html>
