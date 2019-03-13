
<?php

include "connection.php";
session_start();
$uid = $_SESSION['user_id'];
$expence_id = $_POST['expence_id'];
$response = array();
$sql = "SELECT receipts_name FROM expence WHERE expence_id = '$expence_id' ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
  $row = mysqli_fetch_array($result);
  if($row['receipts_name'] == "None")
  {
    $response['image_not'] = "true";
  }
  else {
$response['image_name'] =  $row['receipts_name'];
  }
}
exit(json_encode($response));
 ?>
