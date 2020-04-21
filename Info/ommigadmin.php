<?php
 require_once '../Connection.php';

$query = "SELECT id, name, description FROM ommig";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rediger om mig</title>
</head>

<body>

<h1>Om mig</h1>
<h2>Rediger om mig</h2>


<?php 
echo "<ol>";
while($row = mysqli_fetch_assoc($results)){
?>	
	<li class="cf">
    <h5><?php echo $row['name']." ".$row['description'] ?>"</h5>
    <div>
<!-- Sender videre til update.php hvor man kan redigere i pakken -->
    	<a href="ommigupdatedata.php?conid=<?php echo $row['id']?>" class="updelBtn">update</a>
    </div>
   
	</li>

<?php
} 
echo "</ol>";	
?>

<a href="../Admin%2520side/Admin.php" class="button">Tilbage</a>

</body>
</html>




<?php
mysqli_close($connection);
?>
