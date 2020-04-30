<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amalie Sandgaard | Photography | Kontakt</title>
	<!-- ajax/jquery -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- -->
  <script src="mySlides.js"></script>
	<!-- Dette link er ikonet der er i ens browser tab -->
  	<link rel="icon" type="image/png" href="../Billeder/asp.png">
  	<!-- Linker til Skeleton -->
  	<!-- Linker til Fontawsome -->
  	<script src="https://kit.fontawesome.com/600e3ecdcb.js" crossorigin="anonymous"></script>
  	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>

<style>
.kontaktformular
{
    display: block;
    text-align: center;
}
form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}
    .lokation {
        float: right;
        padding-right:10%;
        padding-top: 5%;
}
    .informationer {
        float: right;
        width: 50%;
        display: inline-block;
}
    .kontaktinformation {
        display: inline-block;
        padding-left: 10%;
}
    
    .kontaktinfvenstre {
        display: inline-block;
        float:left;
}
    
    .kontaktinfvenstre {
        display: inline-block;
        float:left;
}
    .kontaktbillede {
        display: inline-block;
        float:left;
        padding-left: 20px;
}
    .kontaktikon {
        height: 120px;
}
    
    .formkontakt {
        border-style: solid;
        padding: 5% 10% 0 10%;
        color: #8b752e;
}
    
    .kontaktnavn {
        color: black;
}
    
    .my-icon {
    vertical-align: middle;
}

.my-fancy-container {
    border: 1px solid #ccc;
    border-radius: 6px;
    display: inline-block;
    margin: 60px;
    padding: 10px;
}
    

</style>

    <?php
if(isset($_POST['email'])) {
 
    // Din email og beskeden
    $email_to = "casper.roskaer@gmail.com";
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
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// Email header
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- Responsen når du har trykket submit skrives herunder -->
 
Tak for henvendelsen, du hører fra os hurtigst muligt.
<?php
 
}
?>
    
<body>

<!-- Navigation bar -->
<?php include_once('../header.php') ?>


  <!-- Heading -->
<section class="section_heading">
	<div class="container u-full-width">
		<h5><center>Skriv til mig!
		</center>	
		</h5>
	</div>
</section>
<div class="kontaktformular">   
<form name="contactform" method="post" action="Kontakt.php" class="formkontakt">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name" class="kontaktnavn">Fornavn</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name" class="kontaktnavn">Efternavn</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email" class="kontaktnavn">Email</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone" class="kontaktnavn">Telefon nummer</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments" class="kontaktnavn">Besked</label>
 </td>
 <td valign="top">
  <textarea style="width: 260px;" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input class='btn btn2' type="submit" value="Send">
 </td>
</tr>
</table>
</form>
</div>    
<div>
    
    <br>

<div class="kontaktinformation">
    <div class="kontaktbillede">
        <div class="kontaktikon"> 
           <span class='my-icon icon-file-text'> <i class="fas fa-map-marker-alt fa-2x"></i></span><span class='my-text'> <a href="https://www.google.com/maps/place/Amalie+Sandgaard+Photography/@57.0494046,9.9172136,17z/data=!3m1!4b1!4m5!3m4!1s0x464933a662f306d5:0x63fee768645596b7!8m2!3d57.0494017!4d9.9194023" class="text1" target="_blank"> Adresse: Bispensgade 13, 1.2</a></span>   
        </div>
        
        <div class="kontaktikon"> 
             <span class='my-icon icon-file-text'><i class="fas fa-phone fa-2x"></i></span><span class='my-text'> <a href="tel:+4531514555" class="text1">Telefonnummer: +45 31 51 45 55</a>  </span>
        </div>
    
        <div class="kontaktikon"> 
            <span class='my-icon icon-file-text'><i class="fas fa-envelope fa-2x"></i></span><span class='my-text'><a href="mailto:Amaliesandgaard@live.dk" class="text1" target="_blank">Email: Amaliesandgaard@live.dk</a></span>
        </div>
    
        <div class="kontaktikon"> 
           <span class='my-icon icon-file-text'><i class="fab fa-facebook-f fa-2x"></i></span><span class='my-text'> <a href="https://www.facebook.com/amaliesandgaardphotography" class="text1" target="_blank">Facebook: Amalie Sandgaard Photography</a>  </span>
        </div>
    
        <div class="kontaktikon"> 
            <span class='my-icon icon-file-text'><i class="fab fa-instagram fa-2x"></i></span><span class='my-text'> <a href="https://www.instagram.com/amalie_sandgaard_photography/" class="text1">Instagram: Amalie_sandgaard_photography</a> </span>
        </div>
    
        <div class="kontaktikon"> 
            <span class='my-icon icon-file-text'><i class="fas fa-clock fa-2x"></i></span><span class='my-text'>  Åbningstider: Altid efter aftale </span>
        </div>
    </div>
</div>

    

<div class="lokation"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.129099026749!2d9.917400615981306!3d57.049329380919936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4649328c9bc379a3%3A0x97ceb14dd16f56d2!2sBispensgade%2013%2C%209000%20Aalborg!5e0!3m2!1sda!2sdk!4v1582824343072!5m2!1sda!2sdk" width="500px" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
   
</div>
    
    <br>
   <!-- Top part of the footer-->
 <?php include_once('../footer.php') ?>
</body>
</html>
