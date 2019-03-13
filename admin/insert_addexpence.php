<?php
include 'connection.php';
session_start();
$uid = $_SESSION['user_id'];
//$uid = '17';

  $statusMsg = '';
  $merchantname 		   = $_POST['mname'];
  $category	           = $_POST['cat'];
  $maincategory = explode("-",$category);
  $maincategory = $maincategory[1];
  $amount 		         = $_POST['amt'];
  $description         = $_POST['desc'];
  $status              = $_POST['status'];
  $date                = $_POST['date1'];
  $narrationname       = $_POST['narnme'];
  $ref                 = $_POST['ref'];

if(!empty($_REQUEST['f1']))
{
$f1 =  $_POST['f1'];
    $result = $con -> query("SELECT  `expence_merchant` from `expence` where expence_id = '$f1'");
    if (mysqli_num_rows($result) == 1)
    {
                                $update  = "UPDATE `expence` SET
                               user_id= '$uid',
                               expence_merchant='$merchantname',
                               expence_narration='$narrationname',
                               expence_ref='$ref',
                               expence_category='$category',
                               Main_category='$maincategory',
                               expence_status='$status',
                               expence_amount='$amount',
                               expence_date='$date',
                               expence_description='$description'
                               WHERE expence_id = '$f1'";

                             if($con->query($update) === TRUE) {
                                echo "Record updated successfully";
                              }
                              else{
                                  echo "Error updating record: " . $con->error;
                              }
}
}

else{

          $sql = $con->query("INSERT into expence(user_id,expence_merchant, expence_narration,expence_ref,expence_category,Main_category,expence_status,expence_amount,expence_date,expence_description)
          VALUES ('".$uid."','".$merchantname."','".$narrationname."','".$ref."','".$category."','".$maincategory."','".$status."','".$amount."','".$date."','".$description."')");

          if($sql)
          {
              move_uploaded_file($fileName,$targetFilePath);
              $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              echo "Data inserted successfully.";
          }
          else
          {
              $statusMsg = "File upload failed, please try again.";
          }
}

?>
