<?php
//database connection
$connection = mysqli_connect('localhost','root','','blog');
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}
?>