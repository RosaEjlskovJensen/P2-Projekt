<?php
 require_once '../Connection.php';

$query = "SELECT id, name, description, link FROM prices";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rediger priser</title>
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
    <h5><?php echo $row['name']." ".$row['description'] ?>"</h5>
    <div>
<!-- Sender videre til update.php hvor man kan redigere i pakken -->
    	<a href="update.php?conid=<?php echo $row['id']?>" class="updelBtn">update</a>

<!-- Sender viedere til ddeleteprice.php som sletter ved hjælp af databasen -->
      <a href="Deleteprice.php?conid=<?php echo $row['id']?>" class="updelBtn">delete</a>
    </div>
   
	</li>

<?php
} 
echo "</ol>";	
?>

<a href="../Admin%20side/Admin.php" class="button">Tilbage</a>

</body>
</html>




<?php
mysqli_close($connection);
?>
