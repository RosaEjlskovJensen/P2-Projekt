<?php
require_once '../Connection.php';
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['picture'];
				
				

// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         



            // Insert image content into database 
            
            $insert = $db->query "INSERT into prices (`id`, `name`, `description`, `image`) VALUES ('','$name','$description','$imgContent')";  
            
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg;
mysqli_close($connection);
?>

<!--
				if(!empty($name)){
					//$query = "INSERT INTO prices VALUES ('', '$name', '$description', '$image')";//
				$query = "INSERT INTO `prices`(`id`, `name`, `description`, `picture`) VALUES ('','$name','$description','$image')";
   				$results = mysqli_query($connection,$query);

					 if(!$results){
							die("could not query the database" .mysqli_error());
					 }

				header("Location: Addprice.php");

			
				}else{
				echo "something went wrong";
			}
            
mysqli_close($connection);
?>
--!>