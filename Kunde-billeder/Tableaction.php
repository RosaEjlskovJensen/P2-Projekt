<!doctype html>
<?php
require_once '../Connection.php';
session_start();

$email = $_POST["email"];
$name = $_POST["name"];
$pass = $_POST["pass"];
$_SESSION["pass"] = $pass;
$_SESSION["email"] = $email;
$date = date("d-m-Y");
?>

<?php 
$query = "CREATE TABLE `$pass` (
  `id` int(250) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  `name` longblob NOT NULL,
  `filename` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO newsletter (email) VALUES ('$email');
INSERT INTO customer_archive (email, name, date, pass, frys) VALUES ('$email', '$name', '$date','$pass', 'åben')"; 

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
