<!doctype html>
<?php
//database connection
require_once '../Connection.php';
$query = "SELECT * FROM bookingsettings ORDER BY date";
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
<title>Liste over datoers indstillinger</title>
</head>

<body>
<?php 
echo "<h1>Liste over datoers indstillinger</h1>";

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
		<th><center>Dato</center></th>
		<th><center>længde af booking</center></th>
		<th><center>Start dagen</center></th>
		<th><center>Fyraften</center></th>
		<th><center>Længde af pause</center></th>
		<th><center>Action</center></th>
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){
	if($row['date']>= date("Y-m-d")){ ?>
	<tr class="tablegreen">
		<td><center><?php echo date('d/m/yy', strtotime($row['date']))?></center></td>
		<td><center><?php echo $row['duration']. " min"?></center></td>
		<td><center><?php echo $row['start']?></center></td>
		<td><center><?php echo $row['end']?></center></td>
		<td><center><?php echo $row['cleanup']. " min"?></center></td>
			
				<td class="displayflex">
			<form action='delete_booking_settings.php' onclick="return confirm('Er du sikker på at slette disse indstillinger? når de er slettet skal de genlaves')" method='post' class="displayflex" >
			<input type='submit' value='delete' >
			<input type='hidden' name='deleted' value='<?php echo $row['date']?>'>
			</form>
			<form action="update_Booking_Settings.php" method='post' class="displayflex">
			<input type='submit' value='update' >
			<input type='hidden' name='updated' value='<?php echo $row['date']?>'>
			</form>
		</td>
			
	</tr>
	
	<?php } else { ?>
	<tr class="tablered">
		<td><center><?php echo date('d/m/yy', strtotime($row['date']))?></center></td>
		<td><center><?php echo $row['duration']. " min"?></center></td>
		<td><center><?php echo $row['start']?></center></td>
		<td><center><?php echo $row['end']?></center></td>
		<td><center><?php echo $row['cleanup']. " min"?></center></td>
		<td class="displayflex">
			<form action='delete_booking_settings.php' onclick="return confirm('Er du sikker på at slette disse indstillinger? når de er slettet skal de genlaves')" method='post' class="displayflex" >
			<input type='submit' value='delete' >
			<input type='hidden' name='deleted' value='<?php echo $row['date']?>'>
			</form>
			
		</td>	
		
	</tr> 

	<?php } ?>
	<?php } ?>
	
	
</table>

<form name="create" id="create" autocomplete="on" method="post" action="Booking_Settings_Creator.php">
  
  <input type="date" name="date" id="date"> 
  <input type="number" name="duration" id="duration" min="1" max="60"> 
  <input type="time" name="start" id="start">
  <input type="time" name="end" id="end"> 
  <input type="number" name="cleanup" id="cleanup" min="0" max="60" > 
 

 <div class="middle"><input  type="submit" id=search3 name="create" value="Lav nye indstillinger for en dato">
 </div>
	</form>



<br>
<a href="../Admin side/Admin.php" class="button">Hjem</a>

</body>
</html>
<?php 
mysqli_close($connection);
?>

