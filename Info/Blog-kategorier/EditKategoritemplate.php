<!doctype html>
<?php
$kategori = array("FOTOGRAFERING", "BILLEDE OPHÆNG", "KUNDERS BLOGINDLÆG", "PRODUKTER", "SÅDAN TAGER DU BEDRE BILLEDER", "TIPS OG TRICKS");
$item = $_GET['item'];


//database connection
require_once '../../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
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
<div class="row">
		<div class="six columns">	
			
				<h2> <?php echo $kategori[$item] ?><h2>
				<a href="Write_blog.php?item=<?php echo $item ?>" class="btn3 btn-primary u-full-width">SKRIV NY BLOG</a><br>
				<a href="Blog_Overview.php?item=<?php echo $item ?>" class="btn3 btn-primary u-full-width">ADMINISTRER TIDLIGERE OPSLAG</a><br>
				
                <a href="Blog_adminside.php" class="btn3 btn-warning u-full-width">TILBAGE</a>
			
		</div>
	</div>
</body>
</html>
<?php mysqli_close($connection); ?>