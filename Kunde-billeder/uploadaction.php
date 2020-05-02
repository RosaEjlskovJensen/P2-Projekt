<?php
session_start();
$pass = $_SESSION['pass'];
$email = $_SESSION['email'];
$_SESSION['pass'] = $pass;
$_SESSION['email'] = $email;
//action.php
if(isset($_POST["action"]))
{
  require_once '../Connection.php';
 if($_POST["action"] == "fetch")
 {
$query = "SELECT * FROM `$pass` ORDER BY id DESC"; 
  $result = mysqli_query($connection, $query); 
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">BILLEDE</th>
     <th width="10%">SKIFT</th>
     <th width="10%">SLET</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="60" width="75" class="img-thumbnail" />
     </td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">SKIFT</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">SLET</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $filename = $_FILES["image"]["name"];
  $query = "INSERT INTO `$pass`(name, filename) VALUES ('$file','$filename')";
  if(mysqli_query($connection, $query))
  {
   echo 'Image Inserted into Database';
  }
 }
 if($_POST["action"] == "update")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
   $query = "UPDATE `$pass` SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connection, $query))
  {
   echo 'Image Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {  
  $query = "DELETE FROM `$pass` WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connection, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>
<?php
	mysqli_close($connection);
?>