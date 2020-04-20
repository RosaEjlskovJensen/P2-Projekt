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
  <nav class="nav">
    <a href="../index.php"><img class="img_logo" src="../Billeder/AmalieSandgaardPhotography_LOGO.png"></a>
    <input type="checkbox" id="menu_btn" class="menu_btn" />
    <label class="menu_icon" for="menu_btn"><span class="nav_icon"></span></label>
    <ul class="menu">
      <div class="nav_dropdown">
        <button class="btn_dropdown">Portfolio <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../portfolie/Portfolietemplate.php?item=0" class="button">Baby</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=1" class="button">Børn</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=2" class="button">Familie</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=3" class="button">Konfirmation</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=4" class="button">Bryllup</a></li>
          <li><a href="../portfolie/Portfolietemplate.php?item=5" class="button">Gravid</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Info <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../Info/ommig.php" class="button">Om Mig</a></li>
          <li><a href="../Info/blog.php" class="button">Blog</a></li>
          <li><a href="../Info/blog.php" class="button">Nyheder</a></li>
          <li><a href="../Info/andmeldelser.php" class="button">Anmeldelser</a></li>
          <li><a href="../Info/blog.php" class="button">Anmeldeser</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Priser <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../Priser/Priser.php" class="button">Pakker</a></li>
          <li><a href="../Kunde-billeder/FindTabel-kunde.php" class="button">Digital Print</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Booking <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../Booking-system-Casper/index.php" class="button">Kalender</a></li>
          <li><a href="../Admin side/Loginside.php" class="button">Login</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown">Kontakt <i class="fas fa-chevron-down"></i></button>
          <div class="dropdown-content">
          <li><a href="../Kontakt/Kontakt.php" class="button">Kontakt</a></li>
          <li><a href="../Kontakt/FAQ.php" class="button">FAQ</a></li>
          <li><a href="../Kontakt/Privateterms.php" class="button">Privatlivspolitik</a></li>
          <li><a href="../Kontakt/Terms_conditions.php" class="button">Vilkår & Betingelser</a></li>
            </div>
            </div>
      <div class="nav_dropdown">
        <button class="btn_dropdown"></button>
          <div class="dropdown-content">
          </div>
      </div>
    </ul>
  </nav>



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
           <span class='my-icon icon-file-text'> <i class="fas fa-map-marker-alt fa-2x"></i></span><span class='my-text'>  Adresse: Bispensgade 13, 1.2 </span>   
        </div>
        
        <div class="kontaktikon"> 
             <span class='my-icon icon-file-text'><i class="fas fa-phone fa-2x"></i></span><span class='my-text'>  Telefonnummer: +45 31 51 45 55 </span>
        </div>
    
        <div class="kontaktikon"> 
            <span class='my-icon icon-file-text'><i class="fas fa-envelope fa-2x"></i></span><span class='my-text'>  Email: Amaliesandgaard@live.dk   </span>
        </div>
    
        <div class="kontaktikon"> 
           <span class='my-icon icon-file-text'><i class="fab fa-facebook-f fa-2x"></i></span><span class='my-text'>  Facebook: Amalie Sandgaard Photography </span>
        </div>
    
        <div class="kontaktikon"> 
            <span class='my-icon icon-file-text'><i class="fab fa-instagram fa-2x"></i></span><span class='my-text'>  Instagram: Amalie_sandgaard_photography</span>
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
  <section class="section_topfooter">
    <div class="container">
      <div class="u-full-width">
        <div class="row">
          <div class="six columns">
            <center>
            <p style="font-size: 16px">KONTAKTOPLYSNINGER</p>
            <p style="font-size: 15px">Amalie Sandgaard<br>CVR: 38 02 70 34<br>+45 31 51 45 55<br>amaliesandgaardphotography@hotmail.com</p>
            </center>
          </div>
          <div class="two columns">
            <center>
            <p style="font-size: 16px">NYTTIGE LINKS</p>
            <a style="font-size: 15px" href="#" >Privatlivspolitik</a><br>
            <a style="font-size: 15px" href="#">Vilkår & Betingelser</a>
            </center>
          </div>
          <div class="two columns">
            <center>
            <p style="font-size: 16px">FØLG MIG PÅ</p>
            <a href="https://www.facebook.com/amaliesandgaardphotography/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a><br>
            <a href="https://www.instagram.com/amalie_sandgaard_photography/?hl=da" target="_blank"><i class="fab fa-instagram fa-2x"></i></a><br>
            </center>
          </div>
        </div>
      </div>
    </div>
  </section> 
 <!--Bottom part of the footer -->
  <section class="section_bottomfooter">
    <div>
      <center>
        <p style="font-size: 15px" class="footer"> &copy; Copyright <?php echo date("Y"); ?> | Amalie Sandgaard Photography | All Rights Reserved</p>
      </center>
    </div>
  </section>
</body>
</html>
