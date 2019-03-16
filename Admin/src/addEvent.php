<?php
require '../config/connection.php';
$EventName      = $_POST['EventName'];
$EventDate      = $_POST['EventDate'];
$EventTime      = $_POST['EventTime'];
$Description    = $_POST['Description'];
$Venue          = $_POST['Venue'];
$VenueCity      = $_POST['VenueCity'];
$response = [];
if(!isset($_FILES["eventprofile"]["type"])){
    $imgname = 'Events/sponser.jpg';
  }
  else {
    $imgname = $_FILES["eventprofile"]["name"];
    $sourcePath = $_FILES['eventprofile']['tmp_name']; // Storing source path of the file in a variable
    $targetPath = "Events/".$_FILES['eventprofile']['name']; // Target path where file is to be stored
    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
  }
$sql = "INSERT INTO Events(EventName,EventDate,EventTime,Description,Venue,VenueCity,EventProfile) VALUES('$EventName','$EventDate','$EventTime','$Description','$Venue','$VenueCity','$imgname')";
if(mysqli_query($con,$sql)){
    $response['msg'] = 'Sponser Added SuccessFully';
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>
