<?php

$EventNo= $_REQUEST['EventId'];
// echo $EventNo;
$response = [];
require '../config/connection.php';
require_once('../PHPMailer_5.2.0/class.phpmailer.php');
 $sql = "SELECT emailId FROM Subscriber";
 $result = mysqli_query($con,$sql);
    $mail   = new PHPMailer(); // defaults to using php "mail()"
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
    // echo $row['emailId'];      
    $mail->AddReplyTo("no-replay@xxovek.com","Spica Global Arts Event Organiser");
    $mail->SetFrom('no-replay@xxovek.com', 'Spica Global Arts Event Organiser');
    $address =  "".$row['emailId']."";
    $rows=='';
    if($rows=='')    //this prevents from inserting comma on before the first element
    $rows.=$row['emailId'];
    else
    $rows.=','.$row['emailId'];
    $to = explode(',',$rows);
    $mail->AddAddress($address, "Spica Global Arts Event Organiser");
    $mail->isHTML(true);
    

    $mail->Subject = "New Message From Spica Global Arts Event Organiser ";
    $mail->Body =  'For Booking Table Order<br>kunal kapse<br>Event Date:&nbsp;'.$EventNo;
  
      
        }
    }
       if(!$mail->Send($to, $subject, $body, $from)) {
         $response['success'] = false;
        // echo "Mailer Error: " . $mail->ErrorInfo;
                        } 
            else      {
                $response['success'] = true;
                        }    

    //.'<br> Event Time:&nbsp;'.$time.'<br>People Count:&nbsp;'.$people.'<br>Contact Person Name:&nbsp;'.$name.'<br> Person Email:&nbsp;'.$email.'<br>Contact Number:&nbsp;'.$phone
   
    exit(json_encode($response));
 ?>
