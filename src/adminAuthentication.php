<?php
require '../config/connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$response = [];
$sql = "SELECT userName,adminId FROM AdminMaster WHERE userName='$username' AND userPassword ='$password'";
if($result = mysqli_query($con,$sql)){
if(mysqli_num_rows($result)==1){
    session_start();
    $row = mysqli_fetch_array($result);
    $_SESSION['adminId'] = $row['adminId'];
    $_SESSION['userName'] = $row['userName'];
    $response['msg'] = 'User Login Successfull';
}else{
    $response['msg'] = 'error while Authentication';
}
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>