<?php
require '../config/connection.php';
include_once("functions.php");
ini_set('memory_limit', '1024M');
$sponserName = $_POST['sponserName'];
$sponserDesc = $_POST['sponserDesc'];
$response = [];
$target_dir = "../sponsers/";
$sql1 ="SELECT SUBSTRING_INDEX(sponserProfile,'.',1) as eventval from Sponsers ORDER BY SponserId DESC LIMIT 1";
$result1 = mysqli_query($con,$sql1);
$TransactionNumber=0;
if(mysqli_num_rows($result1)>0)
{
    $row1 = mysqli_fetch_array($result1);
    $value = (int)$row1['eventval'];
    // echo $value;
    $TransactionNumber =$value+1;
}
else
{
   $TransactionNumber=1;
}
if(!isset($_FILES["sponserprofile"]["type"])){
    $imgname = '../sponsers/sponser.jpg';
  }
  else {
    $imgname = $_FILES["sponserprofile"]["name"];
    $sourcePath = $_FILES['sponserprofile']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "../sponsers/".$TransactionNumber.".jpg"; // Target path where file is to be stored
    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
    $newimagename = $TransactionNumber.".jpg";
  }
$sql = "INSERT INTO Sponsers(sponserName,sponserDesc,sponserProfile) VALUES('$sponserName','$sponserDesc','$newimagename')";
if(mysqli_query($con,$sql)){
    $response['msg'] = 'Sponser Added SuccessFully';
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>
