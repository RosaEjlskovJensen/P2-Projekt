<?php
require_once '../Connection.php';
$name = $_POST['name'];
$description = $_POST['description'];
$link = $_POST['link'];
$Pris = $_POST['Pris'];
$kommentar = $_POST['kommentar'];
	$item = $_GET['item'];
$kategori = array('prices','prices-generel','prices-bryllup','prices-konfirmation')	;		
				

// If file upload form is submitted 
if(!empty($name)){
					//$query = "INSERT INTO prices VALUES ('', '$name', '$description', '$image')";//
				$query = "INSERT INTO `$kategori[$item]` (`id`, `name`, `description`, `link`,`pris`,`kommentar`  ) VALUES ('','$name','$description','$link','$Pris','$kommentar')";
   				$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				header("Location: Addprice.php?item=$item");

			
				}else{
				echo "something went wrong";
			}
            
mysqli_close($connection);
?>
?>

