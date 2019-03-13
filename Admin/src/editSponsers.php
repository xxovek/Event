<?php 
require('../config/connection.php');
$response = [];
$sponserId = $_POST['sponserId'];
$sql = "SELECT * FROM Sponsers WHERE SponserId = $spoonserId";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
                $response['SponserId'] = $row['SponserId'];
                $response['sponserName'] = $row['sponserName'];
                $response['sponserDesc'] = $row['sponserDesc'];
                $response['sponserProfile'] = $row['sponserProfile'];
                $response['showFlag'] = $row['showFlag'];
    }else{
        $response['msg'] = 'There are no Sponsers Available';
    }
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>
