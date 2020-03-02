<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Amalie Sandgaard | Photography</title>
  <!-- Burgermenu -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="burgermenujs.js"></script>
  <!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Skeleton -->
  <!-- Linker til Fontawsome -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Linker til Stylesheet -->
  <link rel="stylesheet" href="stylesheet2.css">
  <style>
    html {
      overflow: scroll;
      overflow-x: hidden;
    }
    ::-webkit-scrollbar {
      width: 0px;  /* Remove scrollbar space */
      background: transparent;  /* Optional: just make scrollbar invisible */
    }

    .navbar{
      position: fixed;
      z-index: 99;
      opacity: 0.98;
      top: 0;
    }

    .section_footer{
     /*  */
   }

   .showcase_picture{
    max-width: 100%;
    height: 91.5vh;
    width: 100vw;
  }

  .img_logo{
    max-width: 20%;
    height: auto;
  }

  .section_anmeldelser{
    max-width: 80%;
    height: 76vh;
  }

  .section_galleri_row1{
    max-width: 100%;
    height: 62.5vh;
  }

  .link_picture{
    max-height: 99%;
    max-width: 99%;
  }  

  /* Slideshow */

  /* Slideshow container */
  .slideshow-container {
    position: relative;
    background: transparent;
  }

  /* Slides */
  .mySlides {
    display: none;
    padding: 80px;
    text-align: center;
  }

  /* The dot/bullet/indicator container */
  .dot-container {
    text-align: center;
    padding: 20px;
    background: #e3e3dd;
  }

  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #8b752e;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  /* Add a background color to the active dot/circle */
  .active, .dot:hover {
    background-color: #2D2926;
  }

  /* Add an italic font style to all quotes */
  q {font-style: italic;}

  /* Add a blue color to the author */
  .author {color: #8b752e;}


  .img_frost {
    opacity: 1;
    transition: .5s ease;
    background-position: center;
  }

  .middle {
    transition: .5s ease;
    opacity: 0;
  }

  .container_img_frost:hover .img_frost {
    opacity: 0.3;
  }

  .container_img_frost:hover .middle {
    opacity: 1;
  }

</style>

<!-- Linker til normalize der styre font størelser på små skærme -->
<link rel="stylesheet" href="normalize.css">
</head>
<body>
  <!-- Navigations Sektion -->

  <!--Navigation burger start-->
  <div id="burger" class="burger">
    <div></div>
    <div></div>
    <div></div>
  </div>
  <!--Navigation burger slut-->

  <nav class="u-full-width navbar">
    <div class="two.columns">
      <a href="index.php"><img class="img_logo" src="billeder/AmalieSandgaardPhotography_LOGO.png"></a>
      <li><a href="Admin side/Loginside.php" class="button">Login</a></li>
      <li><a href="send_form_email.php" class="button">Kontakt</a></li>
      <li><a href="Booking-system-Casper/index.php" class="button">Booking</a></li>
      <li><a href="Blog_Page.php" class="button">Nyheder</a></li>
      <li><a href="nyhedsbrev.php" class="button">Priser</a></li>
      <li><a href="Om_Mig.php" class="button">Om Mig</a></li>
      <li><a href="My_Pictures.php" class="button">Portfolie</a></li>
    </div>
  </nav>

        <!--Navigation punkter ^ (udskift når siderne er oprettet)
            
            Logo:      <li><a href="index.php" class="logo"><imgsrc="billeder/asp.png"></a></li>
            Portfolie: <li><a href="Portfolie.php" class="button">Portfolie</a></li>
            Om Mig:    <li><a href="Om_Mig.php" class="button">Om Mig</a></li>
            Priser:    <li><a href="Priser.php" class="button">Priser</a></li>
            Blog:      <li><a href="Blog_Page.php" class="button">Blog</a></li>
            Booking:   <li><a href="Booking.php" class="button">Booking</a></li>
            Kontakt:   <li><a href="Kontakt.php" class="button">Kontakt</a></li>
        -->

      <!-- Showcase Sektion  -->
      <section class="section_showcase">
        <div class="u-full-width">
          <img class="showcase_picture" src="billeder/AmalieSandgaardPhotography_LOGO.png" width="100%">
        </div>
      </section>

      <br>

        <section class="section_galleri_row1">
          <div class="container">
            <div class="row">
              <div class="u-full-width">
              <center><h1>Hvem fotografer jeg?</h1></center>
            </div></div>
            <div class="row">
              <div class="one-third column">
                <div class="container_img_frost">
                <a href="send_form_email.php"><img class="link_picture img_frost" src="billeder/FBBBB1.jpg"><div class="middle"><div class="overlay"><img class="link_picture" src="billeder/overlay_frost_baby.png"></div></div></a>
              </div>
              </div>
              <div class="container_img_frost">
              <div class="one-third column">
                <a href="send_form_email.php"><img class="link_picture img_frost" src="billeder/FBBB1.jpg"><div class="middle"><div class="overlay"><img class="link_picture" src="billeder/overlay_frost_baby.png"></div></div></a></div>
              </div>
              <div class="container_img_frost">
              <div class="one-third column">
                <a href="send_form_email.php"><img class="link_picture img_frost" src="billeder/FFB1.jpg"><div class="middle"><div class="overlay"><img class="link_picture" src="billeder/overlay_frost_baby.png"></div></div></a></div>
              </div>
            </div>
          </div>     
        </section>


        <!-- Galleri Sektion

        <section class="section_galleri_row1">
          <div class="container">
            <div class="row">
              <div class="u-full-width">
              <center><h1>Hvem fotografer jeg?</h1></center>
            </div></div>
            <div class="row">
              <div class="one-third column">
                <div class="container_img_frost">
                <a href="send_form_email.php"><img class="link_picture img_frost" src="billeder/FBBBB1.jpg"><div class="middle"><div class="overlay"><img class="link_picture" src="billeder/overlay_frost_baby.png"></div></div></a>
              </div>
              </div>
              <div class="container_img_frost">
              <div class="one-third column">
                <a href="send_form_email.php"><img class="link_picture img_frost" src="billeder/FBBB1.jpg"><div class="middle"><div class="overlay"><img class="link_picture" src="billeder/overlay_frost_baby.png"></div></div></a></div>
              </div>
              <div class="container_img_frost">
              <div class="one-third column">
                <a href="send_form_email.php"><img class="link_picture img_frost" src="billeder/FFB1.jpg"><div class="middle"><div class="overlay"><img class="link_picture" src="billeder/overlay_frost_baby.png"></div></div></a></div>
              </div>
            </div>
          </div>     
        </section>
 -->


<br>
<br>
<br>
<br>
<br>

<!-- Info Sektion -->
<section class="section_footer">
  <div class="u-full-width">
    <center>
      <p class="footer"> &copy; <?php echo date("Y"); ?> | Amalie Sandgaard Photography | CVR: 38 02 70 34  </p>
    </center>
  </div>
</section>

</body>
</html>