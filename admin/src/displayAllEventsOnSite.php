<?php 
require('../config/connection.php');
$response = [];
$Limit = $_REQUEST['Limit'];
$sql = "SELECT EventId,EventName,DATE_FORMAT(EventDate,'%b %d,%Y') AS EventDate,EventTime,Description,Venue,VenueCity,EventProfile,EventFlag
FROM Events WHERE EventFlag=1  ORDER BY EventDate DESC";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            array_push($response,[
                'EventId' => $row['EventId'],
                'EventName'=>ucwords($row['EventName']),
                'EventDate' => $row['EventDate'],
                'EventTime' =>$row['EventTime'],
                'Description' =>ucwords($row['Description']),
                'Venue' => ucwords($row['Venue']),
                'VenueCity' => ucwords($row['VenueCity']),
                'EventProfile' => $row['EventProfile'],
                'EventFlag' => $row['EventFlag']
            ]);
        }
    }else{
                array_push($response,[
                    'msg' => 1
                ]);
        }
}
else{
    array_push($response,[
        'msg' => 0
    ]);
}
mysqli_close($con);
exit(json_encode($response));
?>