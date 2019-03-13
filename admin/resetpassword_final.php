<?php
include 'connection.php';

$emailid        =  $_POST['emailid'];
$password       =  $_POST['password'];
$response = array();
$result_1 = mysqli_query($con, "SELECT password_code,id From users where  email = '$emailid' ");

if(mysqli_num_rows($result_1)==1)
 {
$row = mysqli_fetch_array($result_1);
$id = $row['id'];
$password_code = $row['password_code'];

$sql = "UPDATE users SET password = '$password' where id = '$id'";
mysqli_query($con,$sql);
$response['success'] = 'true';
}
else {
  $response['errors']  = 'false';
}
exit(json_encode($response));
?>
