<!doctype html>
<?php 
require_once '../../Connection.php';
$id = $_GET['id'];
$item = $_GET['item'];
$kategori = array("fotografering", "billedeophæng", "kundersblog", "produkter", "bedrebilleder", "tot");
if(isset($_POST['content'])){

	$Text = $_POST['content'];
	
	
	if(!empty($Text)){
		// Hvis text og medie ikke er tomme vil den tage den nye text og medie og udskifte det i tabellen //
			$query = "UPDATE $kategori[$item] SET Text='$Text' WHERE id = '$id';";
   			echo $query;
			$results = mysqli_query($connection,$query);

			if(!$results){
				die("could not query the database" .mysqli_error());
			}
				header("Location: Blog_Overview.php?item=$item");
	}
}else
	{
		echo "something went wrong";
	}

mysqli_close($connection);
?>

