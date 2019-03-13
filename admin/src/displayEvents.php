<?php 
require('../config/connection.php');
$response = [];
$sql = "SELECT * FROM Events";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            array_push($response,[
                'EventId' => $row['EventId'],
                'EventName'=>$row['EventName'],
                'EventDate' => $row['EventDate'],
                'EventTime' =>$row['EventTime'],
                'Description' =>$row['Description'],
                'Venue' => $row['Venue'],
                'VenueCity' => $row['VenueCity'],
                'EventProfile' => $row['EventProfile'],
                'EventFlag' => $row['EventFlag']
            ]);
        }
    }else{
        $response['msg'] = 'There are no Events Available';
    }
}
else{
    $response['msg'] = 'Server Error Please Try again';
}
mysqli_close($con);
exit(json_encode($response));
?>
