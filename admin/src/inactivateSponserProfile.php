<?php
require('../config/connection.php');
$sponserId = $_POST['sponserId'];
$response = [];
$sql = "UPDATE Sponsers SET showFlag = 0 WHERE sponserId=$sponserId";
if($result = mysqli_query($con,$sql)){
    $response['msg'] = 'Sponser Profile Activated Successfully';
    }else{
        $response['msg'] = 'Error While Activating Profile Try again';
    }
mysqli_close($con);
exit(json_encode($response));
?>
