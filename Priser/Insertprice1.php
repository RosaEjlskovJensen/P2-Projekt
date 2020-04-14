<?php
require_once '../Connection.php';


if(isset($_POST['Name'])&&isset($_POST['id'])){
				$name=htmlentities($_POST['Name']);
				
				$id=htmlentities($_POST['id']);
				
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




				if(!empty($name)&&!empty($id)){
					$query = "INSERT INTO prices VALUES ('', '$name', '$description', '$image')";
   				echo $query;
					$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				
				header('Location: Addprice.php');
				}
			}else{
				echo "something went wrong";
			}

			
mysqli_close($connection);
?>