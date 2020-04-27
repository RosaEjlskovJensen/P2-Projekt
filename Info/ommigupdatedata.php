<?php
require_once '../Connection.php';

if(isset($_GET['conid'])){
	
	$id=htmlentities($_GET['conid']);
	
	if(!empty($id)){
		
		$query = "SELECT * FROM ommig WHERE id= $id ";
		
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
<meta charset="utf-8">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../main.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<!-- Dette link er ikonet der er i ens browser tab --> 
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Liste over datoers indstillinger</title>
</head>


<body>

<!-- Form der kan reditere dataen i de forskellige pakker. Når du trykker på knappen til slut, sendes man videre til siden updatedata.php -->

<form name="addform" id="addform" method="post" action="ommigupdate.php" autocomplete="on">
	
  <div>
    <label for="addName">om mig øverst</label>
     <br>

    <textarea name="Name" id="Name" cols="30" rows="10"><?php echo $row['name']?> </textarea></div><br>
  
  <div>
    <label for="description"> om mig nederst</label><br>

    <textarea name="description" id="description" cols="30" rows="10"><?php echo $row['description']?> </textarea>

  </div>
  

  
  
  	<input type="submit" class="btn3 btn-success" value="OPDATER">
	
  <input type="hidden" name="id" value="<?php echo $id?>">
</form>

<a href="../Admin side/Admin.php" class="btn3 btn-warning">TILBAGE</a>
</body>
</html>

<?php
	mysqli_close($connection);
?>