<?php
require_once 'Connection.php';

$Medie = $_POST['Medie'];
$Text = $_POST['Text'];


if(isset($Medie) && isset($Text)){
	
	if(!empty($Medie) && !empty($Text)){


	$query = "INSERT INTO blogs VALUES ('','$Text','$Medie')";

	$results = mysqli_query($connection,$query);

		if($results){
			header("Location: Blog_Overview.php"); /* Redirects browser */
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
