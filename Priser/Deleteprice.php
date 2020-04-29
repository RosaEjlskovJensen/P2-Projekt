<?php
require_once '../Connection.php';
$item = $_GET['item'];
$kategori = array('prices','prices-generel','prices-bryllup','prices-konfirmation')	;	
if(isset($_GET['conid'])){
	
	$id=htmlentities($_GET['conid']);
	
	if(!empty($id)){
		
// Sletter pakken.
        
		$query = "DELETE FROM `$kategori[$item]` WHERE id= $id ";
		
		$results = mysqli_query($connection,$query);
		
		if($results){
		header("Location: Editprice.php?item=$item");
		exit();
		}else{
			die("could not query the database" .msqli_error());
		}
	
	
	}
}

mysqli_close($connection);

?>