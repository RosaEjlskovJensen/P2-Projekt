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
<table class="tabletotal">
	<tr>
		<th>Navn</th><th>Email</th><th>Oprettelses dato</th><th>Slet</th><th>Gå til arkiv</th>
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){ ?>
	
	<tr class="tablegreen">
	<?php $email = $row['email']; ?>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['email']?></a></td>
		<td><?php echo $row['date']?></td>
		<td><?php echo "<form action='delete_archive.php' method='post'>";
					echo "<input type='submit' value='Slet arkiv'>";
					echo "<input type='hidden' name='deleted' value='$email'>";
					echo "</form>"; ?></td>
					
					<td><form action='Tableaction-FromList.php' method='post'>
					<input type='submit' value='Gå til arkiv'>
					<input type='hidden' name='email' value='<?php echo $row['email'] ?>'>
				
					</form></td>
					
	</tr>
	
	
	
	<?php } ?>
	
</table>


<a href="../Admin side/Admin.php" class="button">Tilbage</a>

</body>
</html>
<?php 
mysqli_close($connection);
?>