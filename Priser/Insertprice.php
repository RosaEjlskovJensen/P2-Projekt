<?php
require_once '../Connection.php';
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['picture'];
// Det første loop her tjekker navn, descript ion og billede. Billede tager f.eks untitled.png hvis der ikke er upladed et billede, desctiption behøver ikke udfyldes. 

	
				
				
				
				
				
				
				if(!empty($name)){
					//$query = "INSERT INTO prices VALUES ('', '$name', '$description', '$image')";//
				$query = "INSERT INTO `prices`(`id`, `name`, `description`, `picture`) VALUES ('','$name','$description','$image')";
   				$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				header("Location: Addprice.php");

			
				}else{
				echo "something went wrong";
			}
			
			
mysqli_close($connection);
?>