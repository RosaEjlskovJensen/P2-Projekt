<!DOCTYPE html>
<?php
//database connection
require_once '../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}
$query = "SELECT * FROM mainblog";
$results = mysqli_query($connection,$query);

if(!$results){
   die("could not query the database" .mysqli_error());
}

?>
<html>
<head>		
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography | Blog</title>
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

	
<!--
Lav en table med disse rækker:

id
img
title
description
body
*published (kun måske - hvis der er brug for, at det kun er dem, der er published, som kan ses på websitet)

-->
	
<!-- About blog -->
	<section class="blog">
    	<div class="container">
      		<div class="row">
         		<div>
            		<center><h5>Blog</h5></center>
				</div>
      		</div>
		</div>
	</section>
		
	<!-- View of blogposts -->
	<section class='blogpost'>
		<section class="priser"> 
<div class=' offset-by-three columns six columns'>
    
          <?php 
while($row = mysqli_fetch_assoc($results)){

	?>  
          
            <div class='row box'>
				<div class='u-full-width'>
	 <center>
                
               <div class="box1">                                                       
			     <?php echo $row['text']?>
                  </div></div></div>
     </center>
				
			
	

     
 <?php } ?>
 	</div>
  	</div>
       </section> 

		<div class="three columns">
			<center>
			
			<div class="separator padding5side">Kategorier</div><br>
			</center>
			<div class="padding5side">
			<div class="row"><a href="Blog-kategorier/Kategoritemplate.php?item=0" class="u-full-width"><p>FOTOGRAFERING</p></a></div>
			<div class="row"><a href="Blog-kategorier/Kategoritemplate.php?item=1" class="u-full-width"><p>BILLEDE OPHÆNG</p></a></div>
			<div class="row"><a href="Blog-kategorier/Kategoritemplate.php?item=2" class="u-full-width"><p>KUNDERS BLOGINDLÆG</p></a></div>
			<div class="row"><a href="Blog-kategorier/Kategoritemplate.php?item=3" class="u-full-width"><p>PRODUKTER</p></a></div>
			<div class="row"><a href="Blog-kategorier/Kategoritemplate.php?item=4" class="u-full-width"><p>SÅDAN TAGER DU BEDRE BILLEDER</p></a></div>
			<div class="row"><a href="Blog-kategorier/Kategoritemplate.php?item=5" class="u-full-width"><p>TIPS OG TRICKS</p></a></div>
			</div>

			
		</div>
	</section> <br> 



<!-- Top part of the footer-->
  <?php include_once('../footer.php'); ?>
	</body>
	</html>
	<?php mysqli_close($connection); ?>
