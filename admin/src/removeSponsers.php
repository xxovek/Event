<?php
require('../config/connection.php');
$sponserId = $_POST['sponserId'];
$response = [];
$target_dir = "../sponsers/";
$sql = "DELETE  FROM Sponsers WHERE SponserId=$sponserId";
if($result = mysqli_query($con,$sql)){
    $response['msg'] = 'Sponser Removed Successfully';

    }else{
        $response['msg'] = 'There are no Sponsers Available';
    }
    	$filename = $target_dir.$sponserId."jpg";
    if (file_exists($filename)) {
    	unlink($filename);
    }

mysqli_close($con);
exit(json_encode($response));
?>
