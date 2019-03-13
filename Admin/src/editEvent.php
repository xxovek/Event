<?php 
require('../config/connection.php');
$response = [];
$EventId = $_POST['EventId'];
$sql = "SELECT * FROM Events WHERE EventId = $EventId";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
                $response['EventName'] = $row['EventName'];
                $response['EventDate'] = $row['EventDate'];
                $response['EventTime'] = $row['EventTime'];
                $response['Description'] = $row['Description'];
                $response['Venue'] = $row['Venue'];
                $response['VenueCity'] = $row['VenueCity'];
                $response['EventProfile'] = $row['EventProfile'];
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
