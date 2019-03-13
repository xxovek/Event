  <?php
include 'connection.php';
session_start();

// $uid = $_SESSION['user_id'];
$uid = '3';
$response = [];
$result = mysqli_query($con,"SELECT employees.Emp_email,employees.Emp_fname,employees.Emp_lname,employees.Updated_at,users.fname FROM employees,users Where employees.User_id=users.id AND users.id='$uid'");

if(mysqli_num_rows($result) > 0)
{
  while($row=mysqli_fetch_array($result))
  {
    array_push($response,[
      'user_name' =>$row['fname'],
      'Emp_email' =>$row['Emp_email'],
      'Emp_fname' => $row['Emp_fname'],
      'Emp_lname' => $row['Emp_lname'],
      'Updated_at' => $row['Updated_at']
      ]);
  }
exit(json_encode($response));
}
 ?>
