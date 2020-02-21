<!DOCTYPE HTML>
<?php  
error_reporting(0);
require_once 'Connection.php';
$email = $_POST['email'];
if(isset($_POST['email']) && !empty($_POST['email'])) {
/* ---------------------Tilmeld------------------------*/
    if($_POST['type'] == '1') {
		
	$query = "INSERT INTO newsletter VALUES ('','$email')";
	$results = mysqli_query($connection,$query);
    echo "Din email $email er nu tilmeldt vores nyhedsbrev.";
    }
/* ---------------------------------------------*/
	
/* --------------------Frameld-------------------------*/
	elseif($_POST['type'] == '0') {

    $query = "DELETE FROM newsletter WHERE email=" ."'" .$email. "'" or die(mysql_error);
	$results = mysqli_query($connection,$query);
	echo "Din email $email er nu frameldt vores nyhedsbrev.";
}
/* ---------------------------------------------*/
}
  mysqli_close($connection);
    
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
<title> </title>
</head>

<body> 
	<form method="post" action="nyhedsbrev.php">
		Email:<input type="text" name="email"/>
	<br/>
		Tilmed: <input type="radio" name="type" value="1"/><br/>
		Frameld:<input type="radio" name="type" value="0"/><br/>
	<br/>  
		<input type="submit" value="Fortsæt"/> 
	</form>
<a href="index.php" class="button">Tilbage</a>
</body>

</html>











