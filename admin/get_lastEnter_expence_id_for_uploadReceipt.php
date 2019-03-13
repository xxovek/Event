<?php
include "connection.php";
// session_start();
// $uid = $_SESSION['user_id'];
$uid = 17;
$response = array();

$sql = "SELECT expence_id FROM expence WHERE user_id = '$uid' ORDER BY expence_id DESC LIMIT 1";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0)
{
  $row = mysqli_fetch_array($result);
  $response['expence_id'] =  $row['expence_id'];
}
exit(json_encode($response));
?>
