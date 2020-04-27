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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../main.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<!-- Dette link er ikonet der er i ens browser tab --> 
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Bookingsindstillinger</title>
</head>

<body>
<?php 
echo "<center><h1>Bookingindstillinger</h1></center>";

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
		<th><center>Varighed (min)</center></th>
		<th><center>Start (00:00)</center></th>
		<th><center>Slut (00:00)</center></th>
		<th><center>Pause (min)</center></th>
		<th><center>Pris</center></th>
		<th><center>Lokation</center></th>
		<th><center>Handling</center></th>
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
		<td><center><?php echo $row['city'] ?></center></td>
		
			
				<td class="displayflex">
			<center><form action='delete_booking_settings.php' onclick="return confirm('Er du sikker på at slette disse indstillinger? når de er slettet skal de genlaves')" method='post' class="displayflex" >
			<input type='submit' class="btn3 btn-danger" value='SLET' class="one-half column" >
			<input type='hidden' name='deleted' value='<?php echo $row['date']?>'>
			</form>
			<form action="update_Booking_Settings.php" method='post' class="displayflex">
			<input type='submit' value='OPDATER' class="btn3 btn-success" class="one-half column" >
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
		<td><center><?php echo $row['city'] ?></center></td>

		<td class="displayflex">
		<center>
			<form action='delete_booking_settings.php' onclick="return confirm('Er du sikker på at slette disse indstillinger? når de er slettet skal de genlaves')" method='post' class="displayflex" >
			<input type='submit' value='SLET' class="u-full-width btn3 btn-danger" >
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
 <th><center>Varighed (min)</center></th>
 <th><center>Start (00:00)</center></th>
 <th><center>Slut (00:00)</center></th>
 <th><center>Pause (min)</center></th>
 <th><center>Pris</center></th>
 <th><center>Lokation</center></th>
 </tr>
<tr>
  <td><input type="date" name="date" id="date" class="u-full-width"> </td>
  <td><input type="number" name="duration" id="duration" min="1" max="60" required class="u-full-width"> 
  <td><input type="time" name="start" id="start" class="u-full-width" required></td>
 <td> <input type="time" name="end" id="end" class="u-full-width" required> </td>
 <td> <input type="number" name="cleanup" id="cleanup" min="0" max="60" required class="u-full-width"> </td>
 <td> <input type="number" name="price" id="price" min="0" max="9000" required class="u-full-width" > </td>
 <td> <input type="text" name="city" id="city"  class="u-full-width" > </td>
 </tr>
</table>
</div>
<div class="offset-by-three columns six columns">
	 
		<input class="btn3 btn-success u-pull-right" type="submit" id=search3 name="create" value="OPRET">
		<a href="../Admin side/Admin.php" class="btn3 btn-warning u-pull-left">TILBAGE</a>
	
 </div>
	</form>
	

</body>
</html>
<?php 
mysqli_close($connection);
?>

