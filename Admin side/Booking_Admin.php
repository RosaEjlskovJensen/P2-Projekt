<!doctype html>
<?php
//database connection
require_once '../Connection.php';
$query = "SELECT * FROM bookings ORDER BY date, timeslot";
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
		
		.tablegreen{
			background: lightgreen;
			margin: auto;
			 }
		.tablered{
			background: hsla(359,100%,80%,1.00);
			 }
		.tabletotal{
			
			border-collapse: collapse;
			border-spacing: 15px;
			border-style: dashed;
			
			 }
		
		td{
			padding: 5px;
		}
		.displayflex
		{
			display: inline;
			margin: -5px, auto;
			
		}
		
	</style>
	
 <table class="tabletotal">
	<tr>
		<th>Dato</th><th>Tid</th><th>Navn</th><th>Email</th><th>Tlf:</th><th>Adresse</th><th>Postnummer</th><th>Action</th>
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){
	if($row['date']>= date("Y-m-d")){ ?>
	<tr class="tablegreen">
		<td><?php echo $row['date']?></td>
		<td><?php echo $row['timeslot']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['phone']?></td>
		<td><?php echo $row['adress']?></td>
		<td><?php echo $row['postnummer']?></td>
		<td class="displayflex">
			<form action='delete_booking.php' onclick="return confirm('Er du sikker på at slette denne tid? når den er slettet kan den ikke genfindes')" method='post' class="displayflex" >
			<input type='submit' value='delete' >
			<input type='hidden' name='deleted' value='<?php echo $row['email']?>'>
			</form>
		</td>
			
	</tr>
	
	<?php } else { ?>
	<tr class="tablered">
		<td><?php echo $row['date']?></td>
		<td><?php echo $row['timeslot']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['phone']?></td>
		<td><?php echo $row['adress']?></td>
		<td><?php echo $row['postnummer']?></td>
		<td class="displayflex">
			<form action='delete_booking.php' onclick="return confirm('Er du sikker på at slette denne tid? når den er slettet kan den ikke genfindes')" method='post' class="displayflex" >
			<input type='submit' value='delete' >
			<input type='hidden' name='deleted' value='<?php echo $row['email']?>'>
			</form>
		</td>	
		
	</tr> 

	<?php } ?>
	<?php } ?>
	
	
</table>

<?php
if(isset($_POST["submit"]))
{ $hest = $_POST["sendemails"];
	if(!empty($_POST["sendemails"]))
	{
		echo "<a href=mailto:";
		foreach ($hest as $sendemails)
		{
			echo "$sendemails". ",";
		} 
	echo">send</a>";} 
	else
	{
		echo "Ingen mails blev valgt";
	}
}
	
?>


<br>
<a href="../Admin side/Admin.php" class="button">Hjem</a>

</body>
</html>
<?php 
mysqli_close($connection);
?>

