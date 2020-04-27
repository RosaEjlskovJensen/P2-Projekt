<!doctype html>
<?php
session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
	{
		header("Location: Loginside.php");
		
	}
		
?>
<?php
//database connection
require_once '../Connection.php';
$query = "SELECT * FROM bookings ORDER BY date DESC, timeslot";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
	
}
?>
<html>
<head>
<meta charset="utf-8">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<link rel="stylesheet" type="text/css" href="../main.css">
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
		<th><center>Dato</th>
		<th><center>Tid</th>
		<th><center>Navn</th>
		<th><center>Email</th>
		<th><center>Tlf</th>
		<th><center>Adresse</th>
		<th><center>Postnummer</th>
		<th><center>Kommentar</th>
		<th><center>Foto type</th>
		<th><center>Personer</th>
		<th><center>Kæledyr</th>
		<th><center>Slet</th>
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){
	if($row['date']>= date("Y-m-d")){ ?>
	<tr class="tablegreen">
		<td><?php echo $row['date']?></td>
		<td><?php echo $row['timeslot']?></td>
		<td><?php echo $row['name']?></td>
		<td><a href="mailto:<?php echo $row['email']?>" class="btn3 btn-primary"><?php echo $row['email']?></a></td>
		<td><?php echo $row['phone']?></td>
		<td><?php echo $row['adress']?></td>
		<td><?php echo $row['postnummer']?></td>
		<td><?php echo $row['kommentar']?></td>
		<td><?php echo $row['fototype']?></td>
		<td><?php echo $row['peoplecount']?></td>
		<td><?php echo $row['pet']?></td>
		<td class="displayflex">
			<form action='../Booking-system-Casper/delete_booking.php' onclick="return confirm('Er du sikker på at slette denne tid? når den er slettet kan den ikke genfindes')" method='post' class="displayflex" >
			<input type='submit' value='SLET' class="btn3 btn-danger" >
			<input type='hidden' name='deleted' value='<?php echo $row['email']?>'>
			</form>
		</td>
			
	</tr>
	
	<?php } else { ?>
	<tr class="tablered">
		<td><?php echo $row['date']?></td>
		<td><?php echo $row['timeslot']?></td>
		<td><?php echo $row['name']?></td>
		<td><a href="mailto:<?php echo $row['email']?>" class="btn3 btn-primary"><?php echo $row['email']?></a></td>
		<td><?php echo $row['phone']?></td>
		<td><?php echo $row['adress']?></td>
		<td><?php echo $row['postnummer']?></td>
		<td><?php echo $row['kommentar']?></td>
		<td><?php echo $row['fototype']?></td>
		<td><?php echo $row['peoplecount']?></td>
		<td><?php echo $row['pet']?></td>
		<td class="displayflex">
			<form action='../Booking-system-Casper/delete_booking.php' onclick="return confirm('Er du sikker på at slette denne tid? når den er slettet kan den ikke genfindes')" method='post' class="displayflex" >
			<input type='submit' class="btn3 btn-danger" value='SLET' >
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
<a href="../Admin side/Admin.php" class="btn3 btn-warning">TILBAGE</a>

</body>
</html>
<?php 
mysqli_close($connection);
?>

