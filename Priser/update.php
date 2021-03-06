<?php
require_once '../Connection.php';

if(isset($_GET['conid'])){
	$item = $_GET['item'];
	$kategori = array('prices','prices-generel','prices-bryllup','prices-konfirmation')	;	
	$id=htmlentities($_GET['conid']);
	
	if(!empty($id)){
		
		$query = "SELECT * FROM `$kategori[$item]` WHERE id= $id ";
		
		$results = mysqli_query($connection,$query);
		
		if(!$results){
			die("could not query the database" .msqli_error());
		}
		
		$row = mysqli_fetch_assoc($results);
	
	}
}

?>


<!doctype html>
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

<h1>Rediger</h1>

<!-- Form der kan reditere dataen i de forskellige pakker. Når du trykker på knappen til slut, sendes man videre til siden updatedata.php -->

<form name="addform" id="addform" method="post" action="updateData.php?item=<?php echo $item ?>" autocomplete="on">
	
  <div>
    <label for="addName">Pakke</label>
    <input type="text" name="Name" id="Name" required size="40" maxlength="60" value="<?php echo $row['name']?>">  </div>
  
  <div>
    <label for="description">Info</label>
    <textarea name="description" id="description" cols="30" rows="1"><?php echo $row['description']?> </textarea>

  </div>
    <div>
  <label for="img">Indsæt billede URL:</label>
  <input name="link" type="text" required value="<?php echo $row['link']?>">
</div>
   <div>
    <label for="kommentar">Pris</label>
    <input type="pris" name="pris" id="pris" value="<?php echo $row['pris']?>">  </div>
    
    <label for="kommentar">Kommentar</label>
    <input type="kommentar" name="kommentar" id="kommentar" maxlength="200" value="<?php echo $row['kommentar']?>">  </div>
  

  
  
  	<input class="btn3 btn-success" type="submit" id="addBtn" value="OPDATER">
	
  <input type="hidden" name="id" value="<?php echo $id?>">
</form>

<a href="Editprice.php?item=<?php echo $item ?>" class="btn3 btn-warning">TILBAGE</a>
</body>
</html>

<?php
	mysqli_close($connection);
?>