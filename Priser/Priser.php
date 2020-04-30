    <?php
 require_once '../Connection.php';

$query = "SELECT * FROM prices ASE";
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
	<!-- ajax/jquery -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- -->
  <script src="mySlides.js"></script>
	<!-- Dette link er ikonet der er i ens browser tab -->
  	<link rel="icon" type="image/png" href="../Billeder/asp.png">
  	<!-- Linker til Skeleton -->
  	<!-- Linker til Fontawsome -->
  	<script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
<!-- Navigation bar -->
 <?php include_once('../header.php') ?>
<br>
<br>
<br>


  <!-- Heading -->

	<div class="container u-full-width">
		<h4><center>Enkelt Print</center>	</h4>
     	
      
	</div>



  <?php 
while($row = mysqli_fetch_assoc($results)){

	?>  
    <!-- View of priser -->
	<div class="row">
		<div class=' offset-by-three columns six columns box2'>
				
				<div class="one-third column">
					<div class="row">
						<img class="u-full-width"  src="<?php echo $row['link']?>">
					</div>
				</div>
			
				
				<div class="two-thirds column greywall">
					<div class="row">
								<br>
						<center><p class="prispakkebillede" style="font-size: 45px"><?php echo $row['name']?> </p></center>
						<center><p class="para" style="font-size: 20px"><?php echo $row['description']?></p> </center>  
						<?php if(empty($row['pris']))
							{
								echo "<center><p class='padding5side' style='font-size: 10px'>". $row['kommentar']. "</p></center> ";
							}else{ 
					echo "<center><p class='u-pull-right padding5side' style='font-size: 20px'>". $row['pris']. ",-</p></center> ";
	
							echo "<center><p class=' padding5side' style='font-size: 12px'>". $row['kommentar']. "</p></center> ";} ?>
						  
					
					</div>
				</div>
      		
		</div>
	
	</div>




 <?php } ?>   

    




 

 <!-- Top part of the footer-->
  <?php include_once('../footer.php') ?>
 

</body>
</html>