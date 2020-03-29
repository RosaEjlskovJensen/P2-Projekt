<!doctype html>
<?php 
require_once '../Connection.php';

if(isset($_POST['deleted']))
{
	$email = $_POST['deleted'];
	$query = "DELETE FROM customer_archive WHERE email='$email';";
	$results = mysqli_query($connection,$query);
	if($results)
	{
		$query = "DROP TABLE `data`.`$email`";
		$results = mysqli_query($connection,$query);
		header("Location: Kunde-Liste.php");
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