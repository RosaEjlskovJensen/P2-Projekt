<?php
require_once 'Connection.php';

if              (isset($_POST['Name'])){
				$name = $_POST['Name'];
                }
				if(isset($_POST['description'])){
					$description = $_POST['description'];
				}else{
					$description=" ";
				}
				if(isset($_POST['image'])){
					$image = $_POST['image'];
				}else{
					$image="untitled.png";
				}
				
				
				
				
				
				
				if(!empty($name)){
					$query = "INSERT INTO prices VALUES ('', '$name', '$description', '$image')";
   				$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				
				header('Location: Priser.php');

			
				}else{
				echo "something went wrong";
			}
			
			
mysqli_close($connection);
?>