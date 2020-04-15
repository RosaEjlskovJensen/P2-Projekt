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
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div class="row">
		<div class="six columns">	
			
				<h2> <?php echo $kategori[$item] ?><h2>
				<a href="Write_blog.php?item=<?php echo $item ?>" class="button-primary six columns">SKRIV NY BLOG</a><br>
				<a href="Blog_Overview.php?item=<?php echo $item ?>" class="button-primary six columns">SE BLOG LISTE</a><br>
				
                <a href="Blog_adminside.php" class="button six columns">TILBAGE</a>
			
		</div>
	</div>
</body>
</html>
<?php mysqli_close($connection); ?>