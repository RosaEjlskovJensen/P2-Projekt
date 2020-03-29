<!doctype html>
<?php 
require_once 'Connection.php';
$user_id = $_GET['item'];
if(isset($_POST['firstname'])){

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$description = $_POST['description'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	if(!empty($firstname)&&!empty($lastname)&&!empty($email)){
					$query = "UPDATE users SET 
					firstname='$firstname' , 
					lastname='$lastname' , 
					description='$description' , 
					email='$email' , 
					phone='$phone' 
					WHERE users_id = '$user_id';";
   				echo $query;
				$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }
				header('Location: EditContact.php');
				}
			}else{
				echo "something went wrong";
			}

mysqli_close($connection);
?>

