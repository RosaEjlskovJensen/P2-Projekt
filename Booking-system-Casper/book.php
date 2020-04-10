<?php
error_reporting(0);
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'data');
if(isset($_GET['date'])){
    $date = $_GET['date'];
	$stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
	$adress = $_POST['adress'];
	$postnummer = $_POST['postnummer'];
	
    $timeslot = $_POST['timeslot'];
		$stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
              $msg = "<div class='alert alert-danger'>Allready booked</div>";  
           
        }else{
			 $stmt = $mysqli->prepare("INSERT INTO bookings (name, phone, timeslot, email, adress, postnummer, date) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssss', $name, $phone, $timeslot, $email, $adress, $postnummer, $date);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
	$bookings[]=$timeslot;
    $stmt->close();
    $mysqli->close();
		}
    }
    
   
}
// Vigtigt dette er hvor tider produceres disse skal laves styret af admin side !!!!!! //

//require_once '../Connection.php';

    /* fetch associative array */
  
$duration = $_SESSION['duration'];
$cleanup = $_SESSION['cleanup'];
$start = $_SESSION['start'];
$end = $_SESSION['end'];
  



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
          <!-- Hvis der ikke er nogen tider ville denne text komme frem -->
          <?php if(!isset($duration))
				{echo "<center><p>Der er endten igen ledige tider tilbage, eller også er der ikke planlagt skema for denne dag endnu, tjek tilbage i morgen.</p><a href='index.php' class='btn-danger two columns' >Tilbage</a></center>"?><?php } ?>
           <?php $timeslots = timeslots($duration, $cleanup, $start, $end);
			foreach($timeslots as $ts){
			?>
      			<div class="col-md-2 center-block">
					<div class="form-group">
					<?php if(in_array($ts, $bookings)){?>
					
						<button class="btn btn-danger"><?php echo $ts; ?></button> 
       		<?php }else{ ?>
       		<button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button> 
       		<?php } ?>
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
        			<div class="from-group">
        				<lable for="">Telefon</lable>
        				<input required type="phone"  name="phone" class="form-control">
        			</div>
        			<div class="from-group">
        				<lable for="">Adresse</lable>
        				<input required type="text"  name="adress" class="form-control">
        			</div>
        			<div class="from-group">
        				<lable for="">postnummer</lable>
        				<input required type="number"  name="postnummer" class="form-control">
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

