<!doctype html>
<!-- Denne kalder på connection dokumentet, og selecter hvilken tabel den skal acess -->
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
<link rel="icon" type="image/png" href="../INDSET IKON HER">
<title>Blogs</title>
</head>

<body>
	<h1>Blogs</h1>
	<!-- Så længe der er data i tabellen skal det gemmes under $row -->
		<?php while($row = mysqli_fetch_assoc($results)) {?>
			<div class="row">
				<div class="" >
				<!-- dataen gemt under $row bliver her vist -->
					<?php echo $row['Medie'];?>
					<?php echo $row['Text'];?>
				</div>
			</div>
		<?php }?>
<a href="../index.php" class="button">Tilbage</a>
</body>

</html>