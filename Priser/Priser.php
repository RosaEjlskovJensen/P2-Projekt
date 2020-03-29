    <?php
 require_once '../Connection.php';

$query = "SELECT id, name, description, picture FROM prices";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Amalie Sandgaard | Photography | Priser</title>
</head>

<style>

#box {
  width: 600px;
  height: 250px;
  border: 1px red solid;
}

#box .box1, #box .box2 {
  width: 300px;
  height: 250px;
  float: left;
  outline: 1px red solid;
}
    </style>

<body>


<h1>Priser</h1>

<!-- Php koden herunder echoer ud alle informationer vi har i databasen -->

<?php 
while($row = mysqli_fetch_assoc($results)){

	?>
    <div align=center>
	        <div id="box"> <div class="box1">                                                         
			<?php echo '<img src="'.$row['picture'].'" width="120px" height="120px" >'?></div>  
			<div class="box2"><?php echo $row['name']?>                                                               
            <?php echo $row['description']?>   </div>                    
            </div>
    </div>
<?php } ?>
<a href="../index.php" >Tilbage</a>
</body>
</html>