<?php 
require('../config/connection.php');
$sponserId = $_POST['sponserId'];
$response = [];
$sql = "DELETE  FROM Sponsers WHERE SponserId=$sponserId";
if($result = mysqli_query($con,$sql)){
    $response['msg'] = 'Sponser Removed Successfully';
    
    }else{
        $response['msg'] = 'There are no Sponsers Available';
    }
mysqli_close($con);
exit(json_encode($response));
?>
