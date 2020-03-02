<!DOCTYPE html>
<?php
//database connection
require_once 'Connection.php';
$query = "SELECT * FROM data";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
}
?>
<html>
<head>
<meta charset="UTF-8">
	 <!-- Dette link er ikonet der er i ens browser tab -->
    <link rel="icon" type="image/png" href="file:///Macintosh HD/Users/mohamedomar/Desktop/INDSET IKON HER">
    <title>Kontakt</title>
    <!-- Linker til Skeleton -->
      <link rel="stylesheet" href="file:///Macintosh HD/Users/mohamedomar/Desktop/stylesheet.css">
    <!-- Linker til normalize der styre font størelser på små skærme -->
    <link rel="stylesheet" href="file:///Macintosh HD/Users/mohamedomar/Desktop/normalize.css">
<title>Photo Gallery buttons</title>

</head>		
		
<body>
	
	echo "<ol>";
while($row = mysqli_fetch_assoc($results)){
	
	echo '<li>';
		echo "<a href='singlephoto.php?id=".$row['ID']."'>";
			echo "<img src=". $row['picture']." width='32' height='32'>";
			echo "<h5>".$row['name']." ".$row['surname']."</h5>";
		echo "</a>";
	echo '</li>';
}
echo "</ol>";	
	

	
</body>
</html>
	<?php 
mysqli_close($connection);
?>