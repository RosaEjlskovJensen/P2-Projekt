<!doctype html>
<?php 
error_reporting(0);
//database connection
session_start();
require_once '../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}

$kunde = $_SESSION['kunde'];
$body_message = $_SESSION['message'];

  $query = "UPDATE `customer_archive` SET `bestilling`='$body_message' WHERE pass='$kunde';;";

  $results = mysqli_query($connection, $query);
echo "Din Bestilling lyder:"."<br>";
echo $body_message;
echo "<br>Du høre fra os"
?>
<a href="../index.php">Tilbage</a>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
<?php
	mysqli_close($connection);
?>