<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- Linker til Skeleton -->
<link rel="stylesheet" href="stylesheet.css">
<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="normalize.css">
<!-- Dette link er ikonet der er i ens browser tab -->
<link rel="icon" type="image/png" href="INDSET IKON HER">
<title>Kontakt</title>
	</head>
	<!-------------------------------- Her starter php'en------------------------------------->
<?php
if(isset($_POST['email'])) {
 
    // Din email og beskeden
    $email_to = "Daniel_wow1@live.dk";
    $email_subject = "Henvendelse fra kunde";
 
    function died($error) {
        // Fejl kode 
        echo "Vi beklager meget, men der blev fundet fejl med den formular, du indsendte. ";
        echo "Disse fejl vises under.<br /><br />";
        echo $error."<br /><br />";
        echo "Gå tilbage og ret disse fejl.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Vi beklager, men det ser ud til at være et problem med den formular, du har sendt.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Den angivne e-mail-adresse ser ikke ud til at være gyldig.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Fornavnet du intastede ser ikke ud til at være gyldigt.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Efternavnet du har intastet ser ikke ud til, at være gyldigt.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'De kommentarer, du indtastede, ser ikke ud til at være gyldige.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Detaljer herunder.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
  $email_message .= "Navn: ".clean_string($first_name)."\n";
    $email_message .= "Efternavn: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefon: ".clean_string($telephone)."\n";
    $email_message .= "Besked: ".clean_string($comments)."\n";
	
// Email header
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- Responsen når du har trykket submit kommer frem, hvis der er succes. Det der kommer frem skrives herunder -->
 
Tak for din henvendelsen, du hører fra os hurtigst muligt.
<?php
 
}
?>
<!-------------------------------- Her Slutter php'en------------------------------------->
	
<body>
	
	<!-- Simpel form til navn, efternavn, telefon nummer og besked. Derudover også en submit knap -->
<div class="row">
<div class="four columns offset-by-one-third column">
<form class="test1" name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
<br>
 <td valign="top">
  <label for="first_name">Fornavn</label>
 </td>
 <td valign="top">
  <input class="u-full-width" type="text" name="first_name" maxlength="50" size="38">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Efternavn</label>
 </td>
 <td valign="top">
  <input class="u-full-width"  type="text" name="last_name" maxlength="50" size="38">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email</label>
 </td>
 <td valign="top">
  <input class="u-full-width" type="text" name="email" maxlength="80" size="38">
 </td>
</tr>
<tr>
 <td class="kontakt-tekst38" valign="top">
  <label for="telephone">Telefon nummer</label>
 </td>
 <td valign="top">
  <input class="u-full-width"  type="text" name="telephone" maxlength="30" size="38">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Besked</label>
 </td>
 <td valign="top">
  <textarea class="u-full-width" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input class="u-full-width button-primary" type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
	</div>
</div>
	
</body>
</html>