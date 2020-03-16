<?php
require_once 'Connection.php';

if(isset($_GET['conid'])){
	
	$id=htmlentities($_GET['conid']);
	
	if(!empty($id)){
		
		$query = "DELETE FROM priser WHERE id= $id ";
		
		$results = mysqli_query($connection,$query);
		
		if($results){
		header("Location: Priser.php");
		exit();
		}else{
			die("could not query the database" .msqli_error());
		}
	
	
	}
}

mysqli_close($connection);

?>