<?php
require_once '../Connection.php';

    $date = $_POST['date'];
    $duration = $_POST['duration'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$cleanup = $_POST['cleanup'];

if(isset($duration) && isset($start) && isset($end) && isset($cleanup)){
	
	if(!empty($duration) && !empty($start) && !empty($end) && !empty($cleanup)){


	$query = "INSERT INTO bookingsettings VALUES ('$date','$duration','$cleanup','$start','$end')";

	$results = mysqli_query($connection,$query);

		if($results){
		header("Location: Booking-Settings-Overview.php"); /* Redirects browser */
		exit();
		}else{
		die("could not query the database" .mysqli_error());
		}
	}
}
//close connection
mysqli_close($connection);
?>
