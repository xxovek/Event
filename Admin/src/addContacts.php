<?php 
require '../config/connection.php';
$name           = $_POST['name'];
$emailId        = $_POST['emailId'];
$ContactNumber  = $_POST['ContactNumber'];
$response = [];

$sql = "INSERT INTO Contacts(name,emailId,ContactNumber) VALUES('$name','$emailId','$ContactNumber')";
if(mysqli_query($con,$sql)){
    $response['msg'] = 'Your Response Recorded Our Team Will Reach you Shortly';
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>