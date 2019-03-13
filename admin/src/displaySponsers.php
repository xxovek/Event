<?php 
require('../config/connection.php');
$response = [];
$sql = "SELECT * FROM Sponsers";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            array_push($response,[
                'SponserId' => $row['SponserId'],
                'sponserName'=>$row['sponserName'],
                'sponserDesc' => $row['sponserDesc'],
                'sponserProfile' =>$row['sponserProfile'],
                'showFlag' =>$row['showFlag']
            ]);
        }
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
