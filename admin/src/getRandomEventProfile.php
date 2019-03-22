<?php 
require '../config/connection.php';
$sql = "SELECT EventProfile FROM Events ORDER BY RAND() LIMIT 1";
$response = [];
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        $response['EventProfile'] = $row['EventProfile'];
    }else{ 
        $response['EventProfile'] = '1';      
    }
}
else{  
}
exit(json_encode($response));
?>
