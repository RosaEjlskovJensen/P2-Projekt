<?php
require_once '../../../Connection.php';

$Text = $_POST['content'];


if(isset($Text)){
	
	if(!empty($Text)){


	$query = "INSERT INTO mainblog (text) VALUES ('$Text')";
		

	$results = mysqli_query($connection,$query);

		if($results){
			header("Location: Blog_Overview_Main.php"); /* Redirects browser */
			exit();
		}else
		{
			die("could not query the database" .mysqli_error());
		}
	}
}
//close connection
mysqli_close($connection);
?>
