<!doctype html>
<?php 
require_once '../../../Connection.php';
$id = $_GET['id'];

if(isset($_POST['deleted']))
{
	$user_id = $_POST['deleted'];
	$query = "DELETE FROM mainblog WHERE id = '$id';";
	$results = mysqli_query($connection,$query);
	if($results)
	{
		header("Location: Blog_Overview_Main.php");
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