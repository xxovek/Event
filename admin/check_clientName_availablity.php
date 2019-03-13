<?php
include 'connection.php';
session_start();
$uid = $_SESSION['user_id'];

if(!empty($_POST["username"])) {
  $result = mysqli_query($con,"SELECT count(c_name) FROM customers WHERE c_name='" . $_POST["username"] . "' and user_id='$uid'");
  $row = mysqli_fetch_array($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> Client Name Not Available.</span>";
  }else{
      echo "<span class='status-available'> Client Name Available.</span>";
  }
}
?>
