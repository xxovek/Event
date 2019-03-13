<?php
include 'connection.php';
session_start();
$uid = $_SESSION['user_id'];
$main_category 		   = $_POST['main_category'];
$category_name	     = $_POST['category_name'];

if( $main_category 	== '')
{
    $sql = $con -> query("INSERT INTO expence_category(sub_category, main_category) VALUES ('".$category_name."','".$category_name."')");
    if($sql)
    {
        echo "Category Inserted Successfully.";
    }
}
else {
      $sql = $con -> query("INSERT INTO expence_category(sub_category, main_category) VALUES ('".$category_name."','".$main_category."')");

      if($sql)
      {
          echo "Category Inserted Successfully.";
      }
}
?>
