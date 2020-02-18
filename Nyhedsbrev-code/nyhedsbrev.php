
<!DOCTYPE HTML>


    
<?php  
require_once 'Connection.php';
    $email = $_POST['email'];
if(isset($_POST['email']) && !empty($_POST['email'])) {

   
	
    if($_POST['type'] == '1') {
		
	$query = "INSERT INTO newsletter VALUES ('','$email')";
	$results = mysqli_query($connection,$query);
    echo "Din email $email er nu tilmeldt vores nyhedsbrev.";
   
    }
	elseif($_POST['type'] == '0') {

    $query = "DELETE FROM newsletter WHERE email=" ."'" .$email. "'" or die(mysql_error);
	$results = mysqli_query($connection,$query);
		echo "Din email $email er nu frameldt vores nyhedsbrev.";
   

}

}
    
   mysqli_close($connection);
    
    ?>




<html>
<body>
   

    


<form method="post" action="nyhedsbrev.php">
   
    Email:<input type="text" name="email"/>
    <br/>
    Tilmed: <input type="radio" name="type" value="1"/><br/>
    Frameld:<input type="radio" name="type" value="0"/><br/>
        <br/>
       
    <input type="submit" value="Fortsæt"/>
        

</form>



</body>

</html>











