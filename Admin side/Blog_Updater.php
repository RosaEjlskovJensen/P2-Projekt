<!doctype html>
<?php 
require_once '../Connection.php';
$id = $_GET['item'];
if(isset($_POST['Text'])){

	$Text = $_POST['Text'];
	$Medie = $_POST['Medie'];
	
	if(!empty($Text)&&!empty($Medie)){
		// Hvis text og medie ikke er tomme vil den tage den nye text og medie og udskifte det i tabellen //
			$query = "UPDATE blogs SET Text='$Text',Medie='$Medie' WHERE id = '$id';";
   			echo $query;
			$results = mysqli_query($connection,$query);

			if(!$results){
				die("could not query the database" .mysqli_error());
			}
				header('Location: Blog_Overview.php');
	}
}else
	{
		echo "something went wrong";
	}

mysqli_close($connection);
?>

