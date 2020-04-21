<?php
require_once '../Connection.php';
$name = $_POST['name'];
$description = $_POST['description'];
				
				

// If file upload form is submitted 
if(!empty($name)){
					//$query = "INSERT INTO prices VALUES ('', '$name', '$description', '$image')";//
				$query = "INSERT INTO `ommig`(`id`, `name`, `description`) VALUES ('','$name','$description')";
   				$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				header("Location: ommigadmin.php");

			
				}else{
				echo "something went wrong";
			}
            
mysqli_close($connection);
?>
?>

