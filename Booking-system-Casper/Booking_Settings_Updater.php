<!doctype html>
<?php 
require_once '../Connection.php';
$date = $_GET['date'];
if(isset($_POST['start'])){

	
	$duration = $_POST['duration'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$cleanup = $_POST['cleanup'];
	
	if(!empty($duration)&&!empty($start)&&!empty($end)&&!empty($cleanup)){
					$query = "UPDATE bookingsettings SET date='$date',duration='$duration',cleanup='$cleanup',start='$start',end='$end' WHERE date='$date'";
   				echo $query;
				
				$results = mysqli_query($connection,$query);
					 if(!$results){
					die("could not query the database" .mysqli_error());
					 }
				header('Location: Booking-Settings-Overview.php');
				}
			}else{
				echo "something went wrong";
			}

mysqli_close($connection);
?>

