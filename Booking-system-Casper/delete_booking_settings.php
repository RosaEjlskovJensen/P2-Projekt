<!doctype html>
<?php 
require_once '../Connection.php';

if(isset($_POST['deleted']))
{
	$date = $_POST['deleted'];
	$query = "DELETE FROM bookingsettings WHERE date= '$date'";
	$results = mysqli_query($connection,$query);
	if($results)
	{
		header("Location: Booking-Settings-Overview.php");
		exit();
	} else
	{
		die("Could not query the database" .mysqli_error());
	}  
}



mysqli_close($connection);
?>
<!--<html>
<head>
<meta charset="utf-8">
<title>delete_contact</title>
</head>

<body>
</body>
</html>