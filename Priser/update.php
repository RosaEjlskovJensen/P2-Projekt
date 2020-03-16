<?php
require_once 'Connection.php';

if(isset($_GET['conid'])){
	
	$id=htmlentities($_GET['conid']);
	
	if(!empty($id)){
		
		$query = "SELECT * FROM prices WHERE id= $id ";
		
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
<title>Priser</title>
</head>

<body>

<h1>Rediger</h1>



<form name="addform" id="addform" method="post" action="updateData.php" autocomplete="on">
	
  <div>
    <label for="addName">Pakke</label>
    <input type="text" name="Name" id="Name" required size="40" maxlength="60" value="<?php echo $row['name']?>">  </div>
  
  <div>
    <label for="description">Info</label>
    <textarea name="description" id="description" cols="30" rows="1"><?php echo $row['description']?> </textarea>

  </div>
  

  
  <div class="addBtnDiv">
  	<input type="submit" id="addBtn" value="update">
	</div>
  <input type="hidden" name="id" value="<?php echo $id?>">
</form>


</body>
</html>

<?php
	mysqli_close($connection);
?>