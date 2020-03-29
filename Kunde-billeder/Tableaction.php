<!doctype html>
<?php
require_once '../Connection.php';
session_start();

$email = $_POST["email"];
$name = $_POST["name"];
$_SESSION["email"] = $email;
$date = date("d-m-Y");
?>

<?php 
$query = "CREATE TABLE `$email` (
  `id` int(250) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  `name` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO newsletter (email) VALUES ('$email');
INSERT INTO customer_archive (email, name, date) VALUES ('$email', '$name', '$date')"; 

/* en query der tilføjer emailen til en liste, så ledes man kan se listen over arkiver der er lavet */

if ($connection->multi_query($query) === TRUE) {
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
