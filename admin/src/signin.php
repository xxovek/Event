<?php
require('../config/connection.php');
session_start();
$username  =  $_POST['username1'];
$password  =  $_POST['password1'];
$result_1 = mysqli_query($con, "SELECT  userName, userPassword FROM AdminMaster WHERE userName='$username' and userPassword='$password'");

if(mysqli_num_rows($result_1)==1)
 {
  while ($row = mysqli_fetch_array($result_1))
  {

  $uname     = $row['userName'];
  $password  = $row['userPassword'];
  $_SESSION['u_uname']   = $uname;
  $response['success'] = 'true';
  }

}
else {
  $response['errors']  = 'false';
}
exit(json_encode($response));
?>
