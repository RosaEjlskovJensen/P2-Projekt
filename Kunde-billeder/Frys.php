<?php

$pass = $_POST["pass"];




//action.php
if(isset($_POST["lukket"]))
{
  require_once '../Connection.php';
	$query = "UPDATE `customer_archive` SET `frys` = 'lukket' WHERE `customer_archive`.`pass` = '$pass'";
		
	$results = mysqli_query($connection,$query);

	
		header("Location: Kunde-Liste.php");
 }
if(isset($_POST["åben"]))
{
  require_once '../Connection.php';
	$query = "UPDATE `customer_archive` SET `frys` = 'åben' WHERE `customer_archive`.`pass` = '$pass'";
	$results = mysqli_query($connection,$query);

		header("Location: Kunde-Liste.php");
 }

?>
<?php
	mysqli_close($connection);
?>