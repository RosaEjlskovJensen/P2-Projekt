<?php

//database connection
$connection = mysqli_connect('localhost','root','','mailing_list');
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}

echo "<h1>Mailing_list</h1>send to";

//setup variables
$mailcount = 0;
$namecount = 0;
$query = "SELECT * FROM mailing_list WHERE send='1'";

$results = mysql_query($query);

echo "<form action='send.php' method='GET'>";
while ($row = mysql_fetch_assoc($results))

{

echo "<input type='checkbox' name='mail_'". $mailcount."'value'".$row['Email']."'CHECKED'>".$row['Fornavn']." ".$row['Efternavn']."<br>";

};

echo "</form>";

?>

