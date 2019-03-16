<?php
require('../config/connection.php');
$SubscriberId = $_POST['SubscriberId'];
$response = [];
$sql = "DELETE FROM Subscriber WHERE subscriberId=$SubscriberId";
if($result = mysqli_query($con,$sql)){
    $response['msg'] = 'Subscriber Removed Successfully';

    }else{
        $response['msg'] = 'There are No Subscriber Available';
    }
mysqli_close($con);
exit(json_encode($response));
?>
