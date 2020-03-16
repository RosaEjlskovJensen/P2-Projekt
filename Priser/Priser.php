    <?php
 require_once 'Connection.php';

$query = "SELECT ID, name, description,picture FROM priser";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Priser</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="..//burgermenujs.js"></script>
 <!-- Dette link er ikonet der er i ens browser tab -->
    <link rel="icon" type="image/png" href="INDSET IKON HER">
    <!-- Linker til Skeleton -->    
    <!-- <link rel="stylesheet" href="..//stylesheet.css"> -->
    <!-- Linker til normalize der styre font størelser på små skærme -->
    <link rel="stylesheet" href="..//normalize.css">
  <!-- Linker til Fontawsome -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Linker til Stylesheet -->
  <link rel="stylesheet" href="..//stylesheet.css">
</head>

<body>

<h1>Priser</h1>



<?php 
echo "<ol>";
while($row = mysqli_fetch_assoc($results)){
	
	echo '<li>';
        /*-- Link til noget booking?--*/
		echo "<a href='?id=".$row['ID']."'>";

			echo "<img src=". $row['picture']." width='32' height='32'>";
			echo "<h5>".$row['name']." ".$row['description']."</h5>";
		echo "</a>";
	echo '</li>';
}
echo "</ol>";	
?>


</body>
</html>




<?php
mysqli_close($connection);
?>