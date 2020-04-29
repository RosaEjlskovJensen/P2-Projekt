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
<link rel="stylesheet" type="text/css" href="../../main.css">

</head>

<body>

<!-- Navigation bar -->
  <nav class="nav">
    <a href="../../index.php"><img class="img_logo" src="../../billeder/AmalieSandgaardPhotography_LOGO.png"></a>
    <input type="checkbox" id="menu_btn" class="menu_btn" />
    <label class="menu_icon" for="menu_btn"><span class="nav_icon"></span></label>
    <ul class="menu">
      <div class="nav_dropdown">
        <button class="btn_dropdown">Portfolio <i class=""></i></button>
          <div class="dropdown-content">
          <li><a href="../../portfolie/Portfolietemplate.php?item=0" class="button">Baby</a></li>
          <li><a href="../../portfolie/Portfolietemplate.php?item=1" class="button">Bryllup</a></li>
          <li><a href="../../portfolie/Portfolietemplate.php?item=2" class="button">CV</a></li>
          <li><a href="../../portfolie/Portfolietemplate.php?item=3" class="button">Familie</a></li>
          <li><a href="../../portfolie/Portfolietemplate.php?item=4" class="button">Gravid</a></li>
          <li><a href="../../portfolie/Portfolietemplate.php?item=5" class="button">Konfirmation</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Info <i class=""></i></button>
          <div class="dropdown-content">
          <li><a href="../../Info/ommig.php" class="button">Om Mig</a></li>
          <li><a href="../../Infoforside.php" class="button">Fotograferings info</a></li>
            </div>
            </div>


            <div id="nav_dropdown">
                <a href="../../Info/blog.php" id="btn_dropdown">blog</a>
            </div>
        
            <div id="nav_dropdown">
                <a href="../../Kunde-billeder/FindTabel-kunde.php" id="btn_dropdown">Kundelogin</a>
            </div>
        
      <div class="nav_dropdown">
        <button class="btn_dropdown">Priser <i class=""></i></button>
          <div class="dropdown-content">
          <li><a href="../../Priser/Priser.php" class="button">Enkelt prints</a></li>
            <li><a href="../../Priser/Priser-Generel.php" class="button">Generelle pakker</a></li>
              <li><a href="../../Priser/Priser-Bryllup.php" class="button">Bryllups pakker</a></li>
              <li><a href="../../Priser/Priser-Konfirmation.php" class="button">Konfirmations pakker</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Booking <i class=""></i></button>
          <div class="dropdown-content">
          <li><a href="../../Booking-system-Casper/index.php" class="button">Kalender</a></li>
          <li><a href="../../Admin side/Loginside.php" class="button">Login</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Kontakt <i class=""></i></button>
          <div class="dropdown-content">
          <li><a href="../../Kontakt/Kontakt.php" class="button">Kontakt</a></li>
          <li><a href="../../Kontakt/FAQ.php" class="button">FAQ</a></li>
          <li><a href="../../Kontakt/Privateterms.php" class="button">Privatlivspolitik</a></li>
          <li><a href="../../Kontakt/Terms_conditions.php" class="button">Vilkår & Betingelser</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown"></button>
          <div class="dropdown-content">
          </div>
      </div>
    </ul>
  </nav>
    
    <br><br><br>
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
		<h2><?php echo "$month $year"; ?></h2>
		<h4><?php echo "uge: $week"; ?></h4>
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
				echo "<td style='background:lightgreen'><center>".$dt->format('d-m-Y')."<br><a class='btn btn-success' href='../booksettings.php?date=".$dt->format('Y-m-d')."'" . $dt->format('l') . "<br>" . "Se Tider". "</td>\n";
			}elseif($dt->format('M d Y')<= date('M d Y')){
				echo "</td><td><center>".$dt->format('d-m-Y')."<br><a class='btn btn-danger' href=#'>N/A". "</td>\n";
				
				
			}else{
				echo "<td><center>".$dt->format('d-m-Y')."<br><a class='btn btn-success' href='../booksettings.php?date=".$dt->format('Y-m-d')."'" . $dt->format('l') . "<br>" . "Se Tider". "</td>\n";
				
				
			}
			
			$dt->modify('+1 day');
		} while ($week == $dt->format('W'));
	?>
    </tr>
   
	
</table>
	</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7I2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <br><br><br><br><br>
    <!-- Top part of the footer-->
  <section class="section_topfooter">
    <div class="container">
      <div class="u-full-width">
        <div class="row">
          <div class="six columns">
            <center>
            <p style="font-size: 16px">KONTAKTOPLYSNINGER</p>
            <p style="font-size: 15px">Amalie Sandgaard<br>CVR: 38 02 70 34<br>+45 31 51 45 55<br>amaliesandgaardphotography@hotmail.com</p>
            </center>
          </div>
          <div class="two columns">
            <center>
            <p style="font-size: 16px">NYTTIGE LINKS</p>
            <a style="font-size: 15px" href="../../Kontakt/Privateterms.html" >Privatlivspolitik</a><br>
            <a style="font-size: 15px" href="../../Kontakt/Terms_conditions.html">Vilkår & Betingelser</a>
            </center>
          </div>
          <div class="two columns">
            <center>
            <p style="font-size: 16px">FØLG MIG PÅ</p>
            <a href="https://www.facebook.com/amaliesandgaardphotography/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a><br>
            <a href="https://www.instagram.com/amalie_sandgaard_photography/?hl=da" target="_blank"><i class="fab fa-instagram fa-2x"></i></a><br>
            </center>
          </div>
        </div>
      </div>
    </div>
  </section> 
 <!--Bottom part of the footer -->
  <section class="section_bottomfooter">
    <div>
      <center>
        <p style="font-size: 15px" class="footer"> &copy; Copyright <?php echo date("Y"); ?> | Amalie Sandgaard Photography | All Rights Reserved</p>
      </center>
    </div>
  </section>
    
</body>
</html>
