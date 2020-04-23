<!doctype html>

<?php 
error_reporting(0);
//database connection
session_start();
require_once '../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}

$kunde = $_SESSION['kunde'];
$table = $kunde;
  $query = "SELECT * FROM `$table` ORDER BY id ASC";
  $results = mysqli_query($connection, $query);
	
	 $option1=0;
	
	 $option3=0;
	 $option4=0;
	 $option5=0;
	 $option6=0;
	 while($row = mysqli_fetch_array($results))
  { 
	 $option1++; 
	  
	 $option3++; 
	 $option4++; 
	 $option5++; 
	 $option6++; 
	  
	  $selektion1 = $_POST['option1'.$option1];
	
	  $selektion3 = $_POST['option3'.$option3];
	  $selektion4 = $_POST['option4'.$option4];
	  $selektion5 = $_POST['option5'.$option5];
	  $selektion6 = $_POST['option6'.$option6];
	  //For hver bos skal følgende ske//
	  //først skrives navnet på filen//
	  $body_message .= 'Fil: '.$row["filename"]."<br>";
	  // Så skrives de forskellige indstillinger //
	  $body_message .= 'Farve eller Sort/hvid: '.$selektion1."<br>";
	  $body_message .= 'Størrelse: '.$selektion3."<br>";
	  $body_message .= 'Antal: '.$selektion4."<br>";
	  $body_message .= 'Print Type: '.$selektion5."<br>";
	  $body_message .= 'Kommentar: '.$selektion6."<br>";
	  $body_message .= "<br>";
	 
  }
$_SESSION['message'] = $body_message;
$_SESSION['kunde'] = $kunde;
header('Location: Kunde-Billede-Overview-Mail-Save.php');
exit;
?>
<?php 

?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
<?php
	mysqli_close($connection);
?>