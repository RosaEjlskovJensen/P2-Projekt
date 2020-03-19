<?php
 require_once '../Connection.php';

$query = "SELECT id, name, description, picture FROM prices";
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
  
  	<img src="<?php echo $row['picture']?>" width="32" height="32">
    <h5><?php echo $row['name']." ".$row['description'] ?>"</h5>
    <div>
    	<a href="update.php?conid=<?php echo $row['id']?>" class="updelBtn">update</a>
      <a href="Deleteprice.php?conid=<?php echo $row['id']?>" class="updelBtn">delete</a>
    </div>
   
	</li>

<?php
} 
echo "</ol>";	
?>


</body>
</html>




<?php
mysqli_close($connection);
?>
