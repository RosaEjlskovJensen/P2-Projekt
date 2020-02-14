<!doctype html>
<?php 
require_once 'Connection.php';
$query = "SELECT * FROM users";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
}
?>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta charset="utf-8">
<title>Editcontacts</title>
</head>

<body>

<table class="marginzeroauto">
	<tr>
		<th>Firstname</th><th>Lastname</th><th>Description</th><th>Email</th><th>Function</th>
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){
	?>
	<tr class="editcontactgreybox">
		<td><?php echo $row['firstname']?></td>
		<td><?php echo $row['lastname']?></td>
		<td><?php echo $row['description']?></td>
		<td><?php echo $row['email']?></td>
		<td class="displayflex">
		
			<form action='delete_contact.php' method='post' >
			<input type='submit' value='delete' >
			<input type='hidden' name='deleted' value='<?php echo $row['users_id']?>'>
			</form>
			
			<form action="update_contact.php?item=<?php echo $row['users_id']; ?>" method='post'>
			<input type='submit' value='update' >
			<input type='hidden' name='updated' value='<?php echo $row['users_id']?>'>
			</form>
			
		</td>		
	</tr>
	
	<?php } ?>
	
</table>

<h3 class="Knapper3">
	<a href="index.php"> Home</a>		
	</h3>

</body>
</html>

<?php 
mysqli_close($connection);
?>