<!doctype html>
<?php 
$item = $_GET['item'];
$kategori = array("fotografering", "billedeophæng", "kundersblog", "produkter", "bedrebilleder", "tot");
require_once '../../Connection.php';
$query = "SELECT * FROM $kategori[$item] ORDER BY id desc";
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
		<th>ID</th>
		<th>Blog</th>
		<th>Aktion</th>
		
		
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){
	?>
	<tr class="">
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['Text']?></td>
			<td></td>
			
			
		<td class="">
			<form action='delete_blog.php?item=<?php echo $item; ?>&id=<?php echo $row['id']; ?>"' method='post' >
				<input type='submit' value='delete' onclick="return confirm('Are you sure you want to delete this item?');" >
				<input type='hidden' name='deleted' value='<?php echo $row['id']?>'>
			</form>
	
			<form action="Update_Blog.php?item=<?php echo $item; ?>&id=<?php echo $row['id']; ?>" method='post'>
				<input type='submit' value='update' >
				<input type='hidden' name='updated' value='<?php echo $row['id']?>'>
			</form>	
		</td>		
	</tr>
	<?php } ?>	
</table>
<a href="EditKategoritemplate.php?item=<?php echo $item ?>" class="button">Tilbage</a>		
	

</body>

</html>
<?php 
mysqli_close($connection);
?>