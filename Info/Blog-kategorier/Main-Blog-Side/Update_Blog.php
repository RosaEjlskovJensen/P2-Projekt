<!doctype html>
<?php 
	require_once '../../../Connection.php';
	
	$id = $_GET['id'];

	$query = "SELECT * FROM mainblog WHERE id=" ."'" .$id. "'";
	$results = mysqli_query($connection,$query);
	if(!$results){
	die("could not query the database" .mysqli_error());
	};
	$row = mysqli_fetch_assoc($results);
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
	<link rel="stylesheet" type="text/css" href="../../../main.css">
  <!-- Linker til normalize der styre font størelser på små skærme -->
  <link rel="stylesheet" href=".././../normalize.css">

<title>test</title>
</head>

<body>
	<div class="row">
		<div class="six columns">
			<form name="update" class="" autocomplete="off" method="post" action="Blog_Updater.php?id=<?php echo $row['id']; ?>">
			  <textarea name="content"><?php echo($row['text']) ?> </textarea>
			
			  <input  type="submit" class="btn3 btn-primary" name="update" value="Updater">
			</form>
		</div>
	</div>
</body>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script><script>
	CKEDITOR.replace('content');
	</script>
</html>
<?php mysqli_close($connection); ?>