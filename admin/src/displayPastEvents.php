<?php 
require('admin/config/connection.php');
$sql = "SELECT * FROM Events WHERE Events.EventDate < CURDATE() ORDER BY EventDate DESC LIMIT 4";
if($result = mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){?>
        <div class="col-md-3">
              <div class="probootstrap-donors text-center probootstrap-animate">
                <figure class="media">
                  <img src="admin/Events/300x300/<?php echo $row['EventProfile'];?>" alt="Spica Global Arts" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><a href="gallery.php?EventId=<?php echo $row['EventId'];?>"><?php echo ucwords($row['EventName']);?></a></h3>
                  <p class="donated"><?php echo $row['Venue'];?> <span class="money" style="font-size:18px;"><?php echo $row['VenueCity'];?></span></p>
                </div>
              </div>
            </div><?php
        }
    }else{       
    }
}
else{  
}
?>
