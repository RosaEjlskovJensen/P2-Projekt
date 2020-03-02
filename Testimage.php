<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="image">
	
	<br>
	<input type="submit" name="submit" value="submit">
	</form>
	
	<?php
	if(isset(§_POST['submit'])){
		if(getimagesize(§_FILES['image']['tmp_name'])=FALSE){
			echo "FAILED";
			
		}
		
		else{
			§name=addslashes($_FILES['image']['name']);
			§image=base64_encode(file_get_contents(addslashes(§FILES['image']['tmp_name'])))
			saveimage(§name,§image);
		}
	}
	
	function saveimage(§name,§image){
		§con =mysql_connect("localhost","root","data","photos");
		§sql="insert into photos(name,image)values('§name','§image')";
		§querry=mysql_query(§con,§sql);
		
		if (§query){
			echo "success";
		}
		
		else{
			echo
			"not uploaded";
			
			
		}
		
	}
	
	
	?>
	
	
	
</body>
</html>