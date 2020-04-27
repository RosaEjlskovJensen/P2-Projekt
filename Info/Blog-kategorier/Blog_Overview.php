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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography</title>
	<!-- ajax/jquery -->
 
	<!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Fontawsome -->
  
  <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">

<title>test</title>
</head>

<body>

<table class="">
	<tr>
		<th>ID</th>
		<th>Blog</th>
		<th>Handling</th>
		
		
	</tr>
	<?php 
	while($row = mysqli_fetch_assoc($results)){
	?>
	<tr class="">
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['Text']?></td>
			<td></td>
			
			
		<td class="twelve columns">
			<form action='delete_blog.php?item=<?php echo $item; ?>&id=<?php echo $row['id']; ?>"' method='post' >
				<input type='submit' class="btn3 btn-danger u-full-width" value='Slet' onclick="return confirm('Er du sikker på at du vil slette dette opslag?');" >
				<input type='hidden' name='deleted' value='<?php echo $row['id']?>'>
			</form>

			<form action="Update_Blog.php?item=<?php echo $item; ?>&id=<?php echo $row['id']; ?>" method='post'>
				<input type='submit' value='Opdater' class="btn3 btn-success u-full-width" >
				<input type='hidden' name='updated' value='<?php echo $row['id']?>'>
			</form>	
		</td>		
	</tr>
	<?php } ?>	
</table>
<a href="EditKategoritemplate.php?item=<?php echo $item ?>" class="btn3 btn-warning">Tilbage</a>		
	

</body>

</html>
<?php 
mysqli_close($connection);
?>