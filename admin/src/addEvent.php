<?php
require '../config/connection.php';
include_once("functions.php");
$EventName      = $_POST['EventName'];
$EventDate      = $_POST['EventDate'];
$EventTime      = $_POST['EventTime'];
$Description    = $_POST['Description'];
$Venue          = $_POST['Venue'];
$VenueCity      = $_POST['VenueCity'];
$target_dir = "../Events/";
$upload1900x960_dir = '../Events/1900x960/';
$upload300x300_dir = '../Events/300x300/';
$upload600x303_dir = '../Events/600x303/';
$upload800x800_dir = '../Events/800x800/';
$response = [];
  $sql1 ="SELECT SUBSTRING_INDEX(EventProfile,'.',1) as eventval from Events ORDER BY EventId DESC LIMIT 1";
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
if(!isset($_FILES["eventprofile"]["type"])){
    $imgname = '../Events/sponser.jpg';
  }
  else {
    $imgname = $_FILES["eventprofile"]["name"];
    // $extension = end(explode(".", $imgname));
    $sourcePath = $_FILES['eventprofile']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "../Events/".$TransactionNumber.".jpg"; // Target path where file is to be stored
    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
    $newimagename = $TransactionNumber.".jpg";
    createThumbnail($newimagename, 1900, 960,$target_dir, $upload1900x960_dir);
    createThumbnail($newimagename, 300, 300, $target_dir, $upload300x300_dir);
    createThumbnail($newimagename, 600, 303, $target_dir, $upload600x303_dir);
    createThumbnail($newimagename, 800, 800, $target_dir, $upload800x800_dir);
  }
$sql = "INSERT INTO Events(EventName,EventDate,EventTime,Description,Venue,VenueCity,EventProfile) VALUES('$EventName','$EventDate','$EventTime','$Description','$Venue','$VenueCity','$newimagename')";
if(mysqli_query($con,$sql)){
    $response['msg'] = 'Event Added SuccessFully';
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>
