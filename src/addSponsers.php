<?php 
require '../config/connection.php';
$sponserName = $_POST['sponserName'];
$sponserDesc = $_POST['sponserDesc'];
$response = [];
if(!isset($_FILES["imgname"]["type"])){
    $imgname = 'sponsers/sponser.jpg';
  }
  else {
    $imgname = $_FILES["imgname"]["name"];
    $sourcePath = $_FILES['imgname']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "sponsers/".$_FILES['imgname']['name']; // Target path where file is to be stored
    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
  }
$sql = "INSERT INTO Sponsers(sponserName,sponserDesc,sponserProfile) VALUES('$sponserName','$sponserDesc','$imgname')";
if(mysqli_query($con,$sql)){
    $response['msg'] = 'Sponser Added SuccessFully';
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>