<!doctype html>
<?php 
	require_once 'Connection_blog.php';
	$id = $_GET['item'];
	$query = "SELECT * FROM blogs WHERE id=" ."'" .$id. "'";
	$results = mysqli_query($connection,$query);
	if(!$results){
	die("could not query the database" .mysqli_error());
	};
	$row = mysqli_fetch_assoc($results);
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
<title>Update_Blog</title>
</head>

<body>
	<div class="row">
		<div class="six columns">
			<form name="update" class="" autocomplete="off" method="post" action="Blog_Updater.php?item=<?php echo $id?>">
			  <input type="text" name='Medie' class="u-full-width" value="<?php echo($row['Medie']) ?>"> 
			  <textarea name="Text" class="u-full-width" ><?php echo($row['Text']) ?></textarea> 
			  <input  type="submit" class="u-full-width" name="update" value="Updater">
			</form>
		</div>
	</div>
</body>

</html>
<?php mysqli_close($connection); ?>