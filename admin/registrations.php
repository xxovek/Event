<?php
include "connection.php";
$response = array();
$fname 		 = $_POST['fname'];
$email 		 = $_POST['email'];
$username	 = $_POST['username'];
$password  = $_POST['password'];
$contact 	 = $_POST['contact_number'];
$current_date     = date("Y-m-d");
$payment_due_date = date("Y-m-d");
$offer_date       = "2018-03-31";
$one_year         = date("Y-m-d", strtotime("+1 Year"));
$one_month        = date('Y-m-d', strtotime("+1 month"));

if($current_date <= $offer_date)
{
$payment_due_date = $one_year;
}
else if($current_date > $offer_date){
$payment_due_date = $one_month;
}
$result_1 = mysqli_query($con, "SELECT id From users
  where  email = '$email'");
  if(mysqli_num_rows($result_1)>0)
  {
    $response['failure'] = 'false';
  }
  else {
    $sql = "INSERT INTO users(fname,email,uname,password,contact_number,ac_created_at,payment_date,payment_due_date)
     VALUES('$fname','$email','$username','$password','$contact','$current_date','$current_date','$payment_due_date')";
    mysqli_query($con,$sql);
    $response['success'] = 'true';
  }
exit(json_encode($response));
?>
