<?php
require_once 'Connection_blog.php';

$media = $_POST['media'];
$Blog_Text = $_POST['Blog_Text'];


if(isset($media) && isset($Blog_Text)){
	
	if(!empty($media) && !empty($Blog_Text)){


	$query = "INSERT INTO blogs VALUES ('','$Blog_Text','$media','')";

	$results = mysqli_query($connection,$query);

		if($results){
		header("Location: Blog_Overview.php"); /* Redirects browser */
		exit();
		}else{
		die("could not query the database" .mysqli_error());
		}
	}
}
//close connection
mysqli_close($connection);
?>
