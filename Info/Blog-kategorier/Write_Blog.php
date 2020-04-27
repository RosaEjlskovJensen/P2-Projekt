
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
		<div class="six columns offset-by-three column">
			<form name="Blog_Form" class="u-full-width" autocomplete="on" method="post" action="Process_Input.php?item=<?php echo $item ?>">
				
				<div>
				
				
					
		
	 <div class="container">
<form method="post" action=>
	<textarea name="content"></textarea>
	<a href="../Blog-kategorier/Blog_adminside.php" class="btn3 btn-warning u-pull-left">Tilbage</a>
	<input type="submit" class="btn3 btn-success u-pull-right" value="Send">
		</div>
			 </form>
		 </div>
	 </div>
</div>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script><script>
	CKEDITOR.replace('content');
	</script>
		
</body>

</html>
<?php 
mysqli_close($connection);
?>