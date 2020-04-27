<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../main.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="../normalize.css">
<!-- Dette link er ikonet der er i ens browser tab --> 
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Liste over datoers indstillinger</title>
</head>

<body><br>

<center><h3>Opret kundearkiv</h3></center>
<div class="offset-by-three columns six columns">
<form action="Tableaction.php" method="post">
<lable>Navn og Efternavn</lable>
<input class="u-full-width" type="text" name="name" id="name" placeholder="Navn og Efternavn" required>
<lable>Kundens Email</lable>
<input class="u-full-width" type="email" name="email" id="email" placeholder="Kundens Email" required>
<lable>Kundens Kode 8.cif</lable>
<input class="u-full-width" type="text" name="pass" id="pass" placeholder="Kundens Kode 8.cif" minlength="8" maxlength="8" required>

<input class="u-full-width btn3 btn-success" type="submit" name="submit" id="submit" value="OPRET">	
	<a href="../Admin%20side/Admin.php" class="u-full-width btn3 btn-warning">TILBAGE</a>
	
</form>
</div>
</body>
</html>
