<?php
include 'connection.php';
session_start();
$uid ='3';
 // $_SESSION['user_id'];
$response = [];
$result = mysqli_query($con,"SELECT expence_id,expence_merchant,expence_category,expence_status,expence_date,expence_amount FROM expence Where user_id= '$uid'");
if(mysqli_num_rows($result) > 0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
        'expence_id'       => $row['expence_id'],
        'expence_merchant' => $row['expence_merchant'],
        'expence_category' => $row['expence_category'],
        'expence_status'   => $row['expence_status'],
        'expence_date'     => $row['expence_date'],
        'expence_amount'   => $row['expence_amount'],
]);
}
exit(json_encode($response));
}
?>
