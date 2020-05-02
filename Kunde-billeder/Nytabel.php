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
<form action="Tableaction.php" method="post" name="myform">
<input type="hidden" name="length" value="8">
<lable>Navn og Efternavn</lable>
<input class="u-full-width" type="text" name="name" id="name" placeholder="Navn og Efternavn" required>
<lable>Kundens Email</lable>
<input class="u-full-width" type="email" name="email" id="email" placeholder="Kundens Email" required>
<lable>Kundens Kode 8.cif</lable>
<input class="u-full-width" type="text" name="pass" id="pass" placeholder="Kundens Kode 8.cif" minlength="8" maxlength="8" required>
<input type="button" class="btn3 btn-primary" value="GENERER NY KODE" onClick="generate();" tabindex="2">

<input class="u-full-width btn3 btn-success" type="submit" name="submit" id="submit" value="OPRET">	
	<a href="../Admin%20side/Admin.php" class="u-full-width btn3 btn-warning">TILBAGE</a>
	
</form>
</div>

<!---------- Kode generetor --------->
<script>
	function randomPassword(length) {
    var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOP1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    return pass;
}

function generate() {
    myform.pass.value = randomPassword(myform.length.value);
}
	
	</script>
</body>
</html>
