<?php
require_once '../Connection.php';

//Loop der igen tjekker om tingene er rigtige og til sidst sender en tilbage til editprice.php. 

$item = $_GET['item'];
$kategori = array('prices','prices-generel','prices-bryllup','prices-konfirmation')	;	
if(isset($_POST['Name'])&&isset($_POST['id'])){
				$name=htmlentities($_POST['Name']);
				
				$id=htmlentities($_POST['id']);
				
				if(isset($_POST['description'])){
					$description = $_POST['description'];
				}else{
					$description="";
				}
				
				if(isset($_POST['link'])){
					$image = $_POST['link'];
				}else{
					$image="untitled.png";
				}
				if(isset($_POST['kommentar'])){
					$kommentar = $_POST['kommentar'];
				}else{
					
				}

				//Man kan se her ved UPDATE at den ikke sletter, eller adder noget, den updater bare de data der allerede er skrevne. 

				if(!empty($name)&&!empty($id)){
					$query = "UPDATE `$kategori[$item]` SET name='$name',description='$description',link='$image',kommentar='$kommentar' WHERE id = '$id';";
   				echo $query;
					$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				
				header("Location: Editprice.php?item=$item");

			
				}
			}else{
				echo "something went wrong";
			}

mysqli_close($connection);
?>