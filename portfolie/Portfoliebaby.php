<!DOCTYPE html>  

<html>  
 <head>  
  <title>Portfolie baby</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="burgermenujs.js"></script>
  <!-- Dette link er ikonet der er i ens browser tab -->
  <link rel="icon" type="image/png" href="billeder/asp.png">
  <!-- Linker til Skeleton -->

  <!-- Linker til Fontawsome -->

  <!-- Linker til Stylesheet -->
 
 </head>  
    <body>


<center>
         <h1> billeder </h1>
</center>

<?php
//database connection
$connection = mysqli_connect('localhost','root','root','data');
if(!$connection){
die("cannot connect to database".mysqli_connect_error());
}
?>
    <?php
 {
  $query = "SELECT * FROM baby ORDER BY id DESC";
  $result = mysqli_query($connection, $query);
  
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
<<<<<<< HEAD
   
    <div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" />
    </div>
   ';
  }
=======

    <tr>
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" />
     </td>
    </tr>
   ';
  }
  $output .= '</table>';
>>>>>>> 65909a68c6b0888c64c884d7882e445506c5bfca
  echo $output;
 }
    ?>

    
  </body>
</html>