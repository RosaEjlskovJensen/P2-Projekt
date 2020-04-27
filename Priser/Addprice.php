<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add price</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="..//burgermenujs.js"></script>
 <!-- Dette link er ikonet der er i ens browser tab -->
    <link rel="icon" type="image/png" href="INDSET IKON HER">
    <!-- Linker til Skeleton -->    
    <!-- <link rel="stylesheet" href="..//stylesheet.css"> -->
    <!-- Linker til normalize der styre font størelser på små skærme -->
    <link rel="stylesheet" href="..//normalize.css">
  <!-- Linker til Fontawsome -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Linker til Stylesheet -->
  <link rel="stylesheet" href="..//stylesheet.css">
</head>

<body>

<h1>Tilføj pakke</h1>
<!-- Simpel form til at uploade pakker. Action siden som laver handlingen hedder insterprice.php -->

<form name="addform" id="addform" method="post" action="Insertprice.php" autocomplete="on" enctype="multipart/form-data">
	
  <div>
    <label for="Name">Pakke</label>
    <input type="text" name="name" id="name" maxlength="60" required>
  </div>
  
  <div>
    <label for="description">Info</label>
    <textarea name="description" id="description" cols="30" rows="1" required></textarea>

  </div>
    <div>
    <label for="Pris">Pris</label>
    <input type="text" name="Pris" id="name" maxlength="60">
  </div>
    
    <div>
  <label for="img">Indsæt billede URL:</label>
  <input name="link" type="text" required>
</div>
    <div>
    <label for="kommentar">Kommentar</label>
    <input type="text" name="kommentar" id="kommentar" maxlength="200">
  </div>
  <div class="addBtnDiv">
  	<input type="submit" id="addBtn" value="tilføj">
	</div>
</form>

<a href="../Admin%20side/Admin.php" class="button">Tilbage</a>
</body>
</html>
