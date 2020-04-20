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
<link rel="stylesheet" href="../stylesheet.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<meta charset="utf-8">
<title>update_contact</title>
</head>

<body>
<center>

<div class="row offset-by-three columns">
<table class=" six columns">
<form name="update" id="update" autocomplete="on" method="post" action="Booking_Settings_Updater.php?date=<?php echo $date?>">
 <tr> 
 <th><center>Dato</center></th>
 <th><center>Længde af tid</center></th>
 <th><center>start</center></th>
 <th><center>slut</center></th>
 <th><center>pause</center></th>
 <th><center>pris</center></th>
 </tr>
<tr>
  <td><?php echo( $row['date']) ?></td>
  <td><input type="number" name="duration" id="duration" min="1" max="60" class="u-full-width" value="<?php echo( $row['duration']) ?>"> 
  <td><input type="time" name="start" id="start" class="u-full-width" value="<?php echo($row['start']) ?>"></td>
 <td> <input type="time" name="end" id="end" class="u-full-width" value="<?php echo($row['end']) ?>"> </td>
 <td> <input type="number" name="cleanup" id="cleanup" min="0" max="60" class="u-full-width" value="<?php echo($row['cleanup']) ?>"> </td>
 <td> <input type="number" name="price" id="price" min="0" max="9000" class="u-full-width" value="<?php echo($row['price']) ?>" > </td>
 </tr>
</table>
</div>
<div class="row">
 <div class="middle"><input  type="submit" id=search3 name="update" value="update">
 </div>
 </div>
	</form>
	</center>
</body>
</html>
<?php 
mysqli_close($connection); ?>