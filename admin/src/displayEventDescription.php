<?php 
require('../config/connection.php');
$response = [];
$EventId = $_GET['EventId'];
$sql = "SELECT E.EventId,E.EventName,DATE_FORMAT(E.EventDate,'%b %d,%Y') AS EventDate,E.EventTime,E.Description,E.Venue,E.VenueCity,E.EventProfile,E.EventFlag,EG.pictures
FROM Events E LEFT JOIN EventsGallary EG ON EG.EventId = E.EventId WHERE E.EventId=$EventId";
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
                'EventFlag' => $row['EventFlag'],
                'Pictures' => $row['pictures']
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
print_r(json_encode($response));
?>