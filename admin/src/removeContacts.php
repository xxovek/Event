<?php 
require('../config/connection.php');
$contactId = $_POST['contactId'];
$response = [];
$sql = "DELETE  FROM Contacts WHERE contactId=$contactId";
if($result = mysqli_query($con,$sql)){
    $response['msg'] = 'Contact Removed Successfully';
    
    }else{
        $response['msg'] = 'There are no Contact Available';
    }
mysqli_close($con);
exit(json_encode($response));
?>