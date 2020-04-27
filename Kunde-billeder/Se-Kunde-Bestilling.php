<!doctype html>
<?php 
$kunde = $_GET['kunde'];
require_once '../Connection.php';
$query = "SELECT * FROM customer_archive WHERE email='$kunde'";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	while($row = mysqli_fetch_assoc($results)){ 
	echo $row['bestilling']; 
	}?>
	<a href="Kunde-Liste.php">Tilbage</a>
</body>
</html>
<?php
	mysqli_close($connection);
?>