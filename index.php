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
  <link rel="stylesheet" href="indexcss.css">
  <style>
    .navbar{
      position: fixed;
      z-index: 99;
      opacity: 0.98;
      top: 0;
    }

    .showcase_picture{
      max-width: 100%;
      height: 91.5vh;
      position: relative;
      top: 0;
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

    /* Next & previous buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -30px;
      padding: 16px;
      color: #888;
      font-weight: bold;
      font-size: 20px;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      position: absolute;
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
      color: white;
    }

    /* The dot/bullet/indicator container */
    .dot-container {
      text-align: center;
      padding: 20px;
      background: #ddd;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    /* Add a background color to the active dot/circle */
    .active, .dot:hover {
      background-color: #717171;
    }

    /* Add an italic font style to all quotes */
    q {font-style: italic;}

    /* Add a blue color to the author */
    .author {color: #234946;}
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
      <li><a href="nyhedsbrev.php" class="button">Booking</a></li>
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
          
        <li><a href="nyhedsbrev.php" class="button">nyhedsbrev</a></li>
        <li><a href="send_form_email.php" class="button">Kontakt</a></li>
        <li><a href="Blog_Page.php" class="button">Blogs</a></li>
        <li><a href="My_Pictures.php" class="button">Bestil dine billeder her</a></li>
        <li><a href="Admin side/Loginside.php" class="button">Admin Login</a></li>
      -->

      <!-- Showcase Sektion  -->
      <section class="section_showcase">
        <div class="u-full-width">
          <img class="showcase_picture" src="billeder/FTB1.jpg" width="100%">
        </div>
      </section>

      <br>

      <!-- Anmeldelse Sektion -->
      <center>
        <section class="section_anmeldelser">
          <h1>Hvad sige kunderne?</h1>
          <div class="u-full-width">
            <div class="slideshow_container">
              <div class="slides">
                <div class="mySlides">
                  <q>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</q>
                  <br>
                  <p class="author">- Lorem ipsum 1</p>
                </div>
                <div class="mySlides">
                  <q>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</q>
                  <p class="author">- Lorem ipsum 2</p>
                </div>
                <div class="mySlides">
                  <q>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</q>
                  <p class="author">- Lorem ipsum 3</p>
                </div>
              </div>

              <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
              </div>

            </div>
          </div>
        

      </section>
    </center>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          }
        </script>

        <br>
<!-- <form><button type="submit" formaction="send_form_email.php"><img src="billeder/Test_Picture.png"></button></form> -->

        <!-- Galleri Sektion -->

        <center><div><h1>Hvem fotografer jeg?</h1></div></center>

        <section class="section_galleri_row1">
          <div class="container">
            <div class="row">
              <div class="six columns">
                <a href="send_form_email.php"><img class="link_picture" src="billeder/FBBBB1.jpg"></a>
              </div>
              <div class="six columns">
                <a href="send_form_email.php"><img class="link_picture" src="billeder/FBBB1.jpg"></a>
              </div>
            </div>
          </div>     
        </section>
        <section class="section_galleri_row2">
          <div class="container">
            <div class="row">
              <div class="six columns">
                <a href="send_form_email.php"><img class="link_picture" src="billeder/FFB1.jpg"></a>
              </div>
              <div class="six columns">
                <a href="send_form_email.php"><img class="link_picture" src="billeder/FKB1.jpg"></a>
              </div>
            </div>
          </div>     
        </section>
        <section class="section_galleri_row3">
          <div class="container">
            <div class="row">
              <div class="six columns">
                <a href="send_form_email.php"><img class="link_picture" src="billeder/FBB1.jpg"></a>
              </div>
              <div class="six columns">
                <a href="send_form_email.php"><img class="link_picture" src="billeder/FBB1.jpg"></a>
              </div>
            </div>
          </div>     
        </section>

   <!--

  <section class="section_galleri">
    <center><div><h1>Hvem fotografer jeg?</h1></div></center>
    <div class="container">
      <div class="row">
        <div class="six columns">
          <a href="send_form_email.php"><img class="showcase_picture" src="billeder/Test_Picture.png"></a>
        </div>
        <div class="six columns">
          <a href="#"><img class="showcase_picture" src="billeder/Test_Picture.png"></a>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="six columns">
          <a href="#"><img class="showcase_picture" src="billeder/Test_Picture.png"></a>
        </div>
        <div class="six columns">
          <a href="#"><img class="showcase_picture" src="billeder/Test_Picture.png"></a>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="six columns">
          <a href="#"><img class="showcase_picture" src="billeder/Test_Picture.png"></a>
        </div>
        <div class="six columns">
          <a href="#"><img class="showcase_picture" src="billeder/Test_Picture.png"></a>
        </div>
      </div>
    </div>
 </section>

-->

<br>

<!-- Google Maps Sektion-->

<section class="section_maps">
  <div class="u-full-width">
    <center>
      <div><h1>Her finder du mig!</h1></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.129099026749!2d9.917400615981306!3d57.049329380919936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4649328c9bc379a3%3A0x97ceb14dd16f56d2!2sBispensgade%2013%2C%209000%20Aalborg!5e0!3m2!1sda!2sdk!4v1582824343072!5m2!1sda!2sdk" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </center>
  </div>
</section> 

<!-- Test Sektion

<section class="section_test">
  <div class="container">
    <div class="row">
      <div class="three columns">
        <button class="btn btn1" type="button">Testing!</button>
      </div>
      <div class="three columns">
        <button class="btn btn2" type="button">Testing!</button>
      </div>
      <div class="three columns">
        <button class="btn btn3" type="button">Testing!</button>
      </div>
      <div class="three columns">
        <button class="btn btn4" type="button">Testing!</button>
      </div>
    </div>
  </div>
</section>

-->


<!-- Slut Sektion -->
<section class="section_footer">
  <div class="u-full-width">
    <center>
      <p class="footer"> &copy; <?php echo date("Y"); ?> | Amalie Sandgaard Photography | CVR: 38 02 70 34  </p>
    </center>
  </div>
</section>

</body>
</html>