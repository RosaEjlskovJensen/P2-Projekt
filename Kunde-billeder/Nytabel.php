<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
Her kan du skrive kundens email, navn og kode. koden er hvad kunden skal bruge for at se og udvælge sine billeder.
<form action="Tableaction.php" method="post">
<input type="text" name="name" id="name" placeholder="Navn og Efternavn" required>
<input type="email" name="email" id="email" placeholder="Kundens Email" required>
<input type="pass" name="pass" id="pass" placeholder="Kundens Kode 8cif" minlength="8" maxlength="8" required>
<input type="submit" name="submit" id="submit">	
	
</form>
</body>
</html>
