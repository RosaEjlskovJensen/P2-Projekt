<!doctype html>
<?php
//database connection
require_once '../Connection.php';
$query = "SELECT * FROM bookingsettings ORDER BY date DESC";
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
echo "<center><h1>Liste over datoers indstillinger</h1></center>";

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
	<div class="row offset-by-three columns">
 <table class="tabletotal six columns">
	<tr>
		<th><center>Dato</center></th>
		<th><center>længde af booking</center></th>
		<th><center>Start dagen</center></th>
		<th><center>Fyraften</center></th>
		<th><center>Længde af pause</center></th>
		<th><center>Pris</center></th>
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
		<td><center><?php echo $row['price']. ",-"?></center></td>
		
			
				<td class="displayflex">
			<center><form action='delete_booking_settings.php' onclick="return confirm('Er du sikker på at slette disse indstillinger? når de er slettet skal de genlaves')" method='post' class="displayflex" >
			<input type='submit' value='delete' class="one-half column" >
			<input type='hidden' name='deleted' value='<?php echo $row['date']?>'>
			</form>
			<form action="update_Booking_Settings.php" method='post' class="displayflex">
			<input type='submit' value='update' class="one-half column" >
			<input type='hidden' name='updated' value='<?php echo $row['date']?>'>
			</center>
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
		<td><center><?php echo $row['price']. ",-"?></center></td>
		<td class="displayflex">
		<center>
			<form action='delete_booking_settings.php' onclick="return confirm('Er du sikker på at slette disse indstillinger? når de er slettet skal de genlaves')" method='post' class="displayflex" >
			<input type='submit' value='delete' class="u-full-width" >
			<input type='hidden' name='deleted' value='<?php echo $row['date']?>'>
			</center>
			</form>
			
		</td>	
		
	</tr> 

	<?php } ?>
	<?php } ?>
	
	
</table>
</div>


<div class="row offset-by-three columns">
<table class="six columns">
<form name="create" id="create" autocomplete="on" method="post" action="Booking_Settings_Creator.php">
 <tr> 
 <th><center>Dato</center></th>
 <th><center>Længde af tid</center></th>
 <th><center>start</center></th>
 <th><center>slut</center></th>
 <th><center>pause</center></th>
 <th><center>pris</center></th>
 </tr>
<tr>
  <td><input type="date" name="date" id="date" class="u-full-width"> </td>
  <td><input type="number" name="duration" id="duration" min="1" max="60" class="u-full-width"> 
  <td><input type="time" name="start" id="start" class="u-full-width"></td>
 <td> <input type="time" name="end" id="end" class="u-full-width"> </td>
 <td> <input type="number" name="cleanup" id="cleanup" min="0" max="60" class="u-full-width"> </td>
 <td> <input type="number" name="price" id="price" min="0" max="9000" class="u-full-width" > </td>
 </tr>
</table>
</div>
<div class="row offset-by-three columns">
 <div class="u-pull-left three columns"><input  type="submit" id=search3 name="create" value="Lav nye indstillinger for en dato">
 </div>
 </div>
	</form>
	



<br>
<center><a href="../Admin side/Admin.php" class="button">Hjem</a><center>

</body>
</html>
<?php 
mysqli_close($connection);
?>

