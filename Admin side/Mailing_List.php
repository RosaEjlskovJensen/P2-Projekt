<!doctype html>
<?php
//database connection
require_once '../Connection.php';
$query = "SELECT * FROM newsletter";
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
	<link rel="stylesheet" type="text/css" href="../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">

<title>test</title>
</head>

<body>
<div class="six columns">
<?php 
echo "<h1>Mailing_list</h1>Send til:<br>";
//setup variables
$mailcount = 0;

echo "<form action='send.php' method='get'>";
while($row = mysqli_fetch_assoc($results))
{
	$mailcount ++;
echo "$mailcount. ".$row['email']."<br>";
};
	?>
	

<a class="btn3 btn-primary one-half column" href="MailToAll.php">Send mail til alle</a>


<br>
<a href="Admin.php" class="btn3 btn-warning one-half column">TILBAGE</a>
</div>
</body>
</html>
<?php 
mysqli_close($connection);
?>

