<!doctype html>
<?php 

error_reporting(0);
//database connection
session_start();
require_once '../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}

$kunde = $_SESSION['kunde'];


echo "<br>Tusind tak for din bestilling du høre fra os"
?><br>

<a href="../index.php" class="btn3 btn-success">TILBAGE</a>
<html>
<head>
<head>  
  <title>Portfolie baby</title>  
     <!-- ajax/jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="burgermenujs.js"></script>
  <!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
<!-- Linker til Skeleton -->
<!--<link rel="stylesheet" href="../stylesheet.css">
 <!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
       <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
 </head>  
</head>

<body>

</body>
</html>
<?php
	mysqli_close($connection);
?>