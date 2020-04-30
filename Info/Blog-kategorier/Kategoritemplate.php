<!DOCTYPE html>
<?php
$kategori2 = array("FOTOGRAFERING", "BILLEDE OPHÆNG", "KUNDERS BLOGINDLÆG", "PRODUKTER", "SÅDAN TAGER DU BEDRE BILLEDER", "TIPS OG TRICKS");
$kategori = array("fotografering", "billedeophæng", "kundersblog", "produkter", "bedrebilleder", "tot");
$item = $_GET['item'];


//database connection
require_once '../../Connection.php';
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}
$query = "SELECT * FROM $kategori[$item]";
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
  <link rel="icon" type="image/png" href="../../billeder/asp.png">
  <!-- Linker til Fontawsome -->
  <script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="../../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../../normalize.css">
</head>
<style>

    .box1 img{
        width: 600px !important;
        height: 600px !important;
}
    
    <style>
    
    .u-pull-left {
        margin-left: 20px;
    }
    
    .box {
        margin-bottom: 20px;
}
    .para {
        padding-top:20px;
}
</style>
<body>
	
<!-- Navigation bar -->
<?php include_once('../../header.php'); ?>	
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
            		<center><h5><?php echo $kategori2[$item] ?></h5></center>
				</div>
      		</div>
		</div>
	</section>
		
<!-- View of blogposts -->
    
   
    
   <section class="priser"> 
<div class=' offset-by-three columns six columns'>
    
          <?php 
while($row = mysqli_fetch_assoc($results)){

	?>  
          
            <div class='row box'>
				<div class='u-full-width'>
	 <center>
                
               <div class="box1">                                                       
			     <?php echo $row['Text']?>
                  </div></div></div>
     </center>
				
			
	

     
 <?php } ?>
 	</div>
  	</div>
       </section> 
    
    
    
    
    
<!-- Top part of the footer-->
  <?php include_once('../../footer.php'); ?>
	</body>
	</html>
	<?php mysqli_close($connection); ?>

