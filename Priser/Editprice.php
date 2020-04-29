<?php
 require_once '../Connection.php';
$item = $_GET['item'];
$kategori = array("prices","prices-generel","prices-bryllup","prices-konfirmation");

$query = "SELECT * FROM `$kategori[$item]` ORDER BY id DESC";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}


?>



<!doctype html>
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
	<link rel="stylesheet" type="text/css" href="../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">

<title>test</title>
</head>

<body>

<h1>Priser</h1>
<h2>Rediger priser</h2>


<?php 
echo "<ol>";
while($row = mysqli_fetch_assoc($results)){
?>	
	<li class="cf">
  
  	<img src="<?php echo $row['link']?>" width="32" height="32">
    <h6><?php echo $row['name']." ".$row['description'] ?>"</h6>
    <div>
<!-- Sender videre til update.php hvor man kan redigere i pakken -->
    	<a href="update.php?item=<?php echo $item ?>&conid=<?php echo $row['id']?>" class="btn3 btn-success">OPDATER</a>

<!-- Sender viedere til ddeleteprice.php som sletter ved hjælp af databasen -->
      <a href="Deleteprice.php?item=<?php echo $item ?>&conid=<?php echo $row['id']?>" class="btn3 btn-danger">SLET</a>
    </div>
   
	</li>

<?php
} 
echo "</ol>";	
?>

<a href="../Admin%20side/Admin.php" class="btn3 btn-warning">TILBAGE</a>

</body>
</html>




<?php
mysqli_close($connection);
?>
