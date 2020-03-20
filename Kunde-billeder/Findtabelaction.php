<!doctype html>
<?php
require_once '../Connection.php';
session_start();

$email = $_POST["email"];
$_SESSION["email"] = $email;
?>

<?php 

header("Location: Upload.php"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;


$connection->close();


?>
<html>
<head>
<meta charset="utf-8">
<title><?php $email ?></title>
</head>

<body>

</body>
</html>
