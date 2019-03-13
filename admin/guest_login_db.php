<?php
include 'connection.php';
 session_start();
$username  =  $_POST['emailid'];
$password  =  $_POST['password'];
$city      =  $_POST['city'];
$state     =  $_POST['state'];
$pincode   =  $_POST['pincode'];
$current_date = date("Y-m-d");
$response = array();

$sql = "SELECT Emp_id,User_id,Emp_fname,Emp_email,password
From employees where  Emp_email= '$username' and password = '$password' and flag=0 ";
$result_1 = mysqli_query($con,$sql );

if(mysqli_num_rows($result_1)==1)
 {
    $row = mysqli_fetch_array($result_1);
    $id = $row['Emp_id'];
    $admin_id = $row['User_id'];
    $email = $row['Emp_email'];
    $password  = $row['password'];
    $_SESSION['user_rights']   = $id;
    $_SESSION['user_rights_admin']   = $admin_id;
    $ip = getenv('REMOTE_ADDR');
    $os = $_SERVER['HTTP_USER_AGENT'];

$sql_ip = "INSERT INTO Log_guestuser_data(Emp_id,emailid,ip_address,login_date,login_time,os_info,city,state,pincode)
VALUES($id,'$email','$ip',CURDATE(),CURTIME(),'$os','$city','$state','$pincode')";

 $response['success'] = 'true';
   mysqli_query($con,$sql_ip);
}

else {
  $response['errors']  = 'false';
}
exit(json_encode($response));
?>
