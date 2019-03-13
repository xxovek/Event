<?php
session_start();
include 'connection.php';
$uid= $_SESSION['user_id'];
$id = $_POST['upload_expence_id'];
$target_dir = "BillReceipts/";
$target_file = $target_dir . basename($_FILES['userImage']["name"]);
$original_file_name= basename($_FILES['userImage']["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$fname=$uid."_expid_".$id.".".$imageFileType;
mysqli_query($con,"UPDATE expence set receipts_name='$fname' where expence_id='$id'");

if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES['userImage']["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0)
{
    echo "Sorry, your file was not uploaded.";
}
else
{
    move_uploaded_file($_FILES['userImage']['tmp_name'], $target_dir.$fname);
}
?>
