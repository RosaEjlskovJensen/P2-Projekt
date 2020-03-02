<!doctype html>
<html>
<head>
<styles>
	#content{
	width: 40;
	margin: 20px auto;
	border: 1px solid #cbcbcb;

	}
	form{
	width: 50%;
	margin:20px auto;
	
	}
	form div{
	margin-top: 5px;
	
	}
	
	#img_div{
	width: 80px;
	padding: 5px;
	margin: 15px auto;
	border: 1px solid #cbcbcb;
	
	}
	
	img{
	
	float: left;
	margin: 5px;
	width: 300px;
	height: 140px
	}
	
	</styles>
<meta charset="UTF-8">
<title>Image uploads</title>
</head>
<body>
	
	<div id="content">
	<form method="post" action="upload.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
		<input type ="file" name="image">
		
		</div>
		<div>
		<textarea name="text" cols="40" rows="4" placeholder="say something about this picture"></textarea>
		</div>
		</form>
	
	
	
	</div>
</body>
</html>