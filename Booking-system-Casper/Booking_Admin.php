<!doctype html>
<?php
//database connection
require_once '../Connection.php';
$query = "SELECT * FROM bookings";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
	
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
<title>Rediger Blogs</title>
</head>

<body>
<?php 
echo "<h1>liste over bookede tider</h1>";

	?> 
	<style>
		table{
			border-spacing: 10px;
			border-collapse: inherit;
			background: grey;
			 }
		.displayflex
		{
			display: flex;
		}
		
	</style>
 <table class="table">
	<tr>
		<th>Dato</th><th>Tid</th><th>Navn</th><th>Email</th><th>Tlf:</th><th>Adresse</th><th>Postnummer</th>
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){
	?>
	<tr class="table">
		<td><?php echo $row['date']?></td>
		<td><?php echo $row['timeslot']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['phone']?></td>
		<td><?php echo $row['adress']?></td>
		<td><?php echo $row['postnummer']?></td>
		<td class="displayflex">
		
			<form action='delete_booking.php' method='post' >
			<input type='submit' value='delete' >
			<input type='hidden' name='deleted' value='<?php echo $row['email']?>'>
			</form>
			
			
		</td>		
	</tr>
	
	<?php } ?>
	
</table>
<!-- copy paste delen -->

<br>
<a href="../Admin side/Admin.php" class="button">Hjem</a>
</body>
</html>
<?php 
mysqli_close($connection);
?>

