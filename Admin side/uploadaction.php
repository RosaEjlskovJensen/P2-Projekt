<?php
session_start();
$kategori = array("baby", "bryllup", "cv", "familie", "gravid", "konfirmation");
$kategori2 = array("Baby og børn", "Bryllup", "CV", "Familie", "Gravid", "Konfirmation");
$item = $_SESSION["item"];
//action.php
if(isset($_POST["action"]))
{
 require_once '../Connection.php';
 if($_POST["action"] == "fetch")
 {  
  $query = "SELECT * FROM `$kategori[$item]` ORDER BY id DESC"; 
  $result = mysqli_query($connection, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Billede</th>
     <th width="10%">Skift Billede</th>
     <th width="10%">Slet</th>
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
     <td><button type="button" name="update" class="btn3 btn-success bt-xs update" id="'.$row["id"].'">SKIFT BILLED</button></td>
     <td><button type="button" name="delete" class="btn3 btn-danger bt-xs delete" id="'.$row["id"].'">SLET</button></td>
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
   echo 'Billedet er nu postet';
  }
 }
 if($_POST["action"] == "update")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $query = "UPDATE $kategori[$item] SET name = '$file' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connection, $query))
  {
   echo 'Billedet er nu skiftet';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM $kategori[$item] WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connection, $query))
  {
   echo 'Billede er nu slettet';
  }
 }
}
?>
<?php
	mysqli_close($connection);
?>