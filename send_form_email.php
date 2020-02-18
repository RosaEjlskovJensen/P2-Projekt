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
 
    // Mail og besked fra kunde
    $email_to = "Daniel_wow1@live.dk";
    $email_subject = "Besked fra kunde";
 
    function died($error) {
        // Fejlkode
        echo "Beklager, men der er fejl med det indtastede. ";
        echo "Fejlene ses herunder.<br /><br />";
        echo $error."<br /><br />";
        echo "Gå tilbage og ret fejlene.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Beklager, men der er en fejl med det indtastede.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Forkert email.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Forkert fornavn.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Forkert efternavn.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'Beskeden er forkert.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Detaljer nedenunder.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Navn: ".clean_string($first_name)."\n";
    $email_message .= "Efternavn: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefon: ".clean_string($telephone)."\n";
    $email_message .= "Besked: ".clean_string($comments)."\n";
 
// Email header kode
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- Egen succes besked -->

Tak for henvendelsen

<?php
 
}
?>
<!-------------------------------- Her Slutter php'en------------------------------------->

<body>

    <!-- Simpel form til navn, efternavn, telefon nummer og besked. Derudover også en submit knap -->
    <div class="row">
        <div class="four columns offset-by-one-third column">
            <form class="test1" name="contactform" method="post" action="send_form_email.php">
                        <br>
                        <p valign="top">
                            <label for="first_name">Fornavn</label> </p> 
                        <p valign="top">
                            <input class="u-full-width" type="text" name="first_name" maxlength="50" size="38">
                        </p> 
                  
                        <p valign="top">
                            <label for="last_name">Efternavn</label>
                        </p> 
                        <p valign="top">
                            <input class="u-full-width" type="text" name="last_name" maxlength="50" size="38">
                        </p> 
                        <p valign="top">
                            <label for="email">Email</label>
                            </p> 
                        <p valign="top">
                            <input class="u-full-width" type="text" name="email" maxlength="80" size="38">
                        </p> 
                        <p class="kontakt-tekst38" valign="top">
                            <label for="telephone">Telefon nummer</label>
                        </p> 
                        <p valign="top">
                            <input class="u-full-width" type="text" name="telephone" maxlength="30" size="38">
                        </p> 
                        <p valign="top">
                            <label for="comments">Besked</label>
                        </p> 
                        <p valign="top">
                            <textarea class="u-full-width" name="comments" maxlength="1000" cols="25" rows="6"></textarea> </p> 

                        <p colspan="2" style="text-align:center">
                            <input class="u-full-width button-primary" type="submit" value="Submit">  </p> 
            </form>
        </div>
    </div>
    <a href="index.php" class="button">Tilbage</a> 
</body>

</html>