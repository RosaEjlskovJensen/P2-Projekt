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
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../main.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<!-- Dette link er ikonet der er i ens browser tab --> 
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Liste over datoers indstillinger</title>
</head>

<body>
<style>
		
		.tablegreen{
			background: lightgreen;
			margin: auto;
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
	<h4><center>Søg efter kundearkiv</center></h4>
<div class="offset-by-three columns six columns">
<form action="Findtabelaction.php" method="post">
<input class=" offset-by-two columns six columns soegefelt" type="text" name="pass" id="pass" placeholder="Kundens kode">

<input class="two columns btn3 btn-success" value="SØG" type="submit" name="submit" id="submit">	
	
</form>


</div><br>
<br>
<br>
<br>

<center>
<h4>Liste over kundearkiver</h4>
<table class="tabletotal">
	<tr>
		<th><center>Navn Efternavn</th><th><center>Email</th><th><center>Kode</th><th><center>Oprettelses dato</th><th><center>Slet</th><th><center>Gå til arkiv</th><th><center>Se bestilling</th></center>
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){ ?>
	
	<tr class="tablegreen">
	<?php $email = $row['email']; ?>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['pass']?></td>
		<td><?php echo $row['date']?></td>
		<td>
				<?php echo "<form action='delete_archive.php' method='post'>";
					echo "<input type='submit' value='SLET' class='btn3 paddinttop1 btn-danger'>";
					echo "<input type='hidden' name='deleted' value='$email'>";
					echo "</form>"; ?>
		</td>
					
		<td>
						<form action='Tableaction-FromList.php' method='post'>
							<input type='submit' class="btn3 btn-success paddinttop1" value='ARKIV'>
							<input type='hidden' name='email' value='<?php echo $row['email'] ?>'>
		</td>
		
		
		<td>
							
						<a class="btn3 btn-primary" href="Se-Kunde-Bestilling.php?kunde=<?php echo $email ?>">Kunde Bestilling</a>
		</td>
						</form>
					
					
	</tr>
	
	
	
	<?php } ?>
	
</table>
	


</center>

<a href="../Admin side/Admin.php" class="btn3 btn-warning one-third column offset-by-one-third column ">TILBAGE</a>
</body>
</html>
<?php 
mysqli_close($connection);
?>