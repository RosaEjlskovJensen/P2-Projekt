<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timeslot = $_POST['timeslot'];
    $mysqli = new mysqli('localhost', 'root', '', 'data');
    $stmt = $mysqli->prepare("INSERT INTO bookings (name, timeslot, email, date) VALUES (?,?,?,?)");
    $stmt->bind_param('ssss', $name, $timeslot, $email, $date);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
    $stmt->close();
    $mysqli->close();
}
// Vigtigt dette er hvor tider produceres disse skal laves styret af admin side !!!!!! //
$duration = 10;
$cleanup = 30;
$start = "09:00";
$end = "15:00";
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
<html lang="dk">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <h1 class="text-center">Book Datoen: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
          <div class="col-md-12">
          	<?php echo isset($msg)?$msg:""; ?>
          </div>
           <?php $timeslots = timeslots($duration, $cleanup, $start, $end);
			foreach($timeslots as $ts){
			?>
      			<div class="col-md-2 center-block">
					<div class="form-group">
						<button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button> 
					</div>
      			</div>
      			
       		<?php } ?>
        </div>
       
    </div>
 
   <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Booking: <span id="slot"></span></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
        		<form action="" method="post">
        			<div class="from-group">
        				<lable for="">Timeslot</lable>
        				<input required type="text" Readonly name="timeslot" id="timeslot" class="form-control">
        			</div>
        			<div class="from-group">
        				<lable for="">Name</lable>
        				<input required type="text"  name="name" class="form-control">
        			</div>
        			<div class="from-group">
        				<lable for="">Email</lable>
        				<input required type="email"  name="email" class="form-control">
        			</div>
        			<div class="form-group pull-right">
        			<br>
        				<button class="btn btn-primary" type="submit" name="submit">Submit</button>
        			</div>
        		</form>
        	</div>
        </div>
      </div>
     
    </div>

  </div>
</div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
		$(".book").click(function(){
			var timeslot = $(this).attr('data-timeslot');
			$("#slot").html(timeslot);
			$("#timeslot").val(timeslot);
			$("#myModal").modal("show");
		})
	  
	</script>
	<a href="index.php" class="btn-danger two columns" >Tilbage</a>
  </body>

</html>
