<!doctype html>
<?php 
require_once 'Connection.php';
$query = "SELECT * FROM newsletter";
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
<title>Copy paste liste</title>
</head>

<body>

<a href="mailto:<?php
//setup variables
while($row = mysqli_fetch_assoc($results))
{
echo $row['email'].',';
};

?>">Send Email til alle på Mailing liste</a>  
<br>
<a href="Admin.php" class="button">Hjem</a>
</body>
</html>
<?php 
mysqli_close($connection);
?>