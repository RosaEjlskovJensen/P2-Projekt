<!doctype html>
<?php 
require_once 'Connection.php';

if(isset($_POST['deleted']))
{
	$user_id = $_POST['deleted'];
	$query = "DELETE FROM users WHERE users_id=" ."'" .$user_id. "'";
	$results = mysqli_query($connection,$query);
	if($results)
	{
		header("Location: Blog_Overview.php");
		exit();
	} else
	{
		die("Could not query the database" .mysqli_error());
	}  
}



mysqli_close($connection);
?>
