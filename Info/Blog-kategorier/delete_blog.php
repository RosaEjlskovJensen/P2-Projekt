<!doctype html>
<?php 
require_once '../../Connection.php';
$id = $_GET['id'];
$item = $_GET['item'];
$kategori = array("fotografering", "billedeophæng", "kundersblog", "produkter", "bedrebilleder", "tot");
if(isset($_POST['deleted']))
{
	$user_id = $_POST['deleted'];
	$query = "DELETE FROM $kategori[$item] WHERE id = '$id';";
	$results = mysqli_query($connection,$query);
	if($results)
	{
		header("Location: Blog_Overview.php?item=$item");
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