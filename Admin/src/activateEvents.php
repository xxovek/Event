<?php 
require('../config/connection.php');
$EventId  = $_POST['EventId'];
$response = [];
$sql = "UPDATE Events SET EventFlag = 1 WHERE EventId=$EventId";
if($result = mysqli_query($con,$sql)){
    $response['msg'] = 'Event  Activated Successfully';
    }else{
        $response['msg'] = 'Error While Activating Event Try again';
    }
mysqli_close($con);
exit(json_encode($response));
?>