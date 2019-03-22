<?php 
require 'admin/config/connection.php';
$sql = "SELECT pictures FROM EventsGallary ORDER BY RAND() LIMIT 16";
if($result = mysqli_query($con,$sql)){
    $count= mysqli_num_rows($result);
    if($count>0){
        while($row = mysqli_fetch_array($result)){?>
        <div class="item">
                  <a href="admin/EventGallery/800x800/<?php echo $row['pictures'];?>" class="image-popup">
                    <img src="admin/EventGallery/800x800/<?php echo $row['pictures'];?>" alt="Spica Global Arts" class="img-responsive">
                  </a>
                </div>
          <?php 
        }   
    }for($i=$count;$i<2;$i++){?>
        <div class="item">
                  <a href="img/img_sq_7.jpg" class="image-popup">
                    <img src="img/img_sq_7.jpg" alt="Spica Global Arts" class="img-responsive">
                  </a>
                </div><?php 
    }
}
else{  
}
?>
