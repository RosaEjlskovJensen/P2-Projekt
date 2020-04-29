<!DOCTYPE html>
<?php
session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
	{
		header("Location: Loginside.php");
		
	}
	$item = $_GET['item'];	
?>
<html>
 <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography</title>
	<!-- ajax/jquery -->
 
	<!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Fontawsome -->
  
  <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href="../normalize.css">

<title>test</title>
</head>

    <body>
        
    
		<div class="six columns">	
			
				<h2> Vælg Kategori <h2>
				<a href="Addprice.php?item=<?php echo $item ?>" class="btn3 btn-primary u-full-width">TILFØJ PAKKE</a><br>
				<a href="Editprice.php?item=<?php echo $item ?>" class="btn3 btn-primary u-full-width">REDIGER PAKKE</a><br>
				
                <a href="../Admin side/Admin.php" class="btn3 btn-warning u-full-width">TILBAGE</a>
					
			
		</div>
	
  </body>
    
</html>