<?php 

// ---------------------------------------------------------------------------------//


function timeslots($duration, $cleanup, $start, $end){
	$start = new DateTime($start);
	$end = new DateTime($end);
	$interval = new DateInterval("PT".$duration."M");
	$cleanupinterval = new DateINterval("PT".$cleanup."M");
	$slots = array();
	
	for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupinterval)){
		$endPeriod = clone $intStart;
		$endPeriod->add($interval);
		if($endPeriod>$end){
			break;
		}
		$slots[] = $intStart->format("H:iA")."-". $endPeriod->format("H:iA");
	}
	return $slots;
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Viewport" content="width=device-width, initial-scale=1.0">
<title>Book week</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="../main.css">

</head>

<body>

<h1></h1>
<?php
$dt = new DateTime;
if (isset($_GET['year']) && isset($_GET['week'])) {
    $dt->setISODate($_GET['year'], $_GET['week']);
} else {
    $dt->setISODate($dt->format('o'), $dt->format('W'));
}
$year = $dt->format('o');
$week = $dt->format('W');
$month = $dt->format('F');
$year = $dt->format('Y');
	
?>



<div class="container">
	<div class="row">
		<div class="col-md-12" >
		<center>
		<h2><?php echo "$month $year uge: $week"; ?></h2>
		<a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'].'?week='.($week-1).'&year='.$year; ?>">Pre Week</a> <!--Previous week-->
		<a class="btn btn-primary" href="index.php">Current Week</a> <!--Previous week-->
		<a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'].'?week='.($week+1).'&year='.$year; ?>">Next Week</a><br><br> <!--Next week-->
		<center><a class='btn btn-success' href='../index.php'>Månedsvisning</a></center><br>
		</center>
		

		<table class="table table-bordered">
   <th>Mandag</th>
   <th>Tirsdag</th>
   <th>Onsdag</th>
   <th>Torsdag</th>
   <th>Fredag</th>
   <th>Lørdag</th>
   <th>Søndag</th>
    <tr class="">
	<?php
		do {
			if($dt->format('M d Y')== date('M d Y')){
				echo "<td style='background:lightgreen'><center><a class='btn btn-success' href='../booksettings.php?date=".$dt->format('Y-m-d')."'" . $dt->format('l') . "<br>" . $dt->format('d-m-Y') . "</td>\n";
			}elseif($dt->format('M d Y')<= date('M d Y')){
				echo "<td><center><a class='btn btn-danger' href=#'>N/A". "</td>\n";
				
				
			}else{
				echo "<td><center><a class='btn btn-success' href='../booksettings.php?date=".$dt->format('Y-m-d')."'" . $dt->format('l') . "<br>" . $dt->format('d-m-Y') . "</td>\n";
				
				
			}
			
			$dt->modify('+1 day');
		} while ($week == $dt->format('W'));
	?>
    </tr>
   
	
</table>
	</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7I2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
