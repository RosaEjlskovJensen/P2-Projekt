<!doctype html>
<?php 
session_start();
$date = $_GET['date'];
require_once '../Connection.php';
$query = "SELECT * FROM bookingsettings WHERE date='$date'";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
}
$row = mysqli_fetch_assoc($results);
$_SESSION['duration'] = $row['duration'];
$_SESSION['cleanup'] = $row['cleanup'];
$_SESSION['start'] = $row['start'];
$_SESSION['end'] = $row['end'];
$_SESSION['price'] = $row['price'];
$_SESSION['city'] = $row['city'];

header("Location: book.php?date=$date");

?>
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