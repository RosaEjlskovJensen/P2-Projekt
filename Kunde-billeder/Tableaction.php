<!doctype html>
<?php
require_once '../Connection.php';
session_start();

$email = $_POST["email"];
$_SESSION["email"] = $email;
?>

<?php 
$query = "CREATE TABLE `$email` (
  `id` int(250) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  `name` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1"; 

//$query = "ALTER TABLE hest RENAME TO $email;";
if ($connection->query($query) === TRUE) {
header("Location: Upload.php"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
;
} else {
    echo "Error creating table: " . $connection->error;
}

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
