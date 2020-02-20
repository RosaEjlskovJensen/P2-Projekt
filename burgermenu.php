<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Burgermenu</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="burgermenujs.js"></script>
 <!-- Dette link er ikonet der er i ens browser tab -->
    <link rel="icon" type="image/png" href="INDSET IKON HER">
    <title>Kontakt</title>
    <!-- Linker til Skeleton -->
      <link rel="stylesheet" href="stylesheet.css">
    <!-- Linker til normalize der styre font størelser på små skærme -->
    <link rel="stylesheet" href="normalize.css">

<style>
nav{
  background: #000000;
  color: #ffffff;
  list-style: none;
  clear: both;
    margin-right: 17.33%;
}
nav li{
display: inline-block;
margin: 10px;
}
body{
  margin:0;
}
.burger div{
  width: 35px;
  height: 5px;
  background: #ffffff;
  margin: 6px 0;
}
#burger{
  float: left;
  visibility:hidden;
  margin: 5px;
}

@media screen and (max-width:700px){
  #burger{
  visibility: visible;
}
.burger{
display: block;
height: 40px;
width: 30px;
float: right;
cursor: pointer;
}
nav{
  list-style: none;
  overflow: hidden;
  min-height: 40px;
  margin: 0px auto;
}
nav li{
  display: none;
}

nav li.open{
float: none;
text-align: left;
margin:0;
visibility: visible;
display: block;
text-align: center;
padding-top: 40px;
width: 100%;
height: auto;
}
}
</style>


  </head>
  <body>
    <div class="offset-by-two columns eight columns">
    <nav>
      <!--Navigation burger-->
    <div id="burger" class="burger">
      <div></div>
      <div></div>
      <div></div>
    </div>
    
    <br>	
        <li>page1</li>
        <li>page2</li>
        <li>page3</li>
        <li>page4</li>
        <li>page5</li>
    </nav>
</div>
  </body>
</html>