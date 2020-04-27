<?php
require_once '../Connection.php';
$name = $_POST['name'];
$description = $_POST['description'];
$link = $_POST['link'];
$Pris = $_POST['Pris'];
$kommentar = $_POST['kommentar'];
				
				

// If file upload form is submitted 
if(!empty($name)){
					//$query = "INSERT INTO prices VALUES ('', '$name', '$description', '$image')";//
				$query = "INSERT INTO `prices`(`id`, `name`, `description`, `link`,`pris`,`kommentar`  ) VALUES ('','$name','$description','$link','$Pris','$kommentar')";
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
?>

