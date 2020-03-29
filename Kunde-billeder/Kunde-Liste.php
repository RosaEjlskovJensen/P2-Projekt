<!doctype html>
<?php
require_once '../Connection.php';
$query = "SELECT * FROM customer_archive";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Kunde Liste</title>
</head>

<body>
<?php 
echo "<h1>Liste over Kunder</h1>";
//setup variables
$costumercount = 0;

echo "<form action='send.php' method='get'>";
while($row = mysqli_fetch_assoc($results))
{
	$costumercount ++;
echo "$costumercount. ".
	'navn: '.$row['name']." ".
	'email: '. $row['email'].
	' dato: '. $row['date']. "<br>";
echo "<form action='delete_archive.php' method='post'>";
echo "<input type='submit' value='Slet arkiv'>";
	$email = $row['email'];
echo "<input type='hidden' name='deleted' value='$email'>";
echo "</form>";
};
	?>



<a href="Kunde-Billede-Admin.php" class="button">Hjem</a>

</body>
</html>
<?php 
mysqli_close($connection);
?>