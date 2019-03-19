<?php
require('../config/connection.php');
$EventId = $_POST['EventId'];
$response = [];
$sql = "SELECT  EventId, pictures, pictureid FROM EventsGallary WHERE EventId=$EventId";
$result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            array_push($response,[
                'EventId'=>$row['EventId'],
                'pictures' => $row['pictures'],
                'pictureid' =>$row['pictureid']
            ]);
        }
    }
mysqli_close($con);
exit(json_encode($response));
?>
