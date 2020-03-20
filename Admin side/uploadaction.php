<?php
session_start();
$kategori = array("baby", "bryllup", "boern", "familie", "gravid", "konfirmation");
$item = $_SESSION["item"];
//Først connecter man til databasen, derefter vælger den hvilket item, ud fra id'et, den skal vælge at lave om på
if(isset($_POST["action"]))
{
 require_once '../Connection.php';
 if($_POST["action"] == "fetch")
 {  
  $query = "SELECT * FROM $kategori[$item] ORDER BY id DESC"; 
  $result = mysqli_query($connection, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
     <th width="10%">Change</th>
     <th width="10%">Remove</th>
    </tr>
  ';
//Når billeder skal outputtes skal det krypteres, da det i databasen står i binære koder. Altså når billedet skal ind i databasen. Koden i bunden af dette kan både, uploade, update og slette billeder fra databasen.
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="60" width="75" class="img-thumbnail" />
     </td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "INSERT INTO $kategori[$item](name) VALUES ('$file')";
  if(mysqli_query($connection, $query))
  {
   echo 'Image Inserted into Database';
  }
 }
 if($_POST["action"] == "update")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE $kategori[$item] SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connection, $query))
  {
   echo 'Image Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM $kategori[$item] WHERE id = '".$_POST["image_id"]."'";
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