<?php

include "connection.php";
session_start();
// $uid = $_SESSION['user_id'];
 $uid = '3';
$name 	= $_REQUEST['msg'];

$result = mysqli_query($con,"select employees.Emp_id,users.fname,users.uname from employees,users WHERE employees.User_id=users.id AND users.id='$uid'");
if(mysqli_num_rows($result) > 0)
{
    while($row=mysqli_fetch_assoc($result))
  {
    $emp_id = $row['Emp_id'];
    $emp_fname = $row['fname'];
    $uname = $row['uname'];

    }
    $sql = "INSERT INTO message(User_id,Emp_id,Emp_name,uname,message) VALUES('$uid','$emp_id','$emp_fname','$uname','$name')";
    mysqli_query($con,$sql) or error(mysqli_error($con));
}
else
 {
       echo "0 results";
}
?>
