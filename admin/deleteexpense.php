<?php
include 'connection.php';
session_start();
$uid = $_SESSION['user_id'];
$expence_id = $_REQUEST['expence_id'];

$sql = "SELECT receipts_name FROM expence WHERE expence_id = '$expence_id' ";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0)
{
  $row = mysqli_fetch_array($result);
  if($row['receipts_name'] == "none")
  {
    mysqli_query($con,"DELETE  FROM expence WHERE expence_id= $expence_id and user_id = $uid") or die(mysqli_error($con));
  }
  else
  {
    $fname=$row['receipts_name'];
    unlink("./BillReceipts/$fname");
    mysqli_query($con,"DELETE FROM expence WHERE expence_id= $expence_id and user_id = $uid") or die(mysqli_error($con));
  }
}
 ?>
