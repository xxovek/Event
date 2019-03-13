<?php
include 'connection.php';
?>
  <option values=""></option>
 <?php
if($result = mysqli_query($con,"SELECT DISTINCT (expence_category.main_category) FROM expence_category"))
{
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result))
    {?>
    <option value='<?php echo $row['main_category'];?>'> <?php echo $row['main_category'];?>
     </option>
    <?php
    }
  }
}
 ?>
