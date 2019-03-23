<?php
include 'connection.php';
session_start();
$uid = $_SESSION['user_id'];
// $uid = '18';
$expence_id = $_REQUEST['expence_id'];
$response = array();

if($result = mysqli_query($con,"SELECT * from expence where expence_id = '$expence_id' and user_id='$uid'"))
{
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result))
    {
      $response['expence_id'] = $row['expence_id'];
      $response['expence_merchant'] = $row['expence_merchant'];
      $response['expence_category'] = $row['expence_category'];
      $response['expence_status'] = $row['expence_status'];
      $response['expence_date'] = $row['expence_date'];
      $response['expence_amount'] = $row['expence_amount'];
      $response['expence_ref'] = $row['expence_ref'];
      $response['expence_narration'] = $row['expence_narration'];
      $response['expence_description'] = $row['expence_description'];
      $response['receipts_name'] = $row['receipts_name'];
  }
  }
}
exit(json_encode($response));
?>
