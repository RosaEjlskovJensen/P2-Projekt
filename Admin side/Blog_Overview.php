<!doctype html>
<?php 
require_once '../Connection.php';
$query = "SELECT * FROM blogs";
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

<table class="">
	<tr>
		<th>Nummer</th>
		<th>Text</th>
		<th>...</th>
		<th>Medie</th>
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){
	?>
	<tr class="">
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['Text']?></td>
			<td></td>
			
			<td><?php echo $row['Medie']?></td>
			
		<td class="">
			<form action='delete_blog.php' method='post' >
				<input type='submit' value='delete' onclick="return confirm('Are you sure you want to delete this item?');" >
				<input type='hidden' name='deleted' value='<?php echo $row['id']?>'>
			</form>
	
			<form action="Update_Blog.php?item=<?php echo $row['id']; ?>" method='post'>
				<input type='submit' value='update' >
				<input type='hidden' name='updated' value='<?php echo $row['id']?>'>
			</form>	
		</td>		
	</tr>
	<?php } ?>	
</table>
<a href="Admin.php" class="button">Tilbage</a>		
	

</body>

</html>
<?php 
mysqli_close($connection);
?>