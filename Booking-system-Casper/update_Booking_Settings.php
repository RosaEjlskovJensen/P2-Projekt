<!doctype html>
<?php 
require_once '../Connection.php';
$date = $_POST['updated'];
$query = "SELECT * FROM bookingsettings WHERE date=" ."'" .$date. "'";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
};
$row = mysqli_fetch_assoc($results);
?>


<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta charset="utf-8">
<title>update_contact</title>
</head>

<body>
<p><?php echo $date ?></p>
<form name="update" id="update" autocomplete="on" method="post" action="Booking_Settings_Updater.php?date=<?php echo $date?>">

     
  <input type="number" name="duration" id="duration"  value="<?php echo( $row['duration']) ?>"> 
  <input type="time" name="start" id="start"  value="<?php echo($row['start']) ?>">
  <input type="time" name="end" id="end" value="<?php echo($row['end']) ?>" > 
  <input type="number" name="cleanup" id="cleanup" value="<?php echo($row['cleanup']) ?>" > 
 

 <div class="middle"><input  type="submit" id=search3 name="update" value="update">
 </div>
	</form>

</body>
</html>
<?php 
mysqli_close($connection); ?>