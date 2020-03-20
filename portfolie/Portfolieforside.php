<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolie</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src=></script>
 <!-- Dette link er ikonet der er i ens browser tab -->
    <link rel="icon" type="image/png" href="INDSET IKON HER">
    <!-- Linker til Skeleton -->    
    <!-- <link rel="stylesheet" href="..//stylesheet.css"> -->
    <!-- Linker til normalize der styre font størelser på små skærme -->
    <link rel="stylesheet" href="..//normalize.css">
  <!-- Linker til Fontawsome -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Linker til Stylesheet -->
  <link rel="stylesheet" href="..//stylesheet2.css">

<style>

 }
    .gallery{
        margin: 10px 50px
}
    .gallery img {
        width: 230px;
        padding: 5px;
        border: solid;
        filter: grayscale(100%);
        transition: 1s;
}
    .gallery img:hover {
        filter: grayscale(0%);
        transform: scale(1.1);
}
    .navbar{
      position: fixed;
      z-index: 99;
      opacity: 0.98;
      top: 0;
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

    .section_galleri_row1, .section_galleri_row2, .section_galleri_row3{
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
      background-color: #234946;
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
    .author {color: #234946;}

    .overskrift {margin-top: 100px;}

  </style>

  </head>


    <body>
        
  <!-- Navigations Sektion -->

  <!--Navigation burger start-->
  <div id="burger" class="burger">
    <div></div>
    <div></div>
    <div></div>
  </div>
  

  <nav class="u-full-width navbar">
    <div class="two.columns">
      <a href="..//index.php"><img class="img_logo" src="..//Billeder/AmalieSandgaardPhotography_LOGO.png"></a>
      <li><a href="Admin side/Loginside.php" class="button">Login</a></li>
      <li><a href="send_form_email.php" class="button">Kontakt</a></li>
      <li><a href="nyhedsbrev.php" class="button">Booking</a></li>
      <li><a href="Blog_Page.php" class="button">Nyheder</a></li>
      <li><a href="nyhedsbrev.php" class="button">Priser</a></li>
      <li><a href="Om_Mig.php" class="button">Om Mig</a></li>
      <li><a href="My_Pictures.php" class="button">Portfolie</a></li>
    </div>
  </nav>  
 <!--Navigation burger slut-->
<br>
        <center><div class="overskrift"><h1>Galleri</h1></div></center>
    

<!-- 6 kategorier med mulighed for at navigere sig videre til at større galeri af den ønskede kategori. -->

<!-- Vigtigt at de billeder der bliver insat her, har teksten skrevet på billedet, så dette skaleres op. -->
      <section class="section_galleri_row1">
          <div class="gallery">
          <div class="container">
            <div class="row">
              <div class="four columns">
              <a href="Portfolietemplate.php?item=0"><img class="link_picture" src="Portfoliebilleder/youtube.png"></a>
              </div>
              <div class="four columns">
            <a href="Portfolietemplate.php?item=1"><img class="link_picture" src="Portfoliebilleder/youtube.png"></a>
              </div>
              <div class="four columns">
            <a href="Portfolietemplate.php?item=2"><img class="link_picture" src="Portfoliebilleder/youtube.png"></a>
              </div>
            </div>
            <div class="row">
              <div class="four columns">
             <a href="Portfolietemplate.php?item=3"><img class="link_picture" src="Portfoliebilleder/youtube.png"></a>
              </div>
              <div class="four columns">
         <a href="Portfolietemplate.php?item=4"><img class="link_picture" src="Portfoliebilleder/youtube.png"></a>
              </div>
              <div class="four columns">
          <a href="Portfolietemplate.php?item=5>"><img class="link_picture" src="Portfoliebilleder/youtube.png"></a>
              </div>
            </div>  
          </div> 
        </div>
        </section>

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