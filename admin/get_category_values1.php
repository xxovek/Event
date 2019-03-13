
<?php
include 'connection.php';
?>
  <option values=""></option>
  <!-- <option value="#CATEGORY1"><span data-toggle="modal" data-target="#myModal"> ADD NEW CATEGORY</span></option> -->
  <option value="#CATEGORY1">ADD NEW CATEGORY</option>
 <?php
if($result = mysqli_query($con,"SELECT expence_category.sub_category,expence_category.main_category FROM expence_category"))
{
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result))
    {?>
    <option value='<?php echo $row['sub_category']."-".$row['main_category'];?>'><?php echo $row['sub_category']."-".$row['main_category'];?>
     </option>
    <?php
    }
  }
}
 ?>
