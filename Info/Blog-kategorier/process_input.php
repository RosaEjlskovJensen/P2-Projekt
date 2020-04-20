<?php
require_once '../../Connection.php';
$item = $_GET['item'];
$kategori = array("fotografering", "billedeophæng", "kundersblog", "produkter", "bedrebilleder", "tot");

$Text = $_POST['content'];


if(isset($Text)){
	
	if(!empty($Text)){


	$query = "INSERT INTO $kategori[$item] (text) VALUES ('$Text')";
		

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
