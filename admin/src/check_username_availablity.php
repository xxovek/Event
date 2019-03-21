<?php
require('../config/connection.php');


if(!empty($_POST["username"])) {
  $result = mysqli_query($con,"SELECT count(userName) FROM AdminMaster WHERE userName='" . $_POST["username"] . "'");
  $row = mysqli_fetch_array($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='alert alert-danger'> Username Not Available.</span>";
  }else{
      echo "<span class='alert alert-primary'> Username Available.</span>";
  }
}
?>
