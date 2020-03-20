<?php
require_once '../Connection.php';

if(isset($_GET['conid'])){
	
	$id=htmlentities($_GET['conid']);
	
	if(!empty($id)){
		
// Sletter pakken.
        
		$query = "DELETE FROM prices WHERE id= $id ";
		
		$results = mysqli_query($connection,$query);
		
		if($results){
		header("Location: Editprice.php");
		exit();
		}else{
			die("could not query the database" .msqli_error());
		}
	
	
	}
}

mysqli_close($connection);

?>