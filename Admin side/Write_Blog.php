<!doctype html>
<?php 
	require_once 'Connection_blog.php';
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
	<div class="row">
		<div class="six columns offset-by-three column">
			<form name="Blog_Form" class="u-full-width" autocomplete="on" method="post" action="process_input.php">
				<div>
					<input type="text" name="Medie" class="u-full-width" placeholder="HER SKAL MAN KUNNE INDSÆTTE BILLEDE" > 
				</div>
				<div>
					<textarea name="Text" placeholder="Skriv blog texten her" class="u-full-width " ></textarea> 
				</div>
				<div class="">
					<input  type="submit" class="button-primary u-full-width" value="Post">
				</div>
			 </form>
		 </div>
	 </div>
<a href="Admin.php" class="button">Tilbage</a>		
</body>

</html>
<?php 
mysqli_close($connection);
?>