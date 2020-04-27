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
<meta charset="utf-8">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../main.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<!-- Dette link er ikonet der er i ens browser tab --> 
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Liste over datoers indstillinger</title>
</head>


<body>
<center>

<div class="row offset-by-three columns">
<table class=" six columns">
<form name="update" id="update" autocomplete="on" method="post" action="Booking_Settings_Updater.php?date=<?php echo $date?>">
 <tr> 
 <th><center>Dato</center></th>
 <th><center>Varighed (min)</center></th>
 <th><center>Start (00:00)</center></th>
 <th><center>Slut (00:00)</center></th>
 <th><center>Pause (min)</center></th>
 <th><center>Pris</center></th>
 <th><center>Lokation</center></th>
 </tr>
<tr>
  <td><?php echo( $row['date']) ?></td>
  <td><input type="number" name="duration" id="duration" min="1" max="60" class="u-full-width" value="<?php echo( $row['duration']) ?>"> 
  <td><input type="time" name="start" id="start" class="u-full-width" value="<?php echo($row['start']) ?>"></td>
 <td> <input type="time" name="end" id="end" class="u-full-width" value="<?php echo($row['end']) ?>"> </td>
 <td> <input type="number" name="cleanup" id="cleanup" min="0" max="60" class="u-full-width" value="<?php echo($row['cleanup']) ?>"> </td>
 <td> <input type="number" name="price" id="price" min="0" max="9000" class="u-full-width" value="<?php echo($row['price']) ?>" > </td>
 <td> <input type="text" name="city" id="city"  class="u-full-width" value="<?php echo($row['city']) ?>" > </td>
 </tr>
</table>
</div>
<div class="row">
 <div class="middle"><input  type="submit" id=search3 class="btn3 btn-success" name="update" value="OPDATER">
 </div>
 </div>
	</form>
	</center>
</body>
</html>
<?php 
mysqli_close($connection); ?>