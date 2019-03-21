<?php
require('../config/connection.php');
$response = [];
$username	 = $_POST['fname'];
$password  = $_POST['password'];

$sql = "INSERT INTO AdminMaster(userName,userPassword)VALUES('$username','$password')";
mysqli_query($con,$sql);
$response['success'] = 'true';

exit(json_encode($response));
?>
