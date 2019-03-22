<?php 
require 'admin/config/connection.php';
$sql = "SELECT pictures FROM EventsGallary ORDER BY RAND() LIMIT 16";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){?>
            <div class="col-md-3 col-sm-4 col-xs-6 gal-item probootstrap-animate">
            <a href="admin/EventGallery/800x800/<?php echo $row['pictures'];?>" class="image-popup"><img src="admin/EventGallery/800x800/<?php echo $row['pictures'];?>" alt="Spica Global Arts" class="img-responsive"></a>
          </div>
          <?php 
        }   
    }else{ 
       
    }
}
else{  
}
?>
