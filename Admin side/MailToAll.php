<!doctype html>
<?php
//database connection
require_once '../Connection.php';
$query = "SELECT * FROM newsletter";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<a href="mailto:<?php
//setup variables
while($row = mysqli_fetch_assoc($results))
{
echo $row['email']. ",";
};

?>">Send Email til alle på Mailing liste</a>  
	<?php
echo "</form>";

 ?>
 <br>
 <a href="Mailing_List.php">Tilbage</a>
</body>
</html>