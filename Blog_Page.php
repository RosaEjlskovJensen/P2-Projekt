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
<link rel="stylesheet" href="stylesheet.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="normalize.css">
<!-- Dette link er ikonet der er i ens browser tab -->
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Untitled Document</title>
</head>

<body>
<h1>Her kan blogs ses</h1>
Work in progress (casper)
       <?php while($row = mysqli_fetch_assoc($results)) {?>
		<div class="row">
       	<div class="" >
        <?php echo $row['blog_post'];?>
		</div>
	    </div>
		 										  <?php }?>
	<a href="index.php" class="button">Tilbage</a>
</body>
</html>