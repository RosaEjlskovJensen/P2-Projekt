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
	$kommentar = $_POST['kommentar'];
	$fototype = $_POST['fototype'];
	$peoplecount = $_POST['peoplecount'];
	$pet = $_POST['pet'];
	
    $timeslot = $_POST['timeslot'];
		$stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
              $msg = "<div class='alert alert-danger'>Allready booked</div>";  
           
        }else{
			 $stmt = $mysqli->prepare("INSERT INTO bookings (name, phone, timeslot, email, adress, postnummer, date, kommentar, fototype, peoplecount, pet) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssssss', $name, $phone, $timeslot, $email, $adress, $postnummer, $date, $kommentar, $fototype, $peoplecount, $pet);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking reseveret til betaling er gennemført</div>";
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
$price = $_SESSION['price'];
$city = $_SESSION['city'];
  



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
		$slots[] = $intStart->format("H:i")."-". $endPeriod->format("H:i");
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
    	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography</title>
	<!-- ajax/jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Fontawsome -->
  <script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">
  </head>

  <body>
      
 <!-- Navigation bar -->
<?php include_once('../header.php'); ?>
      <br>
      <br>
      <br>

    <div class="container">
        <h1 class="text-center">Book Datoen: <?php echo date('d/m/Y', strtotime($date)); ?></h1>
        <h1 class="text-center">Lokation: <?php echo $city ?></h1>
        <h1 class="text-center">Pris <?php echo $price.",-" ?></h1><hr>
        <div class="row">
          <div class="col-md-12">
          	<?php echo isset($msg)?$msg:""; ?>
          </div>
          <!-- Hvis der ikke er nogen tider ville denne text komme frem -->
          <?php if(!isset($duration))
				{echo "<center><p> Dagen er endten ikke planlagt endnu eller også er der lukket for bookinger denne dag.<br>Vi planlægger normalt 14 dage frem. Prøv igen senere. Eller kontakt os på<br>
				<a class='text1' href='https://www.facebook.com/amaliesandgaardphotography' target='_blank'>Facebook</a></p><a href='index.php' class='btn-danger two columns' >Tilbage</a></center>"?><?php } ?>
           <?php $timeslots = timeslots($duration, $cleanup, $start, $end);
			foreach($timeslots as $ts){
			?>
      			<div class="col-md-2 center-block">
					<div class="form-group">
					<?php if(in_array($ts, $bookings)){?>
					
						<center><button style="visibility: hidden"</button> </center>
       		<?php }else{ ?>
       		<center><button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><center><?php echo $ts; ?></center></button> </center>
       		<?php } ?>
       		</div>
      			</div>
      			<?php } ?>
        </div>
       
    </div>
  <center><a href="index.php" class="btn btn-primary">Tilbage</a></center>
   <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title u-pull-left">Lokation: <?php echo $city ?></h4>
        <h4 class="modal-title u-pull-right">Pris: <?php echo $price.",-" ?></h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
        		<form action="" method="post">
        		<strong>Kunde Oplysninger:</strong>
        			<div class="from-group">
        				<lable for="">Name</lable>
        				<input required type="text"  name="name" class="form-control" required>
        			</div>
        			<div class="from-group">
        				<lable for="">Email</lable>
        				<input required type="email"  name="email" class="form-control" required>
        			</div>
        			<div class="from-group">
        				<lable for="">Telefon</lable>
        				<input required type="phone"  name="phone" class="form-control" required>
        			</div>
        			<div class="from-group">
        				<lable for="">Adresse</lable>
        				<input required type="text"  name="adress" class="form-control" required>
        			</div>
        			<div class="from-group">
        				<lable for="">postnummer</lable>
        				<input required type="number"  name="postnummer" class="form-control" required>
        			</div>
						<hr>
       			<strong>Booking Oplysninger</strong>
       			<div class="from-group">
        				<lable for="">Tid på dagen:</lable>
        				<input required type="text" Readonly name="timeslot" id="timeslot" class="form-control" required>
        			</div>
        			<div class="from-group">
        			<lable for="">Fotograferings Type:</lable>
        			 <select name="fototype" id="fototype" class="form-control" required>
						<option value="blank">Vælg</option>
						<option value="Familie">Familie</option>
						<option value="Babyer">Babyer</option>
						<option value="Børn">Børn</option>
						<option value="CV">CV</option>
						<option value="Højtid">Højtid</option>
					  </select>
        			</div>
        			<div class="from-group">
        			<lable for="">Antal personer til fotografering:</lable>
        				<select class="form-control" name="peoplecount" id="peoplecount">
						<?php for ($i=1; $i<=20; $i++){ ?>
							<option value="<?php echo $i;?>"><?php echo $i;?></option>
						<?php } ?>
						</select>
        			</div>
        				<div class="from-group">
       		      <lable for="">Har de et kæledyr med til photoshoot?</lable>
        		      <select name="pet" id="pet" class="form-control" required>
						<option value="Nej">Nej</option>
						<option value="Ja">Ja</option>
					  </select>
        			</div>
        			<div class="from-group">
        				<lable for="">Kommentar</lable>
        				<input required type="text"  name="kommentar" class="form-control">
        			</div>
        		
        			<div class="form-group pull-right">
        			<br>
        			 <?php
						$kundeemail =$_POST['email'];
if(isset($_POST['email'])) {
 
    // Din email og beskeden
    $email_to = $kundeemail;
    $email_subject = "Fotograf Booking";

    $timelsot = $_POST['timeslot']; // required
    $date = $_POST['email']; // required
  
 
        
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Dette er en påmindelse og kopi af din bookede tid hos Amalie";
    $email_message .= "Du har booket photografering kl: ".clean_string($timelsot)."\n";
    $email_message .= "Den: : ".clean_string($date)."\n";
    $email_message .= "Har du spørgsmål er du altid velkommen tila t ringe til 61601222";
    
 
// Email header
$headers = 'From: '."Amaliephotography"."\r\n".
'Reply-To: '.Amaliephotography."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- Responsen når du har trykket submit skrives herunder -->
 
Tak for henvendelsen, du hører fra os hurtigst muligt.
<?php
 
}
?>
        			
        				<input type="checkbox" required><a href="../Kontakt/Terms_conditions.php"><u>Vilkår og Betingelser</u></a>
        				<button class="btn btn-primary" type="submit" name="submit">Send</button>
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
    
      
	<!-- Top part of the footer-->
  <?php include_once('../footer.php'); ?>
    
      

  </body>

</html>


