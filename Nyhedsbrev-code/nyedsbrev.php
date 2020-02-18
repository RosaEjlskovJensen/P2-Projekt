
<!DOCTYPE HTML>


    
<?php  
    
if(isset($_POST['email']) && !empty($_POST['email'])) {

 
    $conn = mysql_connect("localhost","root","",) or die(mysql_error);
    $db = mysql_select_db("newsletter",$conn) or die(mysql_error);
    

    $email = mysql_real_escape_string($POST['email']);
    if($_POST['type'] == '1') {

     $insert = mysql_query("INSERT INFO newsletter (email) VALUES ($'email')") or die(mysql_error);

    echo "Din email $email er nu tilmeldt vores nyhedsbrev.";
   
    }else if($_POST['type'] == '0') {


    $delete = mysql_query("DELETE FROM newsletter WHERE email = '$email'") or die(mysql_error);

}



}
    
    $conn = mysql_connect("localhost","roots","",) or die (mysql_error)
    
    
//SELECT * FROM `newsletter`
    
    ?>




<html>
<body>
   

    


<form method="post" action"newsletter.php">
   
    Email:<input type="text" name="email"/>
    <br/>
    Tilmed: <input type= "radio" name="type" value="1"/><br/>
    Frameld:<input type="radio" name="type" value="0"/><br/>
        <br/>
       
    <input type="submit" value="Fortsæt"/>
        

</form>



</body>

</html>











