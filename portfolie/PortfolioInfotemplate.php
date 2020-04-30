<!DOCTYPE html>
<?php
$kategori = array("baby", "bryllup", "cv", "familie", "gravid", "konfirmation");
$kategori2 = array("Babyer og Børn", "Bryllup", "CV", "Familie", "Gravid", "Konfirmation");
$item = $_GET['item'];
require_once '../Connection.php';
$query = "SELECT * FROM portfolieinfo WHERE id=$item ";
$results = mysqli_query($connection,$query);
if(!$results){
die("could not query the database" .mysqli_error());
}
while($row = mysqli_fetch_assoc($results)){
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography | Portfolio</title>
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
<style>

  .myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
	  margin-left: 1%;
	  margin-right: 1%;
  }

  .myImg:hover {opacity: 0.7;}

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
  }

  /* Modal Content (image) */
  .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
  }


  /* Add Animation */
  .modal-content, #caption {  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
  }

  @keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
  }

  /* The Close Button */
  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px){
    .modal-content {
      width: 100%;
    }
  }
  
  .billeder{
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 50px;
    margin-right: 50px;
  }
</style>
<body>

<!-- Navigation bar -->
  <?php include_once('../header.php'); ?>



<center>
        <br>
        <br><br>
<br>

         <h1> <?php echo $kategori2[$item]; ?> </h1>
         <a href="Portfolietemplate.php?item=<?php echo $item ?>" class="btn btn2 Portfolieknap1">Se Portfolie</a><br><br>


<style>
	.billede img
	{
		display:block !important;
		max-width: 600px !important;
		max-height: 600px !important;
		width: auto !important;
  		height: auto !important;
	}
</style>
<div class="row"><div class="offset-by-three columns six columns billede"><?php echo $row['Text']?></div></div>
<br><br>


</center>

<?php } ?>



    
    <!-- Booking -->
 <?php include_once('../footer.php'); ?>

</body>
</html>
<?php
  mysqli_close($connection);
?>