<!doctype html>
<?php 
	require_once '../Connection.php';
	
	
	$id = $_GET['id'];

	
	$query = "SELECT * FROM portfolieinfo WHERE id=" ."'" .$id. "'";
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

<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<!-- Dette link er ikonet der er i ens browser tab -->
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Update_Blog</title>
</head>

<body>
	<div class="row">
		<div class="six columns">
			<form name="update" class="" autocomplete="off" method="post" action="Blog_Updater.php?id=<?php echo $row['id']; ?>">
			  <textarea name="content"><?php echo($row['Text']) ?> </textarea>
			
			  <input  type="submit" class="u-full-width" name="update" value="Updater">
			</form>
		</div>
	</div>
</body>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script><script>
	CKEDITOR.replace('content');
	</script>
</html>
<?php mysqli_close($connection); ?>