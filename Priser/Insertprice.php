<?php
require_once 'Connection.php';

if              (isset($_POST['addName'])){
				$name = $_POST['addName'];
                }
				if(isset($_POST['description'])){
					$description = $_POST['description'];
				}else{
					$description="";
				}
				if(isset($_POST['image'])){
					$image = $_POST['image'];
				}else{
					$image="untitled.png";
				}
				
				
				
				
				
				
				if(!empty($name)){
					$query = "INSERT INTO priser VALUES ('$name','$description','$image')";
   				$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				
				header('Location: Priser.php');

			
				}
			}else{
				echo "something went wrong";
			}
			
			
mysqli_close($connection);
?>