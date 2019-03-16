<?php
require '../config/connection.php';
$EventId        = $_POST['EventId'];
$EventName      = $_POST['EventName'];
$EventDate      = $_POST['EventDate'];
$EventTime      = $_POST['EventTime'];
$Description    = $_POST['Description'];
$Venue          = $_POST['Venue'];
$VenueCity      = $_POST['VenueCity'];
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
    $targetPath = "../Events/".$_FILES['eventprofile']['name']; // Target path where file is to be stored
    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
    $sql = "UPDATE Events SET EventName = '$EventName',EventDate='$EventDate',EventTime= '$EventTime',Description='$Description',Venue='$Venue',VenueCity='$VenueCity',
   EventProfile = '$imgname' WHERE EventId=$EventId";
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
