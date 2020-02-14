<!doctype html>
<?php
session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
	{
		header("Location: Loginside.php");
		
	}
		
?>
		
<html>
<head>
<meta charset="utf-8">
<title>test</title>
</head>

<body>
	<h2> Du er logget ind <h2>
</body>
</html>