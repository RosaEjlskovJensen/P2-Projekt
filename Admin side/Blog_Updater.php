<!doctype html>
<?php 
require_once '../Connection.php';
$id = $_GET['id'];
$item = $_GET['item'];

if(isset($_POST['content'])){

	$Text = $_POST['content'];
	
	
	if(!empty($Text)){
		// Hvis text og medie ikke er tomme vil den tage den nye text og medie og udskifte det i tabellen //
			$query = "UPDATE portfolieinfo SET Text='$Text' WHERE id = '$id';";
   			echo $query;
			$results = mysqli_query($connection,$query);

			if(!$results){
				die("could not query the database" .mysqli_error());
			}
				header("Location: PortfolieInfoadminside.php");
	}
}else
	{
		echo "something went wrong";
	}

mysqli_close($connection);
?>

