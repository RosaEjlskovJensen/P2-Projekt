
<!DOCTYPE html>  

<?php
session_start();
$item = $_GET['item'];
$_SESSION["item"]=$item;
$kategori = array("fotografering", "billedeophæng", "kundersblog", "produkter", "bedrebilleder", "tot");
	require_once '../../Connection.php';
	$query = "SELECT * FROM $kategori[$item]";
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
			<form name="Blog_Form" class="u-full-width" autocomplete="on" method="post" action="Process_Input.php?item=<?php echo $item ?>">
				<div>
					<input type="file" name="Medie" class="u-full-width" placeholder="HER SKAL MAN KUNNE INDSÆTTE BILLEDE" > 
				</div>
				<div>
				
				
					
		
	 <div class="container">
<form method="post" action=>
	<textarea name="content"></textarea>
	<input type="submit" value="Send">
		</div>
			 </form>
		 </div>
	 </div>
</div>
<script src="../../ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('content');
	</script>
<a href="Admin.php" class="button">Tilbage</a>		
</body>

</html>
<?php 
mysqli_close($connection);
?>