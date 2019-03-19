<?php
require '../config/connection.php';
include_once("functions.php");
$EventId        = $_POST['EventId'];
$EventName      = $_POST['EventName'];
$EventDate      = $_POST['EventDate'];
$EventTime      = $_POST['EventTime'];
$Description    = $_POST['Description'];
$Venue          = $_POST['Venue'];
$ImageId          = $_POST['imageid'];
$VenueCity      = $_POST['VenueCity'];
$target_dir = "../Events/";
$upload1900x960_dir = '../Events/1900x960/';
$upload300x300_dir = '../Events/300x300/';
$upload600x303_dir = '../Events/600x303/';
$upload800x800_dir = '../Events/800x800/';
$response = [];
if(isset($_FILES["eventprofile"]["name"])){
  if($_FILES["eventprofile"]["name"]==""){
    $sql = "UPDATE Events SET EventName = '$EventName',EventDate='$EventDate',EventTime= '$EventTime',Description='$Description',Venue='$Venue',VenueCity='$VenueCity'
     WHERE EventId=$EventId";
    mysqli_query($con,$sql);
    $response['msg'] = 'Updated Successfull';
  }
  else {

    $imgname = $_FILES["eventprofile"]["name"];
    $sourcePath = $_FILES['eventprofile']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "../Events/".$ImageId.".jpg"; // Target path where file is to be stored
    move_uploaded_file($sourcePath,$targetPath) ;
    $newimagename = $ImageId.".jpg";
    createThumbnail($newimagename, 1900, 960,$target_dir, $upload1900x960_dir);
    createThumbnail($newimagename, 300, 300, $target_dir, $upload300x300_dir);
    createThumbnail($newimagename, 600, 303, $target_dir, $upload600x303_dir);
    createThumbnail($newimagename, 800, 800, $target_dir, $upload800x800_dir);
    $sql = "UPDATE Events SET EventName = '$EventName',EventDate='$EventDate',EventTime= '$EventTime',Description='$Description',Venue='$Venue',VenueCity='$VenueCity',
   EventProfile = '$newimagename' WHERE EventId=$EventId";
    mysqli_query($con,$sql);
    $response['msg'] = 'Updated Successfull';
  }
}
else {
    $sql = "UPDATE Events SET EventName = '$EventName',EventDate='$EventDate',EventTime= '$EventTime',Description='$Description',Venue='$Venue',VenueCity='$VenueCity'
    WHERE EventId=$EventId";
  mysqli_query($con,$sql);
  $response['msg'] = 'Updated Successfull';
}
mysqli_close($con);
exit(json_encode($response));
?>
