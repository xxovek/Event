<?php 
require '../config/connection.php';
$SubscriberEmail = $_POST['subscriberEmail'];
$response = [];
$sql = "INSERT INTO Subscriber(emailId) VALUES('$SubscriberEmail')";
if(mysqli_query($con,$sql)){
    $response['msg'] = 'You are Subscribed Our Events You will Notify When There is an Event';
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>