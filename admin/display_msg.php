<?php

include "connection.php";
session_start();
// $uid = $_SESSION['user_id'];
$uid = '3';
$response = [];
$result = mysqli_query($con,"SELECT message.Emp_name,message.uname,message.message,message.Created_at from message,users where message.User_id = users.id AND users.id='$uid'");

  if(mysqli_num_rows($result) > 0)
    {
      while($row=mysqli_fetch_array($result))
      {

        array_push($response,[
             'Emp_name' => $row['Emp_name'],
             'uname' => $row['uname'],
           'message' => $row['message'],
            'Created_at' => $row['Created_at']

          ]);
      }
    exit(json_encode($response));
    }
?>
