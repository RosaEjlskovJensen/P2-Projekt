<?php
require_once 'Connection.php';



if(isset($_POST['addName'])&&isset($_POST['id'])){
				$name=htmlentities($_POST['addName']);
				
				$id=htmlentities($_POST['id']);
				
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
				
				if(!empty($name)&&!empty($id)){
					$query = "UPDATE priser SET name='$name',description='$description' WHERE id = '$id';";
   				echo $query;
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