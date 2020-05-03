<!DOCTYPE html>
<?php 
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


<!-- Simpel form til at uploade pakker. Action siden som laver handlingen hedder insterprice.php -->
<div class=" offset-by-four columns four columns">
<h1>Tilføj ny pakke</h1>
<form name="addform" id="addform" method="post" action="Insertprice.php?item=<?php echo $item ?>" autocomplete="on" enctype="multipart/form-data">
	
  <div>
    <label for="Name" >Pakke navn</label>
    <input type="text" name="name" id="name" maxlength="60" required class="u-full-width">
  </div>
  
  <div>
    <label for="description">Pakke info</label>
    <textarea name="description" id="description" rows="3" required class="u-full-width"></textarea>

  </div>
    <div>
    <label for="Pris">Pakke pris(hvis ingen, så lad den stå tom)</label>
    <input type="text" name="Pris" id="name" maxlength="60" class="u-full-width">
  </div>
    
    <div>
  <label for="img">Indsæt billede URL:</label>
  <input name="link" type="text" required class="u-full-width">
</div>
    <div>
    <label for="kommentar">Kommentar i bunden</label>
    <input type="text" name="kommentar" id="kommentar" maxlength="200" class="u-full-width">
  </div>
  <div>
  	<input class="btn3 btn-success u-full-width" type="submit" id="" value="TILFØJ">
	</div>
</form>
<a href="../Admin%20side/Admin.php" class="btn3 btn-warning four columns ">TILBAGE</a>
	</div>


</body>
</html>
