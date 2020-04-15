<?php
require_once '../../Connection.php';
$item = $_GET['item'];
$kategori = array("fotografering", "billedeophæng", "kundersblog", "produkter", "bedrebilleder", "tot");
$Medie = $_POST['Medie'];
$Text = $_POST['content'];


if(isset($Medie) && isset($Text)){
	
	if(!empty($Medie) && !empty($Text)){


	$query = "INSERT INTO $kategori[$item] (text, medie) VALUES ('$Text','$Medie')";
		

	$results = mysqli_query($connection,$query);

		if($results){
			header("Location: Blog_Overview.php?item=$item"); /* Redirects browser */
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
