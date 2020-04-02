<!doctype html>
<?php
require_once '../Connection.php';
session_start();

$_SESSION["email"] = $_POST["email"];

?>

<?php
header("Location: Upload.php"); /* Redirect browser */


$connection->close();


?>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

</body>
</html>
