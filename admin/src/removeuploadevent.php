<?php
require '../config/connection.php';
$target_dir = "../EventGallery/"; // Upload directory
$upload800x800_dir = '../EventGallery/800x800/';
$EventId        = $_REQUEST['eventgallery'];
$name = $_REQUEST['name'];


	$sql="DELETE FROM EventsGallary WHERE pictures='$name'";
  mysqli_query($con,$sql);
	$response['msg'] = true;


	$filename = $target_dir.$name;
	$thumbname = $upload800x800_dir.$name;
  if (file_exists($filename)) {
  	unlink($filename);
  }
  if (file_exists($thumbname)) {
	unlink($thumbname);
  }
mysqli_close($con);
exit(json_encode($response));
?>
