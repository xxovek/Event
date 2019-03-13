<?php 
require('../config/connection.php');
$response = [];
$sql = "SELECT * FROM Sponsers WHERE showFlag = 1 LIMIT 3";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            array_push($response,[
                'sponserName'=>$row['sponserName'],
                'sponserDesc' => $row['sponserDesc'],
                'sponserProfile' =>$row['sponserProfile']
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
