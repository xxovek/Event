<?php 
require '../config/connection.php';
$response = [];
$sql = "SELECT * FROM Subscriber";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            array_push($response,[
                'subscriberId'=>$row['subscriberId'],
                'subscriberEmail' => $row['emailId'],
                'created_at' =>$row['created_at'],
                'updated_at' =>$row['updated_at']
            ]);
        }
    }else{
        $response['msg'] = 'There are no subscribers Available';
    }
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>