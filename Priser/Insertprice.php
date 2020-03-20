<?php
require_once '../Connection.php';

// Det første loop her tjekker navn, description og billede. Billede tager f.eks untitled.png hvis der ikke er upladed et billede, desctiption behøver ikke udfyldes. 

if              (isset($_POST['Name'])){
				$name = $_POST['Name'];
                }
				if(isset($_POST['description'])){
					$description = $_POST['description'];
				}else{
					$description=" ";
				}
				if(isset($_POST['picture'])){
					$image = $_POST['picture'];
				}else{
					$image="untitled.png";
				}
				
				
				
				
				
				
				if(!empty($name)){
					$query = "INSERT INTO prices VALUES ('', '$name', '$description', '$image')";
   				$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				
				header('Location: Addprice.php');

			
				}else{
				echo "something went wrong";
			}
			
			
mysqli_close($connection);
?>