<?php
require '../config/connection.php';
$sponserId   = $_POST['sponserId'];
$sponserName = $_POST['sponserName'];
$sponserDesc = $_POST['sponserDesc'];
$response = [];
$ImageId          = $_POST['imageid'];
if(isset($_FILES["sponserprofile"]["name"])){
  if($_FILES["sponserprofile"]["name"]==""){
    $sql = "UPDATE Sponsers SET sponserName = '$sponserName',sponserDesc='$sponserDesc' WHERE sponserId=$sponserId";
    mysqli_query($con,$sql);
    $response['msg'] = 'Updated Successfull';
  }
  else {
    $imgname = $_FILES["sponserprofile"]["name"];
    $sourcePath = $_FILES['sponserprofile']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "../sponsers/".$ImageId.".jpg";// Target path where file is to be stored
    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
    $sql = "UPDATE Sponsers SET sponserName = '$sponserName',sponserDesc='$sponserDesc',sponserProfile='$imgname' WHERE sponserId=$sponserId";
    mysqli_query($con,$sql);
    $response['msg'] = 'Updated Successfull';
  }
}
else {
  $sql = "UPDATE Sponsers SET sponserName = '$sponserName',sponserDesc='$sponserDesc' WHERE sponserId=$sponserId";
  mysqli_query($con,$sql);
  $response['msg'] = 'Updated Successfull';
}
mysqli_close($con);
exit(json_encode($response));
?>
