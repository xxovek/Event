<?php 
require('../config/connection.php');
$EventId = $_POST['EventId'];
$response = [];
$sql = "DELETE  FROM Events WHERE EventId=$EventId";
if($result = mysqli_query($con,$sql)){
    $response['msg'] = 'Event Removed Successfully';
    
    }else{
        $response['msg'] = 'There are no Event Available';
    }
mysqli_close($con);
exit(json_encode($response));
?>