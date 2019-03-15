<?php
require('../config/connection.php');
$response = [];
$sql = "SELECT * FROM Contacts";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            array_push($response,[
                'contactId'=>$row['contactId'],
                'name' => $row['name'],
                'emailId' =>$row['emailId'],
                'ContactNumber' => $row['ContactNumber'],
                'created_at' => $row['created_at']
            ]);
        }
    }else{
        $response['msg'] = 'There are no contacts Available';
    }
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>
