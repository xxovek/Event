<?php
require('../config/connection.php');
$EventId =$_POST['EventId'];
$response = [];
$target_dir = "../Events/";
$upload1900x960_dir = '../Events/1900x960/';
$upload300x300_dir = '../Events/300x300/';
$upload600x303_dir = '../Events/600x303/';
$upload800x800_dir = '../Events/800x800/';
$egtarget_dir = "../EventGallery/"; // Upload directory
$egupload800x800_dir = '../EventGallery/800x800/';

$sql1 = "SELECT EventProfile FROM Events WHERE EventId=$EventId";
$result1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($result1);
$name = $row1['EventProfile'];
$filename = $target_dir.$name;
$thumb800x800 = $upload800x800_dir.$name;
$thumb300x300 = $upload300x300_dir.$name;
$thumb600x303 = $upload600x303_dir.$name;
$thumb1900x960 = $upload1900x960_dir.$name;

if (file_exists($filename)) {
  // echo $filename;
unlink($filename);
}
if (file_exists($thumb800x800)) {
  // echo $thumb800x800;
unlink($thumb800x800);
}
if (file_exists($thumb300x300)) {
  // echo $thumb300x300;
 unlink($thumb300x300);
}
if (file_exists($thumb600x303)) {
  // echo $thumb600x303;
 unlink($thumb600x303);
}
if (file_exists($thumb1900x960)) {
  // echo $thumb1900x960;
unlink($thumb1900x960);
}
$sql2 = "SELECT pictures FROM EventsGallary WHERE EventId=$EventId";
if($result2 = mysqli_query($con,$sql2)){
    if(mysqli_num_rows($result2)>0){
        while($row2=mysqli_fetch_array($result2)){
          $name2= $row2['pictures'];
          $egfilename = $egtarget_dir.$name2;
          $egthumb800x800 = $egupload800x800_dir.$name2;
          if (file_exists($egfilename)) {
            // echo $egfilename;
            unlink($egfilename);
          }
          if (file_exists($egthumb800x800)) {
            // echo $egthumb800x800;
          unlink($egthumb800x800);
          }
        }
   }
}
$sql = "DELETE  FROM Events WHERE EventId=$EventId";
if($result = mysqli_query($con,$sql)){
    $response['msg'] = 'Event Removed Successfully';

    }else{
        $response['msg'] = 'There are no Event Available';
    }



mysqli_close($con);
exit(json_encode($response));
?>
