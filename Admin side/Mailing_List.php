<!doctype html>
<?php
//database connection
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
<title>Rediger Blogs</title>
</head>

<body>
<?php 
echo "<h1>Mailing_list</h1>Send til:<br>";
//setup variables
$mailcount = 0;

echo "<form action='send.php' method='get'>";
while($row = mysqli_fetch_assoc($results))
{
	$mailcount ++;
echo "<input type='checkbox' name='mail_count' checked>". "$mailcount. ".$row['email']."<br>";
};
echo "<input type='submit' value='Send (Feature Virker ikke endnu)'>";
echo "</form>";

 ?>
<!-- copy paste delen -->
<a href="Copy_Paste_Email_Liste.php" class="button">Copy paste liste</a>
<br>
<a href="Admin.php" class="button">Hjem</a>
</body>
</html>
<?php 
mysqli_close($connection);
?>
