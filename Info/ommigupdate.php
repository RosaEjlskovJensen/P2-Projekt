<?php
require_once '../Connection.php';

//Loop der igen tjekker om tingene er rigtige og til sidst sender en tilbage til editprice.php. 


if(isset($_POST['Name'])&&isset($_POST['id'])){
				$name=htmlentities($_POST['Name']);
				
				$id=htmlentities($_POST['id']);
				
				if(isset($_POST['description'])){
					$description = $_POST['description'];
				}else{
					$description="";
				}

				//Man kan se her ved UPDATE at den ikke sletter, eller adder noget, den updater bare de data der allerede er skrevne. 

				if(!empty($name)&&!empty($id)){
					$query = "UPDATE ommig SET name='$name',description='$description' WHERE id = '$id';";
   				echo $query;
					$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				
				header('Location: ommigadmin.php');

			
				}
			}else{
				echo "something went wrong";
			}

mysqli_close($connection);
?>