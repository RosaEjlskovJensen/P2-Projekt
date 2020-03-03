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
  <script type="text/javascript" href="burgermenujs.js"></script>
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
    max-height: 101%;
    max-width: 101%;
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

  /* frost overlay */

.container1 {
  position: relative;
  width: 50%;
}

.image1 {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle1 {
  transition: .5s ease;
  opacity: 0;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -100%);
  -ms-transform: translate(-50%, -100%);
  text-align: center;
}

.container1:hover .image1 {
  opacity: 0.3;
}

.container1:hover .middle1 {
  opacity: 1;
}

.text1 {
  background-color: white;
  color: #8b752e;
  font-size: 25px;
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

      <!-- Anmeldelse Sektion -->

      <section class="section_testimony">
        <div class="container">
          <div class="row">
            <div class="u-full-width">
              <center><h1>Hvad siger kunderne?</h1></center>
            </div>
            <div class="row">
              <div class="u-full-width">
                <div class="slideshow_container">
                  <div class="slides">
                    <div class="mySlides">
                      <center>
                        <q>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</q>
                        <br>
                        <p class="author">- Lorem ipsum 1</p>
                      </div>
                      <div class="mySlides">
                        <q>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</q>
                        <br>
                        <p class="author">- Lorem ipsum 2</p>
                      </div>
                      <div class="mySlides">
                        <q>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</q>
                        <br>
                        <p class="author">- Lorem ipsum 3</p>
                      </div>
                      <div class="dot-container">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                      </div>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </section>
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

        <!-- Galleri Sektion -->

        <section class="section_galleri_row1">
        <div class="container u-full-width">
          <div class="row">
            <div class="one-third column">
              <div class="container1">
                <a href="index.php"><img src="billeder/FBBBB1.jpg" class="image1 link_picture">
                <div class="middle1">
                  <div class="text1">BABY</div></a>
                </div>
              </div>
            </div>
            <div class="one-third column">
              <div class="container1">
                <a href="index.php"><img src="billeder/FBBB1.jpg" class="image1">
                  <div class="middle1">
                    <div class="text1">BØRN</div></a>
                  </div>
                </div>
              </div>
              <div class="one-third column">
                <div class="container1">
                  <a href="index.php"><img src="billeder/FFB1.jpg" class="image1 link_picture">
                  <div class="middle1">
                    <div class="text1">FAMILIE</div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="one-third column">
                <div class="container1">
                  <a href="index.php"><img src="billeder/FKB1.jpg" class="image1 link_picture">
                  <div class="middle1">
                    <div class="text1">KONFIRMATION</div></a>
                  </div>
                </div>
              </div>
              <div class="one-third column">
                <div class="container1">
                  <a href="index.php"><img src="billeder/FBB1.jpg" class="image1 link_picture">
                    <div class="middle1">
                      <div class="text1">BRYLLUP</div></a>
                    </div>
                  </div>
                </div>
                <div class="one-third column">
                  <div class="container1">
                    <a href="index.php"><img src="billeder/FBB1.jpg" class="image1 link_picture">
                    <div class="middle1">
                      <div class="text1">GRAVID</div></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>   
        </section>

<br>
<br>

<!-- Google Maps Sektion-->
<section class="section_maps">
    <div class="container">
      <div class="u-full-width">
        <div class="row">
          <div class="offset-by-four columns">
              <div><h1>Her finder du mig!</h1></div>
            </div>
          </div>
      <div class="row">
        <div class="four columns">
          <center>
          <h6 style="color: #8b752e">NYTTIGE LINKS</h6>
          <a href="#" >Privatlivspolitik</a><br>
          <a href="#">Vilkår & Betingelser</a>
          <p></p>
          <h6 style="color: #8b752e">FØLG MIG PÅ</h6>
          <a href="https://www.facebook.com/amaliesandgaardphotography/" target="_blank">Facebook</a><br>
          <a href="#" target="_blank">Instagram</a><br>
          <a href="#" target="_blank">Flere</a>
        </center>
        </div>
        <div class="seven columns">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.129099026749!2d9.917400615981306!3d57.049329380919936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4649328c9bc379a3%3A0x97ceb14dd16f56d2!2sBispensgade%2013%2C%209000%20Aalborg!5e0!3m2!1sda!2sdk!4v1582824343072!5m2!1sda!2sdk" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
  </div>
  </div>
</section> 

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