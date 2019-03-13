<?php
include 'connection.php';
session_start();
$username  =  $_POST['username1'];
$password  =  $_POST['password1'];
$city      =  $_POST['city'];
$state     =  $_POST['state'];
$pincode   =  $_POST['pincode'];
$current_date = date("Y-m-d");
$response = array();
$flag = 0;
$result_1 = mysqli_query($con, "SELECT id,uname,password,email,payment_due_date From users where  uname = '$username' and password = '$password' ");
$result_2 = mysqli_query($con, "SELECT company_information.user_id From company_information,users where  uname = '$username' and password = '$password'
                                AND company_information.user_id = users.id");

if(mysqli_num_rows($result_1)==1)
 {
  while ($row = mysqli_fetch_array($result_1)) {

  $uname     = $row['uname'];
  $password  = $row['password'];
  $id = $row['id'];
  $email = $row['email'];
  $payment_due_date = $row['payment_due_date'];
}
if(($payment_due_date < $current_date) || ($payment_due_date == $current_date ))
{
  $_SESSION['u_uname']   = $uname;
  $_SESSION['u_email']   = $email;
  $_SESSION['user_id']   = $id;
  $response['modal'] = 'modal';
}
else {
  $_SESSION['u_uname']   = $uname;
  $_SESSION['u_email']   = $email;
  $_SESSION['user_id']   = $id;
  $ip = getenv('REMOTE_ADDR');
  $os = $_SERVER['HTTP_USER_AGENT'];
  $sql_ip = "INSERT INTO Log_data(user_id,emailid,ip_address,login_date,login_time,os_info,city,state,pincode)
  VALUES($id,'$email','$ip',CURDATE(),CURTIME(),'$os','$city','$state','$pincode')";

  if(mysqli_num_rows($result_2)==1)
  {
    $response['success'] = 'true';
    mysqli_query($con,$sql_ip);
  }
  else {
      $response['first'] = 'first';
  }
}
}
else {
  $response['errors']  = 'false';
}
exit(json_encode($response));
?>
