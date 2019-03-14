<?php 
require '../config/connection.php';
$name           = $_POST['name'];
$emailId        = $_POST['emailId'];
$ContactNumber  = $_POST['ContactNumber'];
$message        = $_POST['message'];
$response = [];

$sql = "INSERT INTO Contacts(name,emailId,ContactNumber,msg) VALUES('$name','$emailId','$ContactNumber','$message')";
if(mysqli_query($con,$sql)){
    $response['msg'] = 'Your Response Recorded Our Team Will Reach you Shortly';
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>