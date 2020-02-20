<!doctype html>
<?php 
require_once 'Connection_blog.php';

if(isset($_POST['deleted']))
{
		$id = $_POST['deleted'];
		$query = "DELETE FROM blogs WHERE id=" ."'" .$id. "'";
		$results = mysqli_query($connection,$query);
		
	if($results){
		header("Location: Blog_Overview.php");
		exit();
	}
	else{
		die("Could not query the database" .mysqli_error());
	}  
}



mysqli_close($connection);
?>
