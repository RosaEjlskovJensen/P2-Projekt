<?php
//database connection
$connection = mysqli_connect('amaliesandgaardphotography.dk.mysql','amaliesandgaardphotography_dkdata','Software11','amaliesandgaardphotography_dkdata');
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}
?>